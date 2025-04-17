<?php
/**
 * @p2m/demo/views/layouts/head.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use p2m\helpers\BI;

yii\bootstrap5\BootstrapAsset::register($this);
//p2m\assets\P2ChartJsAsset::register($this);
p2m\demo\demo\ChartDemo::register($this);

$demoTitle = $this->params['demoTitle'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/head.php') ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
	<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/top-navigation.php') ?>

	<div id="layoutSidenav">
		<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/side-navigation.php') ?>
		<div id="layoutSidenav_content">
			<main>
				<?= $content ?>
			</main>
			<?= $this->render('@vendor/p2made/p2y2-things-demo/views/layouts/footer.php') ?>
		</div>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
