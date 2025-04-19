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
/** @var string $this->title */

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Dropdown;
use p2m\helpers\BI;

$searchModel = new \yii\base\DynamicModel(['q']);

NavBar::begin([
	'brandLabel' => $this->title,
	'brandUrl' => Yii::$app->homeUrl,
	'brandOptions' => ['class' => 'navbar-brand ps-3'],
	'options' => [
		'class' => 'sb-topnav navbar navbar-expand navbar-dark bg-dark',
	],
	'renderInnerContainer' => false,
]);

echo Html::button(
	BI::i(BI::_LIST)->size(4),
	[
		'class' => 'btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0',
		'id' => 'sidebarToggle',
		'type' => 'button',
	]
);

echo $this->render('@p2m/demo/views/layouts/navigation-search.php');
echo $this->render('@p2m/demo/views/layouts/navigation-dropdown.php', ['which' => 'work']);
echo $this->render('@p2m/demo/views/layouts/navigation-dropdown.php', ['which' => 'user']);

NavBar::end();
