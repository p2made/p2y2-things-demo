<?php
/**
 * FlagIconsDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\FlagIconsDemoAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\FlagIconsDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\FlagIconsDemoAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class FlagIconsDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/demo/assets/lib';

	public $css = [
		'css/flag-icon-demo.css',
	];

	public $js = [
		'js/flag-icon-demo.js',
	];

	public $depends = [
		'p2m\demo\assets\ThingsDemoAsset',
	];
}
