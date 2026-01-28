<?php
/**
 * @p2m/demo/views/layouts/_body_simple.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_body_simple.php'); */

/** @var \yii\web\View $this */
/** @var string $this->title */
/** @var string $content */
?>
<body class="bg-primary">
<?php $this->beginBody() ?>

	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<?= $content ?>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<?= $this->render('@p2m/demo/views/layouts/_footer.php') ?>
		</div>
	</div>

<?php $this->endBody() ?>
</body>
