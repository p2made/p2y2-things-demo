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
//use p2m\demo\widgets\SbaNavBar;
use p2m\helpers\BI;

$searchModel = new \yii\base\DynamicModel(['q']);

$demoTitle = $this->params['demoTitle'];

NavBar::begin([
	'brandLabel' => Yii::$app->name,
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'sb-topnav navbar navbar-expand navbar-dark bg-dark',
	],
]);
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
NavBar::end();
?>

<!--
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

	<a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>

	<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

	<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
		<div class="input-group">
			<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch">
			<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
		</div>
	</form>

	<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
			<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#!">Settings</a></li>
				<li><a class="dropdown-item" href="#!">Activity Log</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#!">Logout</a></li>
			</ul>
		</li>
	</ul>
</nav>
-->


<?php
/**
SbaNavBar::begin([
    'brandLabel' => $demoTitle,
    'brandUrl' => Yii::$app->homeUrl,
    'brandOptions' => ['class' => 'navbar-brand ps-3'],
    'options' => ['class' => 'sb-topnav navbar navbar-expand navbar-dark bg-dark'],
    'searchModel' => $searchModel,
    'showSearch' => true,
]);
SbaNavBar::end();
 */

/**
 */
?>
