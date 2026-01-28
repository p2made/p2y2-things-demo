<?php
/**
 * @p2m/demo/views/layouts/_head.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_head.php'); */

/** @var \yii\web\View $this */
/** @var string $this->title */

use yii\bootstrap5\Html;

$demoAssetUrl = $this->params['demoAssetUrl'];

echo Html::tag('meta', '', ['charset' => Yii::$app->charset]);
echo Html::tag('title', Html::encode($this->title));

$this->registerLinkTag(['rel' => 'shortcut icon', 'href' => $demoAssetUrl . '/ico/favicon.ico']);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
$this->registerMetaTag(['name' => 'author', 'content' => '']);

$this->registerCsrfMetaTags();
$this->head();
