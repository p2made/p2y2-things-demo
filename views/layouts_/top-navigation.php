<?php
/**
 * @p2m/demo/views/layouts/top-navigation.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** @var \yii\web\View $this */

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use p2m\helpers\BI;

$demoTitle = $this->params['demoTitle'];
?>
	<?php
	NavBar::begin([
		'brandLabel' => $demoTitle,
		'brandUrl' => Yii::$app->homeUrl,
		'brandOptions' => 'navbar-brand ps-3',
		'options' => [
			'class' => 'sb-topnav navbar navbar-expand navbar-dark bg-dark',
		],
	]);
	NavBar::end();
	?>
