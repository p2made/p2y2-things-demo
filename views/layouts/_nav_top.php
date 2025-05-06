<?php
/**
 * @p2m/demo/views/layouts/_nav_top.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_nav_top.php'); */

/** @var \yii\web\View $this */
/** @var string $this->title */

use yii\bootstrap5\Html;
use yii\bootstrap5\NavBar;
use p2m\helpers\BI;

// pull those same flags that nav_search uses:
$showSearch  = $this->params['showSearch']  ?? true;
$searchModel = $this->params['searchModel'] ?? null;

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
	BI::i(BI::_LIST)->size(1),
	[
		'class' => 'btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0',
		'id' => 'sidebarToggle',
		'type' => 'button',
	]
);

// if the search is hidden, wrap the dropdowns in ms-auto so they float right:
if (!$showSearch || $searchModel === null) {
	echo Html::beginTag('div', ['class' => 'ms-auto d-flex']);
}
else {
	echo $this->render(
		'@p2m/demo/views/layouts/_nav_search.php',
		['searchModel' => $searchModel],
	);
}

echo $this->render(
	'@p2m/demo/views/layouts/_nav_dropdown.php',
	['name' => 'work', 'menu' => Yii::$app->params['menus']['work']]
);
echo $this->render(
	'@p2m/demo/views/layouts/_nav_dropdown.php',
	['name' => 'user', 'menu' => Yii::$app->params['menus']['user']]
);

if (!$showSearch || $searchModel === null) {
	echo Html::endTag('div');
}

NavBar::end();
