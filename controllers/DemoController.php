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

/**
 * Site controller
 */
class DemoController extends Controller
{
	// Title for demo pages
	protected $demoTitle = 'p2y2-things-demo';

	public function actionPage($part1 = '', $part2 = '') // actionView
	{
		//die("✅ DemoController reached: $part1 / $part2");

		//$route = trim($part1 . '/' . $part2, '/');
		$route = trim("$part1/$part2", '/');

		if ($route === '') {
			$route = 'index';
		}

		// Register the meta asset
		$demoAsset = ThingsDemoAsset::register($this->view);
		$this->view->params['demoAssetUrl'] = $demoAsset->baseUrl;
		$this->view->params['demoTitle'] = $this->demoTitle;

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
