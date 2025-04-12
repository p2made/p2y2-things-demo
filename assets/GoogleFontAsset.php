<?php
/**
 * GoogleFontAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\GoogleFontAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\GoogleFontAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\GoogleFontAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class GoogleFontAsset extends AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';
	//public $sourcePath = '@p2m/demo/assets/lib';

	public $css = [
		'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
	];
}
