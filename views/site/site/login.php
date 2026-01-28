<?php
/** @var yii\web\View $this */
/** @var yii\web\View $this->title */
/** @var \yii\base\DynamicModel $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-4">Login</h3>
				</div>
				<div class="card-body">
					<?php $form = ActiveForm::begin([
						'id'      => 'login-form',
						'options' => ['class' => ''],
					]); ?>
						<div class="form-floating mb-3">
							<?= $form->field($model, 'email', [
								'template' => "{input}\n{label}\n{error}",
								'options'  => ['tag' => false],
							])->textInput([
								'class'       => 'form-control',
								'id'          => 'inputEmail',
								'type'        => 'email',
								'placeholder' => 'name@example.com',
								'autofocus'   => true,
							])->label('Email address', ['for' => 'inputEmail']) ?>
						</div>
						<div class="form-floating mb-3">
							<?= $form->field($model, 'password', [
								'template' => "{input}\n{label}\n{error}",
								'options'  => ['tag' => false],
							])->passwordInput([
								'class'       => 'form-control',
								'id'          => 'inputPassword',
								'placeholder' => 'Password',
							])->label('Password', ['for' => 'inputPassword']) ?>
						</div>
						<div class="form-check mb-3">
							<?= Html::checkbox('remember', false, [
								'class' => 'form-check-input',
								'id'    => 'inputRememberPassword',
							]) ?>
							<?= Html::label('Remember Password', 'inputRememberPassword', ['class' => 'form-check-label']) ?>
						</div>
						<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
							<?= Html::a('Forgot Password?', ['site/password'], ['class' => 'small']) ?>
							<?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
						</div>
					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
