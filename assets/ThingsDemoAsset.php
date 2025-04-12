<?php
/**
 * ThingsDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\ThingsDemoAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\ThingsDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\ThingsDemoAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class ThingsDemoAsset extends AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';
	//public $sourcePath = '@p2m/demo/assets/lib';

	public $css = [
		'css/things-demo.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
