<?php
/**
 * MorrisDemoData.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\MorrisDemoData
 */

/**
 * Load this asset with...
 * p2m\demo\assets\MorrisDemoData::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\MorrisDemoData',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class MorrisDemoData extends AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';
	//public $sourcePath = '@p2m/demo/assets/lib';

	public $js = [
		'morris-data.js'
	];

	public $depends = [
		'p2m\demo\assets\ThingsDemoAsset',
	];
}
