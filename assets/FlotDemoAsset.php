<?php
/**
 * FlotDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\FlotDemoAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\FlotDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\FlotDemoAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class FlotDemoAsset extends AssetBundle
{
	//public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';
	public $sourcePath = '@p2m/demo/assets/lib';

	public $css = [
		'css/flot-demo.css',
	];

	public $depends = [
		'p2m\demo\assets\ThingsDemoAsset',
	];
}
