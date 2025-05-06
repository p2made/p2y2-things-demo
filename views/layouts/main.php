<?php
/**
 * @p2m/demo/views/layouts/main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/main.php'); */

/** @var \yii\web\View $this */
/** @var string $this->title */
/** @var string $content */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@p2m/demo/views/layouts/_head.php') ?>
</head>
	<?php
		// pick the mode, default to 'admin'
		$mode = $bodyMode ?? 'admin';

		// render the matching partial
		echo $this->render("@p2m/demo/views/layouts/_body_{$mode}.php", ['content' => $content]);
	?>
</html>
<?php $this->endPage(); ?>
