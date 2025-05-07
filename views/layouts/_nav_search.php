<?php
/**
 * @p2m/demo/views/layouts/_nav_search.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_nav_search.php'); */

/** @var \yii\web\View                  $this */
/** @var \p2m\demo\models\DemoSearch    $searchModel */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use p2m\helpers\BI;

$form = ActiveForm::begin([
	'action'  => ['site/search'],    // or wherever your search lives
	'method'  => 'get',
	'options' => ['class' => 'd-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0'],
]);

echo Html::beginTag('div', ['class' => 'input-group']);

echo $form->field($searchModel, 'q', [
	'template' => "{input}\n{error}",
	'options'  => ['class' => ''],  // remove wrapper div
])->textInput([
	'class'       => 'form-control',
	'placeholder' => 'Search for…',
	'aria-label'  => 'Search for…',
	'aria-describedby' => 'btnNavbarSearch',
])->label(false);

echo Html::button(
	BI::i(BI::_SEARCH),
	[
		'class' => 'btn btn-primary',
		'id' => 'btnNavbarSearch',
		'type' => 'submit',
	]
);

echo Html::endTag('div');
ActiveForm::end();

