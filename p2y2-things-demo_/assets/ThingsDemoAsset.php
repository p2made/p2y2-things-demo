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
 * p2m\assets\demo\ThingsDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\demo\ThingsDemoAsset',
 */

namespace p2m\demo\assets;

class ThingsDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/p2y2-things-demo/assets/lib';

	public $css = [
		'css/things-demo.css',
	];

	public $js = [
		'js/things-demo.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}


/*
class ThingsDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2m/p2y2-things-demo/assets/lib';
	//public $baseUrl = '@web';
	public $css = [
		'css/things-demo.css',
	];
	public $js = [
		'js/things-demo.js',
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
				'css/things-demo.css',
			],
			'js' => [
				'js/things-demo.js',
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

