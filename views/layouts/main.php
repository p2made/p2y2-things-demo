<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use p2made\demo\Things\widgets\Alert;
use p2made\widgets\FA;

/* @var $this \yii\web\View */
/* @var $content string */

yii\web\YiiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?> | P2Y2Things</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">
<?= $this->render('navigation.php', []) ?>

		<div class="container">
<?= Alert::widget() ?>
<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>

			<p class="pull-left">
				Crafted with <?= FA::icon('heart') ?> by Pedro fp, on the
				<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
					Sunshine Coast <?= FA::icon('external-link') ?>
				</a> of
				<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
					Queensland <?= FA::icon('external-link') ?>
				</a>,
				<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
					Australia <?= FA::icon('external-link') ?>
				</a>
				<?= FA::icon('copyright') ?> <?= date('Y') ?>
			</p>

			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
