<?php
/**
 * FlotDemoData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\FlotDemoData
 */

/**
 * Load this asset with...
 * p2m\demo\assets\FlotDemoData::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\FlotDemoData',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class FlotDemoData extends AssetBundle
{
	//public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';
	public $sourcePath = '@p2m/demo/assets/lib';

	public $js = [
		'flot-data.js'
	];

	public $depends = [
		'p2m\demo\assets\FlotDemoAsset',
		//'p2m\demo\assets\ThingsDemoAsset',
	];
}
