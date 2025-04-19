<?php
/**
	<?= $this->render('@p2m/demo/views/layouts/ * @p2m/demo/views/layouts/head.php') ?>
echo $this->render('@p2m/demo/views/layouts/ * @p2m/demo/views/layouts/head.php');
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** @var \yii\web\View $this */
/** @var string $this->title */
/** @var string $content */

use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use p2m\helpers\BI;

yii\bootstrap5\BootstrapAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@p2m/demo/views/layouts/head.php') ?>
</head>
<body class="sb-nav-fixed">
<?php $this->beginBody() ?>
	<?= $this->render('@p2m/demo/views/layouts/navigation-top.php') ?>

	<div id="layoutSidenav">
		<?= $this->render('@p2m/demo/views/layouts/navigation-side.php') ?>
		<div id="layoutSidenav_content">
			<main>
				<?= $content ?>
			</main>
			<?= $this->render('@p2m/demo/views/layouts/footer.php') ?>
		</div>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
