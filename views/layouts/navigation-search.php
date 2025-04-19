<?php
/**
 * @p2m/demo/views/layouts/navigation-search.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** @var \yii\web\View $this */

use yii\bootstrap5\Html;
use p2m\helpers\BI;

$showSearch = $this->params['showSearch'] ?? true;
$searchModel = $this->params['searchModel'] ?? null;

if (!$showSearch || $searchModel === null) {
	return;
}

echo Html::beginForm('', 'get', [
	'class' => 'd-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0',
]);

echo Html::beginTag('div', ['class' => 'input-group']);

echo Html::activeInput('text', $searchModel, 'q', [
	'class' => 'form-control',
	'placeholder' => 'Search for...',
	'aria-label' => 'Search for...',
	'aria-describedby' => 'btnNavbarSearch',
]);

echo Html::button(
	BI::i(BI::_SEARCH)->size(5),
	[
		'class' => 'btn btn-primary',
		'id' => 'btnNavbarSearch',
		'type' => 'submit',
	]
);

echo Html::endTag('div');
echo Html::endForm();
