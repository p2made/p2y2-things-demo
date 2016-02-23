<?php
/**
 * navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use p2made\demo\Things\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php
	NavBar::begin([
		'brandLabel' => 'P2Y2Things',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	$menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'Demos', 'items' => [
			['label' => 'Animate.css', 'url' => ['/site/page', 'view' => 'animate']],
			['label' => 'is.gd', 'url' => ['/site/page', 'view' => 'is-gd']],
			['label' => 'UUID', 'url' => ['/site/page', 'view' => 'uuid']],
			'<li role="presentation" class="divider"></li>',
			['label' => 'Default Calendar', 'url' => ['/site/page', 'view' => 'calendar']],
			['label' => 'Basic Calendar Views', 'url' => ['/site/page', 'view' => 'calendarBasic']],
		]],
		['label' => 'Pages', 'items' => [
			['label' => 'About', 'url' => ['/site/about']],
			['label' => 'Contact', 'url' => ['/site/contact']],
			['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
		]],
		['label' => 'Charts and Tables', 'items' => [
			['label' => 'Flot Charts', 'url' => ['/site/page', 'view' => 'flot']],
			['label' => 'Morris.js Charts', 'url' => ['/site/page', 'view' => 'morris']],
			'<li role="presentation" class="divider"></li>',
			['label' => 'Tables', 'url' => ['/site/page', 'view' => 'tables']],
		]],
		['label' => 'UI Elements', 'items' => [
			['label' => 'Panels and Wells', 'url' => ['/site/page', 'view' => 'panels-wells']],
			['label' => 'Buttons', 'url' => ['/site/page', 'view' => 'buttons']],
			['label' => 'Forms', 'url' => ['/site/page', 'view' => 'forms']],
			['label' => 'Notifications', 'url' => ['/site/page', 'view' => 'notifications']],
			['label' => 'Typography', 'url' => ['/site/page', 'view' => 'typography']],
			['label' => 'Grid', 'url' => ['/site/page', 'view' => 'grid']],
			['label' => 'Shortcodes', 'url' => ['/site/page', 'view' => 'shortcodes']],
		]],
		['label' => 'Icons', 'items' => [
			['label' => 'Font Awesome', 'url' => ['/site/page', 'view' => 'font-awesome']],
			['label' => 'Glyphicons', 'url' => ['/site/page', 'view' => 'glyphicons']],
			['label' => 'Flag Icons', 'url' => ['/site/page', 'view' => 'flag-icons']],
		]],
		['label' => 'Developer', 'items' => [
			['label' => 'Gii', 'url' => ['/gii']],
			['label' => 'Debug', 'url' => ['/debug']],
		]],
	];
	$userMenuItems = [];
	if (Yii::$app->user->isGuest) {
		$userMenuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		$userMenuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	} else {
		$userMenuItems[] = [
			'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
			'url' => ['/site/logout'],
			'linkOptions' => ['data-method' => 'post']
		];
	}
	$menuItems[] = [
		'label' => 'User',
		'items' => $userMenuItems,
		'options' => ['class' => 'dropdown']
	];
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
	]);
	NavBar::end();
?>
