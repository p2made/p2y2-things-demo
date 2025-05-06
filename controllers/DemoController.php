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
 * @class \p2m\demo\assets\ThingsDemoAsset
 */

/**
 * Demo params references
 *
 * Yii::$app->params['bodyMode'][0] // 'admin'
 * Yii::$app->params['bodyMode'][1] // 'auth'
 * Yii::$app->params['bodyMode'][2] // 'error'
 *
 * Yii::$app->params['menus']['user']
 * Yii::$app->params['menus']['work']
 * Yii::$app->params['menus']['side']
 *
 * Yii::$app->params['copyright']
 *
 */

namespace p2m\demo\controllers;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;
use p2m\demo\assets\ThingsDemoAsset;
use p2m\helpers\BI;

/**
 * Site controller
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
	protected $demoUser = 'Demo User';

	public function init(): void
	{
		parent::init();

		$this->view->title = self::DEMO_TITLE;

		$this->view->params['copyright'] = self::COPYRIGHT;
		$this->view->params['username'] = Yii::$app->user->identity->username ?? $this->demoUser;

		// Register the meta asset
		$this->view->params['demoAssetUrl'] = ThingsDemoAsset::register($this->view)->baseUrl;
		$this->view->params['showSearch']   = self::SHOW_SEARCH;
		$this->view->params['searchModel']  = new \yii\base\DynamicModel(['q']);
	}

	/**
	 * {@inheritdoc}
	public function behaviors(): array
	{
		return [
			'access' => [
				'class' => AccessControl::class,
				'only' => ['logout', 'signup'],
				'rules' => [
					[
						'actions' => ['signup'],
						'allow' => true,
						'roles' => ['?'],
					],
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::class,
				'actions' => [
					'logout' => ['post'],
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
	 * Displays homepage.
	 *
	 * @return mixed
	public function actionIndex(): void
	{
		return $this->render('index');
	}
	 */

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

	/**
	 * Simulate a 401.
	 *
	 * @return mixed
	public function action401(): void
	{
		$this->view->params['bodyMode'] = 'error'; // In your error action

		throw new HttpException(401, 'You are not authorized to view this page.');
	}
	 */

	/**
	 * Simulate a 404.
	 *
	 * @return mixed
	public function action404(): void
	{
		$this->view->params['bodyMode'] = 'error'; // In your error action

		throw new NotFoundHttpException('The page you requested could not be found.');
	}
	 */

	/**
	 * Simulate a 500.
	 *
	 * @return mixed
	public function action500(): void
	{
		$this->view->params['bodyMode'] = 'error'; // In your error action

		throw new ServerErrorHttpException('An internal server error occurred.');
	}
	 */

	/**
	 * Logs in a user.
	 *
	 * @return mixed
	public function actionLogin(): string
	{
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}

		$model->password = '';

		return $this->render('login', [
			'model' => $model,
		]);
	}
	 */

	/**
	 * Logs out the current user.
	 *
	 * @return mixed
	public function actionLogout(): string
	{
		Yii::$app->user->logout();

		return $this->goHome();
	}
	 */

	/**
	 * Displays about page.
	 *
	 * @return mixed
	public function actionAbout(): string
	{
		return $this->render('about');
	}
	 */

	/**
	 * Requests password reset.
	 *
	 * @return mixed
	public function actionRequestPasswordReset(): string
	{
		$model = new PasswordResetRequestForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if ($model->sendEmail()) {
				Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

				return $this->goHome();
			}

			Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
		}

		return $this->render('requestPasswordResetToken', [
			'model' => $model,
		]);
	}
	 */

	/**
	 * Resets password.
	 *
	 * @param string $token
	 * @return mixed
	 * @throws BadRequestHttpException
	public function actionResetPassword($token): string
	{
		try {
			$model = new ResetPasswordForm($token);
		} catch (InvalidArgumentException $e) {
			throw new BadRequestHttpException($e->getMessage());
		}

		if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
			Yii::$app->session->setFlash('success', 'New password saved.');

			return $this->goHome();
		}

		return $this->render('resetPassword', [
			'model' => $model,
		]);
	}
	 */

	/**
	 * Verify email address
	 *
	 * @param string $token
	 * @throws BadRequestHttpException
	 * @return yii\web\Response
	public function actionVerifyEmail($token): string
	{
		try {
			$model = new VerifyEmailForm($token);
		} catch (InvalidArgumentException $e) {
			throw new BadRequestHttpException($e->getMessage());
		}
		if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
			Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
			return $this->goHome();
		}

		Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
		return $this->goHome();
	}
	 */
}
