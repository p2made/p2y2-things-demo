<?php
/**
 * @p2m/demo/views/layouts/_nav_dropdown.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_nav_dropdown.php'); */

/** @var \yii\web\View $this */

use yii\bootstrap5\Html;
use yii\bootstrap5\Dropdown;
use p2m\helpers\BI;

/** @var string $name */

// Set $menu based on $name
$menu = Yii::$app->params['menus'][$name] ?? [];

// Set $icon based on $name
$iconMap = [
	'user' => BI::i(BI::_PERSON)->size(4),
	'work' => BI::i(BI::_PERSON_WORKSPACE)->size(4),
];
$icon = $iconMap[$name] ?? BI::i(BI::_QUESTION_CIRCLE)->size(4); // fallback icon

echo Html::tag('ul',
	Html::tag('li',
		Html::a(
			$icon,
			'#',
			[
				'class' => 'nav-link dropdown-toggle',
				'id' => $name . 'Dropdown',
				'role' => 'button',
				'data-bs-toggle' => 'dropdown',
				'aria-expanded' => 'false',
			]
		) .
		Dropdown::widget([
			'items' => $menu,
			'options' => [
				'class' => 'dropdown-menu dropdown-menu-end',
				'aria-labelledby' => $name . ' Dropdown',
			],
			'encodeLabels' => false, // in case titles include icons/HTML
		]),
		['class' => 'nav-item dropdown']
	),
	['class' => 'navbar-nav ms-auto ms-md-0 me-3 me-lg-4']
);
