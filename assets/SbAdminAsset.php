<?php
/**
 * SbAdminAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\assets\SbAdminAsset
 */

/**
 * Load this asset with...
 * p2m\demo\assets\SbAdminAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\demo\assets\SbAdminAsset',
 */

namespace p2m\demo\assets;

use yii\web\AssetBundle;

class SbAdminAsset extends AssetBundle
{
	public $sourcePath = '@p2m/demo/assets/lib';

	public $css = [
		'css/sb-admin.min.css',
	];

	public $js = [
		'js/sb-admin.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
