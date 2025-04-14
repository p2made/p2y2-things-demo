<?php

namespace p2m\demo\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class DemoController extends Controller
{
	//public $layout = '@p2m/demo/views/layouts/main';

	public function actionPage($part1 = '', $part2 = '')
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
