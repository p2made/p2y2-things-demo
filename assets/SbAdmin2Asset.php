<?php
/**
 * SbAdmin2Asset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\assets\SbAdmin2Asset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\SbAdmin2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\SbAdmin2Asset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class SbAdmin2Asset extends AssetBundle
{
	public $sourcePath = '@p2m/demo/assets/lib';

	public $css = [
		'css/sb-admin-2.min.css',
	];

	public $js = [
		'js/sb-admin-2.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
