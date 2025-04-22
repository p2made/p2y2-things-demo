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

namespace p2m\demo\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use p2m\demo\assets\ThingsDemoAsset;
use p2m\helpers\BI;

/**
 * Site controller
 */
class DemoController extends Controller
{
	// Title for demo pages
	protected $demoTitle = 'p2y2-things-demo';

	// User for demo pages
	protected $demoUser = 'Demo User';

	// User for demo pages
	protected $copyright = 'Pedro Plowman';

	// User for user menu
	protected $userMenu = [
		['label' => 'Settings', 'url' => '#!'],
		['label' => 'Activity Log', 'url' => '#!'],
		'<div class="dropdown-divider"></div>',
		['label' => 'Logout', 'url' => '#!'],
	];

	// User for work menu
	protected $workMenu = [
		['label' => 'Contacts', 'url' => '#!'],
		['label' => 'Messages', 'url' => '#!'],
		['label' => 'Tasks', 'url' => '#!'],
		'<div class="dropdown-divider"></div>',
		['label' => 'Documents', 'url' => '#!'],
		['label' => 'Media', 'url' => '#!'],
	];

	// User for side menu
	protected $sideMenu = [
		'Core' => [
			[
				'label' => 'Dashboard',
				'icon' => BI::_SPEEDOMETER2,
				'url' => ['/']],
		],
		'Interface' => [
			[
				'label' => 'Layouts',
				'icon' => BI::_COLUMNS,
				'items' => [
					['label' => 'Static Navigation', 'url' => ['/layout/static']],
					['label' => 'Light Sidenav', 'url' => ['/layout/light']],
				],
			],
			[
				'label' => 'Pages',
				'icon' => BI::_BOOK,
				'items' => [
					[
						'label' => 'Authentication',
						'items' => [
							['label' => 'Login', 'url' => ['/login']],
							['label' => 'Register', 'url' => ['/register']],
						],
					],
					[
						'label' => 'Error',
						'items' => [
							['label' => '401 Page', 'url' => ['/error/401']],
							['label' => '404 Page', 'url' => ['/error/404']],
							['label' => '500 Page', 'url' => ['/error/500']],
						],
					],
				],
			],
		],
		'Addons' => [
			[
				'label' => 'Data',
				'icon' => BI::_CLIPBOARD_DATA,
				'items' => [
					['label' => 'Charts', 'url' => ['/charts']],
					['label' => 'Tables', 'url' => ['/tables']],
				],
			],
			[
				'label' => 'Icons',
				'icon' => BI::_EMOJI_LAUGHING_FILL,
				'items' => [
					['label' => 'Bootstrap Icons', 'url' => ['/icons/bootstrap']],
					['label' => 'Emoji Icons', 'url' => ['/icons/emoji']],
					['label' => 'Flag Icons', 'url' => ['/icons/flags']],
				],
			],
		],
	];

	public function init()
	{
		parent::init();

		$this->view->title = $this->demoTitle;

		$this->view->params['username'] = Yii::$app->user->identity->username ?? $this->demoUser;
		$this->view->params['copyright'] = $this->copyright;
		$this->view->params['menus'] = [
			'user' => $this->userMenu,
			'work' => $this->workMenu,
			'side' => $this->sideMenu,
		];

		// Register the meta asset
		//$demoAsset = ThingsDemoAsset::register($this->view);
		//$this->view->params['demoAssetUrl'] = $demoAsset->baseUrl;
		$this->view->params['demoAssetUrl'] = ThingsDemoAsset::register($this->view)->baseUrl;
		$this->view->params['showSearch'] = true;
		$this->view->params['searchModel'] = new \yii\base\DynamicModel(['q']);
	}

	public function actionView($part1 = '', $part2 = '')
	{
		//die("✅ DemoController reached: $part1 / $part2");

		//$route = trim($part1 . '/' . $part2, '/');
		$route = trim("$part1/$part2", '/');

		if ($route === '') {
			$route = 'index';
		}

		$viewFile = "@p2m/demo/views/site/{$route}.php";

		if (!is_file(Yii::getAlias($viewFile))) {
			throw new NotFoundHttpException("The requested page does not exist: $route");
		}

		if (in_array($route, ['contact', 'login', 'signup'])) {
			$models = [
				'contact' => ['name', 'email', 'subject', 'body', 'verifyCode'],
				'login' => ['username', 'password', 'rememberMe'],
				'signup' => ['username', 'email', 'password'],
			];

			$model = new \yii\base\DynamicModel($models[$route]);

			return $this->render($viewFile, ['model' => $model]);
		}

		//return $this->render("@p2m/demo/views/site/{$route}");
		return $this->render($viewFile);
	}
}
