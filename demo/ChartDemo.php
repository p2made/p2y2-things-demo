<?php
/**
 * ChartDemo.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\ChartDemo
 */

/**
 * Load this asset with...
 * p2m\demo\demo\ChartDemo::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\demo\ChartDemo',
 */

namespace p2m\demo\demo;

use yii\web\AssetBundle;

class ChartDemo extends AssetBundle
{
	public $sourcePath = '@p2m/demo/demo';

	public $js = [
		'data/chart-area-demo.js',
		'data/chart-pie-demo.js',
	];

	public $depends = [
		'p2m\assets\P2ChartJsAsset',
	];
}
