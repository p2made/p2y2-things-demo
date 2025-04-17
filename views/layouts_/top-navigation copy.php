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
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<!-- Navbar Brand-->
		<a class="navbar-brand ps-3" href="/"><?= $demoTitle ?></a>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch">
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
			</div>
		</form>
		<!-- Navbar-->
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



<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	<!-- Navbar Brand-->
	<?= Html::a($demoTitle, Yii::$app->homeUrl, ['class' => 'navbar-brand ps-3']) ?>
	<!-- Sidebar Toggle-->
	<?= Html::button(BI::i(BI::_LIST),  [
		'class' => 'btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0',
		'id' => 'sidebarToggle',
		'type' => 'button',
	]) ?>
	<!-- Navbar Search-->
	<?= Html::beginForm(
		'', // leave action empty for now (or set a route like ['demo/search'])
		'get',
		['class' => 'd-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0']
	) ?>
		<div class="input-group">
			<?= Html::input('text', 'q', '', [
				'class' => 'form-control',
				'placeholder' => 'Search for...',
				'aria-label' => 'Search for...',
				'aria-describedby' => 'btnNavbarSearch',
			]) ?>
			<?= Html::button(
				BI::i(BI::_SEARCH),
				[
					'class' => 'btn btn-primary',
					'id' => 'btnNavbarSearch',
					'type' => 'submit',
				]
			) ?>
		</div>
	<?= Html::endForm() ?>
	<!-- Navbar-->

<?=  ?>
<?=  ?>
<?=  ?>

<?php
NavBar::begin([
    'brandLabel' => '',
    'brandUrl' => '',
    'options' => ['class' => 'navbar navbar-expand navbar-dark bg-dark'],
]);

echo Html::beginTag('ul', ['class' => 'navbar-nav ms-auto ms-md-0 me-3 me-lg-4']);
echo Html::beginTag('li', ['class' => 'nav-item dropdown']);

echo Html::a(
    BI::i(BI::_PERSON),
    '#',
    [
        'class' => 'nav-link dropdown-toggle',
        'id' => 'navbarDropdown',
        'role' => 'button',
        'data-bs-toggle' => 'dropdown',
        'aria-expanded' => 'false',
    ]
);

echo Html::beginTag('ul', [
    'class' => 'dropdown-menu dropdown-menu-end',
    'aria-labelledby' => 'navbarDropdown',
]);

echo Html::tag('li', Html::a('Settings', '#!', ['class' => 'dropdown-item']));
echo Html::tag('li', Html::a('Activity Log', '#!', ['class' => 'dropdown-item']));
echo Html::tag('li', Html::tag('hr', '', ['class' => 'dropdown-divider']));
echo Html::tag('li', Html::a('Logout', '#!', ['class' => 'dropdown-item']));

echo Html::endTag('ul');
echo Html::endTag('li');
echo Html::endTag('ul');

NavBar::end();
?>

</nav>


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
