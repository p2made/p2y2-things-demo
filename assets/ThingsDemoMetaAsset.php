<?php
/**
 * ThingsDemoMetaAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/p2y2-demo
 * @class \p2m\demo\assets\ThingsDemoMetaAsset
 */

/**
 * Load this asset with...

p2m\demo\assets\ThingsDemoMetaAsset::register($this);

 * or...

use p2m\demo\assets\ThingsDemoMetaAsset;
ThingsDemoMetaAsset::register($this);

 * or specify as a dependency with...

		'p2m\demo\assets\ThingsDemoMetaAsset',

 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class ThingsDemoMetaAsset extends AssetBundle
{
	public $sourcePath = '@p2m/demo/assets/lib/p2-meta';

	//public $css = [
	//	'css/things-demo.css',
	//];

	public $depends = [];
}
