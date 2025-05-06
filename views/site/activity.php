<?php
use yii\bootstrap5\Html;
use p2m\helpers\BI;

/* @var $this yii\web\View */
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="text-center mt-4">
				<h1 class="display-1"><?= BI::i(BI::_SEARCH) ?></h1>
				<p class="lead">Search</p>
				<p>Search results for 'query input' appear here.</p>

				<?= Html::a(
					BI::i(BI::_ARROW_LEFT_CIRCLE_FILL) . '  Return to Dashboard',
					['/']
				) ?>
			</div>
		</div>
	</div>
</div>
<!--
	_ARROW_LEFT
	_ARROW_LEFT_CIRCLE
	_ARROW_LEFT_CIRCLE_FILL
-->
