<?php

namespace p2m\demo\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class DemoController extends Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				'@app/views/layouts' => '@vendor/p2made/p2y2-things-demo/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		$this->layout = '@vendor/p2made/p2y2-things-demo/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView($parts = ['index', null])
	{
		$path = '';

		// Do necessary setup stuff
		// including constructing $path

		// Render the specific view for Letter
		return $this->render('@app/modules/letter/site/' . $path);
	}
}
