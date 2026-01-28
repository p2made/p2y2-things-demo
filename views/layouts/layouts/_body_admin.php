<?php
/**
 * @p2m/demo/views/layouts/_body_admin.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_body_admin.php'); */

/** @var \yii\web\View $this */
/** @var string $this->title */
/** @var string $content */

?>
<body class="sb-nav-fixed">
<?php $this->beginBody() ?>
	<?= $this->render('@p2m/demo/views/layouts/_nav_top.php') ?>

	<div id="layoutSidenav">
		<?= $this->render('@p2m/demo/views/layouts/_nav_side.php') ?>
		<div id="layoutSidenav_content">
			<main>
				<?= $content ?>
			</main>
			<?= $this->render('@p2m/demo/views/layouts/_footer.php') ?>
		</div>
	</div>

<?php $this->endBody() ?>
</body>
