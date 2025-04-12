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
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

/** @var \yii\web\View $this */
/** @var string $content */

AppAsset::register($this);
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
	<?= $this->render('@app/modules/letter/layouts/header.php') ?>
	<?= $content ?>
	<?= $this->render('@app/modules/letter/layouts/footer.php') ?>
	<?= $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
