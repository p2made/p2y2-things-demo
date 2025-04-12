<?php
/**
 * DataTablesDemoAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\DataTablesDemoAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\DataTablesDemoAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\DataTablesDemoAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class DataTablesDemoAsset extends AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';
	//public $sourcePath = '@p2m/demo/assets/lib';

	public $js = [
		'js/datatables-demo.js'
	];

	public $depends = [
		'p2m\demo\assets\ThingsDemoAsset',
	];
}
