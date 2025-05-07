<?php
/**
 * DemoController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\controllers\DemoController
 */

/**
 * Demo menus references
 *
 * Yii::$app->params['menus']['user']
 * Yii::$app->params['menus']['work']
 * Yii::$app->params['menus']['side']
 *
 */

namespace p2m\demo\controllers;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use p2m\demo\models\DemoSearch;
//use yii\web\NotFoundHttpException;
//use yii\web\ServerErrorHttpException;
use p2m\demo\assets\ThingsDemoAsset;
use p2m\helpers\BI;

/**
 * Demo controller
 */
class DemoController extends Controller
{
	// bodyMode values:
	private const MODE_ADMIN  = 'admin';
	private const MODE_AUTH   = 'auth';
	private const MODE_ERROR  = 'error';
	// Title for demo pages
	private const DEMO_TITLE  = 'p2y2-things-demo';
	// Copyright
	private const COPYRIGHT   = 'Pedro Plowman';
	// Show search
	private const SHOW_SEARCH = true;

	// User for demo pages
	private $demoUser         = 'Demo User';
	private $demoPassword     = 'pa$sw0rd';

	public function init(): void
	{
		parent::init();

		$this->view->title = self::DEMO_TITLE;

		$this->view->params['copyright'] = self::COPYRIGHT;
		$this->view->params['username'] = Yii::$app->user->identity->username ?? $this->demoUser;

		// Register the meta asset
		$this->view->params['demoAssetUrl'] = ThingsDemoAsset::register($this->view)->baseUrl;

		$this->view->params['showSearch'] = self::SHOW_SEARCH;
		if (self::SHOW_SEARCH) {
			$searchModel = new \p2m\demo\models\DemoSearch();
			//$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
			$this->view->params['searchModel'] = $searchModel;
			//$this->view->params['dataProvider'] = $dataProvider;
		}
	}

	/**
	 * Behaviors: who can see index/search, and HTTP verbs
	 * {@inheritdoc}
	public function behaviors(): array
	{
		return [
			'access' => [
				'class' => AccessControl::class,
				// allow only logged-in users to index & search
				'only'  => ['index', 'search'],
				//'only' => ['logout', 'signup'],
				'rules' => [
					[
						'actions' => ['index', 'search'],
						//'actions' => ['signup'],
						'allow'   => true,
						'roles'   => ['@'],
						//'roles' => ['?'],
					],
					// allow guests to see error (and later login/signup)
					[
						'actions' => ['error'],
						//'actions' => ['logout'],
						'allow'   => true,
						'roles'   => ['?', '@'],
						//'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::class,
				'actions' => [
					'search' => ['get'],
					'error'  => ['get','post'],
					//'logout' => ['post'],
				],
			],
		];
	}
	 */

	/**
	 * {@inheritdoc}
	 */
	public function actions(): array
	{
		return [
			'error' => [
				'class' => \yii\web\ErrorAction::class,
			],
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}

	/**
	 * Displays Dashboard.
	 *
	 * @return mixed
	 */
	public function actionIndex(): string
	{
		// optionally, you can prepare dataProviders here if your index lists things

		return $this->render('index', [
			'bodyMode' => self::MODE_ADMIN,
		]);
	}

	/**
	 * Displays a page.
	 *
	 * @return mixed
	 */
	public function actionView($part1 = '', $part2 = ''): string
	{
		//die("✅ DemoController reached: $part1 / $part2");

		//$route = trim($part1 . '/' . $part2, '/');
		$route = trim("$part1/$part2", '/');

		if ($route === '') {
			$route = 'index';
		}

		if (in_array($route, ['contact', 'login', 'signup'])) {
			$models = [
				'contact' => ['name', 'email', 'subject', 'body', 'verifyCode'],
				'login' =>   ['username', 'password', 'rememberMe'],
				'signup' =>  ['username', 'email', 'password'],
			];

			$model = new \yii\base\DynamicModel($models[$route]);

			return $this->render($viewFile, ['model' => $model]);
		}

		//return $this->render("@p2m/demo/views/site/{$route}");
		return $this->render(
			"@p2m/demo/views/site/{$route}.php",
			['bodyMode' => self::MODE_ADMIN]
		);
	}

	/**
	 * Displays the search page.
	 *
	 * @return mixed
	 */
	public function actionSearch(): string
	{
		return $this->render('search', [
			'bodyMode' => self::MODE_ERROR,
		]);
	}

	/**
	 * Unified error handler:
	 *
	 * @param int|null $code  if set, we are *simulating* that HTTP status
	 * @return string
	 * @throws HttpException when simulating
	 */
	public function actionError(?int $code = null): string
	{
		// If you visited /401 or /502 etc, simulate that error:
		if ($code !== null) {
			// get standard reason phrase or fallback
			$texts = \yii\web\Response::$statusTexts;
			$message = $texts[$code] ?? 'Unknown error';
			throw new HttpException($code, $message);
		}

		// Otherwise we were called by Yii's errorHandler:
		$handler   = Yii::$app->getErrorHandler();
		$exception = $handler->exception;

		// If no exception is set, show a generic 500:
		if ($exception === null) {
			$code      = 500;
			$name      = 'Error';
			$message   = 'An internal server error occurred.';
		} else {
			// pick up real values
			if ($exception instanceof HttpException) {
				$code = $exception->statusCode;
			} else {
				$code = 500;
			}
			// Yii provides a nice name helper:
			$name    = $handler->getExceptionName($exception);
			$message = $exception->getMessage();
		}

		// tell your layout to load the "error" body partial
		$this->view->title = "$code – $name";

		return $this->render('@p2m/demo/views/site/error.php', [
			'bodyMode'   => self::MODE_ERROR,
			'statusCode' => $code,
			'name'       => $name,
			'message'    => $message,
		]);
	}
}
