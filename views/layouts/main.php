<?php
/**
 * @vendor/p2made/p2y2-things-demo/views/layouts/main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

use common\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

/** @var \yii\web\View $this */
/** @var string $content */

?>
<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
p2m\assets\P2CoreAsset::register($this);
$this->title = 'p2y2-things demos';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/head.php') ?>
</head>
<body>
	<?= $this->beginBody() ?>
	<?= $this->render('@app/modules/letter/layouts/header.php') ?>
	<?= $content ?>
	<?= $this->render('@app/modules/letter/layouts/footer.php') ?>
	<?= $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>





<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
	<?php
	NavBar::begin([
		'brandLabel' => $this->title,
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
		],
	]);
	$menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'About', 'url' => ['/site/about']],
		['label' => 'Contact', 'url' => ['/site/contact']],
	];

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
	NavBar::end();
	?>
</header>

<main role="main" class="flex-shrink-0">
	<div class="container">
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= Alert::widget() ?>
		<?= $content ?>
	</div>
</main>

<footer class="footer mt-auto py-3 text-muted">
	<div class="container">
		<p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
		<p class="float-end"><?= Yii::powered() ?></p>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
