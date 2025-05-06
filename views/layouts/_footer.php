<?php
/**
 * @p2m/demo/views/layouts/_footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_footer.php'); */

/** @var \yii\web\View $this */

$copyright = $this->params['copyright'];

use yii\bootstrap5\Html;
?>
<footer class="py-4 bg-light mt-auto">
	<div class="container-fluid px-4">
		<div class="d-flex align-items-center justify-content-between small">
			<div class="text-muted">Copyright &copy; <?= $copyright ?> <?= date('Y') ?></div>
			<div><?= Yii::powered() ?></div>
		</div>
	</div>
</footer>
