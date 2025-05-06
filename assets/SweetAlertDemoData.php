<?php
/**
 * SweetAlertDemoData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\SweetAlertDemoData
 */

/**
 * Load this asset with...
 * p2m\demo\assets\SweetAlertDemoData::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\SweetAlertDemoData',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class SweetAlertDemoData extends AssetBundle
{
	public $sourcePath = '@p2m/demo/assets/lib';

	public $js = [
		'js/sweet-alert-data.js'
	];

	public $depends = [
		'p2m\demo\assets\SweetAlertDemoAsset',
		//'p2m\demo\assets\ThingsDemoAsset',
	];
}
