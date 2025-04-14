<?php
/**
 * @frontend/modules/letter/layouts/head.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

use yii\bootstrap5\Html;
?>
<meta charset="<?= Yii::$app->charset ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<?php $this->registerCsrfMetaTags() ?>
<title>p2y2-things-demo</title>
<?php $this->registerLinkTag(['rel' => 'shortcut icon', 'href' => $metaAssetUrl . '/ico/favicon.ico']) ?>
<?php $this->head() ?>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard - SB Admin</title>

	<!-- Favicon-->
	<link href="assets/ico/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet">
	<!-- Bootstrap Icons CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous" rel="stylesheet">
	<!-- Core theme CSS -->
	<link href="assets/css/sb-admin.css" rel="stylesheet">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" integrity="sha384-QM3vQ1ro1SUguF26PKxC17ZxibTi/ixpgL9NRL5/RHw1AmA0pfSeGCh6k+uqbyzJ" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet">
