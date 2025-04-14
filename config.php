<?php
return [
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@p2m/demo/views',
				],
			],
		],
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'enableStrictParsing' => false,
		],
	],
	'controllerMap' => [
		'demo' => [
			'class' => 'p2m\demo\controllers\DemoController',
		],
	],
];
		/**
		 */
