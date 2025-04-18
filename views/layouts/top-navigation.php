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
//use yii\bootstrap5\NavBar;
use p2m\demo\widgets\SbaNavBar;
use p2m\helpers\BI;

$searchModel = new \yii\base\DynamicModel(['q']);

$demoTitle = $this->params['demoTitle'];

SbaNavBar::begin([
	'brandLabel' => $demoTitle,
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'sb-topnav navbar navbar-expand navbar-dark bg-dark',
	],
]);
SbaNavBar::end();
/**
$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
	['label' => 'About', 'url' => ['/site/about']],
	['label' => 'Contact', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
}

echo Nav::widget([
	'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
	'items' => $menuItems,
]);
if (Yii::$app->user->isGuest) {
	echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
} else {
	echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
		. Html::submitButton(
			'Logout (' . Yii::$app->user->identity->username . ')',
			['class' => 'btn btn-link logout text-decoration-none']
		)
		. Html::endForm();
}
 */
