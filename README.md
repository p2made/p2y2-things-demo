# P2Y2Things Demo 5.0.0

[![License](https://poser.pugx.org/p2made/p2y2-things-demo/license)](https://packagist.org/packages/p2made/p2y2-things-demo)
[![Total Downloads](https://poser.pugx.org/p2made/p2y2-things-demo/downloads)](https://packagist.org/packages/p2made/p2y2-things-demo)
[![Monthly Downloads](https://poser.pugx.org/p2made/p2y2-things-demo/d/monthly)](https://packagist.org/packages/p2made/p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/p2y2-things-demo/v/stable)](https://packagist.org/packages/p2made/p2y2-things-demo)
[![Latest Unstable Version](https://poser.pugx.org/p2made/p2y2-things-demo/v/unstable)](https://packagist.org/packages/p2made/p2y2-things-demo)

---

# ¡¡ Notice !!

After an extented period of life getting in the way I'm back to [Yii2](https://www.yiiframework.com/) development. I'll be rebasing every project as I resume work on it. Projects that use [Bootstrap](https://getbootstrap.com/) will resume as version `5.0.0` for Bootstrap 5.x.

---

A set of pages to demonstrate [`p2made/p2y2-things`](https://github.com/p2made/p2y2-things), bundled as a theme.

It declares p2made/p2y2-things as a dependancy.

# Installation

The preferred way to install P2Y2Things Demo is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require --prefer-dist p2made/p2y2-things-demo "^5.0"
```

or

```
php composer.phar require --prefer-dist p2made/p2y2-things-demo "^5.0"
```

Alternatively add:

```
	"p2made/p2y2-things-demo": "^5.0"
```

to the requires section of your `composer.json` file & P2Y2Things Demo will be installed next time you run `composer update`.

The files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

# Quick Start

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

```
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2m/p2y2-things-demo/views',
				],
			],
		],
	],
```

To view pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

```
	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}
```

# And then...

P2Y2Things Demo uses [P2Y2Things](https://github.com/p2made/p2y2-things) which requires some Yii 2 assets to be nullified to avoid conflicts through double loading. Modify `common/config/main.php` with...

```
	'components' => [
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		...
	],
```

**DO NOT** modify the views in the  `views/` folder. Your changes will be lost next time you run `composer update`.

You can copy elements from these examples into your own views.
