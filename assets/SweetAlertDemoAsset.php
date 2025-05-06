<?php
/**
 * SweetAlertDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\SweetAlertDemoAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\SweetAlertDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\SweetAlertDemoAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class SweetAlertDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/demo/assets/lib';

	public $js = [
		'js/sweetalert-demo.js',
	];

	public $depends = [
		'p2m\demo\assets\ThingsDemoAsset',
	];
}
