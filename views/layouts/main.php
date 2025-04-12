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
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

/** @var \yii\web\View $this */
/** @var string $content */

p2m\demo\assets\ThingsDemoAsset::register($this);

$this->title = 'p2y2-things demos';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/head.php') ?>
</head>
<body id="page-top">
	<?= $this->beginBody() ?>
	<div id="wrapper">
		<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/side-navigation.php') ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/top-navigation.php') ?>

				<?= $content ?>

			</div>
			<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/sticky-footer.php') ?>
		</div>
	</div>
	<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/scroll-to-top.php') ?>
	<?= $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
