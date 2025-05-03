<?php
use yii\bootstrap5\Html;
use p2m\helpers\BI;

/* @var $this yii\web\View */
/* @var $exception \Throwable */
/* @var $name string */
/* @var $message string */

$this->title = $name;
$statusCode = $exception instanceof \yii\web\HttpException
	? $exception->statusCode
	: $exception->getCode();
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="text-center mt-4">
				<h1 class="display-1"><?= Html::encode($statusCode) ?></h1>
				<p class="lead"><?= Html::encode($name) ?></p>
				<p><?= nl2br(Html::encode($message)) ?></p>

				<?= Html::a(
					BI::i(BI::_ARROW_LEFT_CIRCLE_FILL)->size(2) . 'Return to Dashboard',
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
