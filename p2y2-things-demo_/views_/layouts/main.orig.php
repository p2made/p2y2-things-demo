<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

p2m\assets\P2CoreAsset::register($this);
//AppAsset::register($this);
?>
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
		'brandLabel' => Yii::$app->name,
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
	if (Yii::$app->user->isGuest) {
		$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	} else {
		$menuItems[] = '<li>'
			. Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
			. Html::submitButton(
				'Logout (' . Yii::$app->user->identity->username . ')',
				['class' => 'btn btn-link logout']
			)
			. Html::endForm()
			. '</li>';
	}
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav'],
		'items' => $menuItems,
	]);
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
		<p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
		<p class="float-right"><?= Yii::powered() ?></p>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
