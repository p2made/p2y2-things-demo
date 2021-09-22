<?php
/**
 * ThingsDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/p2y2-things-demo
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\demo\assets\ThingsDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\ThingsDemoAsset',
 */

namespace p2m\demo\assets;

class ThingsDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2-things-demo/assets/lib';

	public $css = [
		'css/heroic-features.css',
	];

	public $js = [
		'js/heroic-features.js',
	];

	public $depends = [
		'p2m\assets\BootstrapIconsAsset',
		'p2m\assets\P2CoreJsAsset',
	];
}

//vendor/p2made/p2y2-things/p2y2-things-demo/assets/lib
/*
class ThingsDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/p2y2-things-demo/assets/lib';
	//public $baseUrl = '@web';
	public $css = [
		'css/heroic-features.css',
	];
	public $js = [
		'js/heroic-features.js',
	];
	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
 */

/*
class ThingsDemoAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m/p2y2-things-demo/assets/lib',
			'css' => [
				'css/heroic-features.css',
			],
			'js' => [
				'js/heroic-features.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
 */

/*
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/site.css',
		['css/print.css', 'media' => 'print'],
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
 */

/*
class CircleButtonsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/lib';

	public $css = [
		'css/circle-buttons.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
 */

/*
 */

