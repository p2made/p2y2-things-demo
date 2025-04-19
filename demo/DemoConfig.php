<?php
/**
 * @p2m/demo/demo/DemoConfig.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

$user = [
	'icon' => BI::i(BI::_PERSON)->size(5),
	'menu' => [
		['title' => 'Settings', 'link' => '#!'],
		['title' => 'Activity Log', 'link' => '#!'],
		['title' => 'divider'],
		['title' => 'Logout', 'link' => '#!'],
	],

];

$work = [
	'icon' => BI::i(BI::_PERSON_WORKSPACE)->size(5),
	'menu' => [
		['title' => 'Contacts', 'link' => '#!'],
		['title' => 'Messages', 'link' => '#!'],
		['title' => 'Tasks', 'link' => '#!'],
		['title' => 'divider'],
		['title' => 'Documents', 'link' => '#!'],
		['title' => 'Media', 'link' => '#!'],
	],
];



$congig = [
	'user' = $user;
	'work' = $work;
];
