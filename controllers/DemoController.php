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
use yii\base\DynamicModel;
use yii\web\Response;
use yii\web\NotFoundHttpException;
//use yii\web\ServerErrorHttpException;
use p2m\demo\models\User;
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
	private $demoUser         = 'demo';
	private $demoPassword     = 'demo';
	//private $demoUser         = 'Demo User';
	//private $demoEmail        = 'demo@example.com';
	//private $demoPassword     = 'pa$sw0rd';

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
	 * Simplifies setting body mode.
	 */
	private function setBodyMode(string $bodyMode): void
	{
		$this->view->params['bodyMode'] = $bodyMode;
	}

	/**
	 * Behaviors: who can see index/search, and HTTP verbs
	 *
	 * {@inheritdoc}
	 */
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
					'logout' => ['post'],  // demo-only; normally POST
					//'logout' => ['post'],
				],
			],
		];
	}

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
	 * Override beforeAction() to guard access
	 * {@inheritdoc}
	 */
	public function beforeAction($action)
	{
		// always allow error pages
		if ($action->id === 'error') {
			return parent::beforeAction($action);
		}

		$session = Yii::$app->session;
		$loggedIn = $session->get('demoLoggedIn', false);

		// if not logged in and not on login/logout, redirect to login
		if (!$loggedIn && !in_array($action->id, ['login','logout'], true)) {
			return $this->redirect(['login']);
		}

		return parent::beforeAction($action);
	}

	/**
	 * Displays Dashboard.
	 *
	 * @return mixed
	 */
	public function actionIndex(): string
	{
		$this->setBodyMode(self::MODE_ADMIN);
		//$this->view->params['bodyMode'] = self::MODE_ADMIN;

		// optionally, you can prepare dataProviders here if your index lists things

		return $this->render('@p2m/demo/views/site/index.php');
		//return $this->redirect(['index']);
	}

	/**
	 * Displays a page.
	 *
	 * @return mixed
	 */
	public function actionView(string $part1 = '', ?string $part2 = null): string
	{
		$this->setBodyMode(self::MODE_ADMIN);
		//$this->view->params['bodyMode'] = self::MODE_ADMIN;

		// block out the special routes entirely
		if (in_array($part1, ['login','logout','search','error'], true)) {
			throw new BadRequestHttpException('Not found');
		}

		$route = trim("$part1/$part2", '/');

		if ($route === '') {
			$route = 'index';
		}

		// pass through any shared params, e.g. bodyMode
		return $this->render("@p2m/demo/views/site/{$route}.php");
		//return $this->render($route);
	}
	/**
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
	 */

	/**
	 * Displays the search page.
	 *
	 * @return mixed
	 */
	public function actionSearch(): string
	{
		$this->setBodyMode(self::MODE_ADMIN);
		//$this->view->params['bodyMode'] = self::MODE_ADMIN;

		return $this->render('@p2m/demo/views/site/search.php');
		//return $this->render('search');
	}

	/**
	 * Logs the user in.
	 */
	public function actionLogin(): Response|string
	{
		$this->setBodyMode(self::MODE_AUTH);
		//$this->view->params['bodyMode'] = self::MODE_AUTH;

		$model = new \p2m\demo\models\User();

		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if ($model->validateDemo()) {
				Yii::$app->session->set('demoLoggedIn', true);
				Yii::$app->session->set('demoUser', $model->getDisplayName());
				//Yii::$app->session->set('demoUser', $model->displayName);
				return $this->redirect(['index']);
			}
			$model->addError('password','Invalid demo credentials');
		}

		return $this->render('@p2m/demo/views/site/login.php', [
			'model' => $model,
		]);
		/*
		return $this->render('login', [
			'model' => $model,
		]);
		*/
	}

	/**
	 * Clears the demo session and redirects to login.
	 *
	 * @return Response
	 */
	public function actionLogout(): Response|string
	{
		$session = Yii::$app->session;
		$session->remove('demoLoggedIn');
		$session->remove('demoUser');
		//return $this->redirect(['@p2m/demo/views/site/index.php']);
		//return $this->redirect(['@p2m/demo/views/site/login.php']);
		//return $this->redirect(['index']);
		return $this->redirect(['login']);   // ← goes straight to actionLogin()
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
		$this->view->params['bodyMode'] = self::MODE_ERROR;

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
			'statusCode' => $code,
			'name'       => $name,
			'message'    => $message,
		]);
	}
}
