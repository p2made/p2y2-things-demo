<?php
/**
 * font-awesome.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\demo\Things\assets\ThingsDemoAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Font Awesome';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					Font Awesome
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="fa col-lg-3">
							<p><i class="fa fa-glass fa-fw"></i> fa-glass </p><br>
							<p><i class="fa fa-music fa-fw"></i> fa-music </p><br>
							<p><i class="fa fa-search fa-fw"></i> fa-search </p><br>
							<p><i class="fa fa-envelope-o fa-fw"></i> fa-envelope-o </p><br>
							<p><i class="fa fa-heart fa-fw"></i> fa-heart </p><br>
							<p><i class="fa fa-star fa-fw"></i> fa-star </p><br>
							<p><i class="fa fa-star-o fa-fw"></i> fa-star-o </p><br>
							<p><i class="fa fa-user fa-fw"></i> fa-user </p><br>
							<p><i class="fa fa-film fa-fw"></i> fa-film </p><br>
							<p><i class="fa fa-th-large fa-fw"></i> fa-th-large </p><br>
							<p><i class="fa fa-th fa-fw"></i> fa-th </p><br>
							<p><i class="fa fa-th-list fa-fw"></i> fa-th-list </p><br>
							<p><i class="fa fa-check fa-fw"></i> fa-check </p><br>
							<p><i class="fa fa-times fa-fw"></i> fa-times </p><br>
							<p><i class="fa fa-search-plus fa-fw"></i> fa-search-plus </p><br>
							<p><i class="fa fa-search-minus fa-fw"></i> fa-search-minus </p><br>
							<p><i class="fa fa-power-off fa-fw"></i> fa-power-off </p><br>
							<p><i class="fa fa-signal fa-fw"></i> fa-signal </p><br>
							<p><i class="fa fa-gear fa-fw"></i> fa-gear </p><br>
							<p><i class="fa fa-cog fa-fw"></i> fa-cog </p><br>
							<p><i class="fa fa-trash-o fa-fw"></i> fa-trash-o </p><br>
							<p><i class="fa fa-home fa-fw"></i> fa-home </p><br>
							<p><i class="fa fa-file-o fa-fw"></i> fa-file-o </p><br>
							<p><i class="fa fa-clock-o fa-fw"></i> fa-clock-o </p><br>
							<p><i class="fa fa-road fa-fw"></i> fa-road </p><br>
							<p><i class="fa fa-download fa-fw"></i> fa-download </p><br>
							<p><i class="fa fa-arrow-circle-o-down fa-fw"></i> fa-arrow-circle-o-down </p><br>
							<p><i class="fa fa-arrow-circle-o-up fa-fw"></i> fa-arrow-circle-o-up </p><br>
							<p><i class="fa fa-inbox fa-fw"></i> fa-inbox </p><br>
							<p><i class="fa fa-play-circle-o fa-fw"></i> fa-play-circle-o </p><br>
							<p><i class="fa fa-rotate-right fa-fw"></i> fa-rotate-right </p><br>
							<p><i class="fa fa-repeat fa-fw"></i> fa-repeat </p><br>
							<p><i class="fa fa-refresh fa-fw"></i> fa-refresh </p><br>
							<p><i class="fa fa-list-alt fa-fw"></i> fa-list-alt </p><br>
							<p><i class="fa fa-lock fa-fw"></i> fa-lock </p><br>
							<p><i class="fa fa-flag fa-fw"></i> fa-flag </p><br>
							<p><i class="fa fa-headphones fa-fw"></i> fa-headphones </p><br>
							<p><i class="fa fa-volume-off fa-fw"></i> fa-volume-off </p><br>
							<p><i class="fa fa-volume-down fa-fw"></i> fa-volume-down </p><br>
							<p><i class="fa fa-volume-up fa-fw"></i> fa-volume-up </p><br>
							<p><i class="fa fa-qrcode fa-fw"></i> fa-qrcode </p><br>
							<p><i class="fa fa-barcode fa-fw"></i> fa-barcode </p><br>
							<p><i class="fa fa-tag fa-fw"></i> fa-tag </p><br>
							<p><i class="fa fa-tags fa-fw"></i> fa-tags </p><br>
							<p><i class="fa fa-book fa-fw"></i> fa-book </p><br>
							<p><i class="fa fa-bookmark fa-fw"></i> fa-bookmark </p><br>
							<p><i class="fa fa-print fa-fw"></i> fa-print </p><br>
							<p><i class="fa fa-camera fa-fw"></i> fa-camera </p><br>
							<p><i class="fa fa-font fa-fw"></i> fa-font </p><br>
							<p><i class="fa fa-bold fa-fw"></i> fa-bold </p><br>
							<p><i class="fa fa-italic fa-fw"></i> fa-italic </p><br>
							<p><i class="fa fa-text-height fa-fw"></i> fa-text-height </p><br>
							<p><i class="fa fa-text-width fa-fw"></i> fa-text-width </p><br>
							<p><i class="fa fa-align-left fa-fw"></i> fa-align-left </p><br>
							<p><i class="fa fa-align-center fa-fw"></i> fa-align-center </p><br>
							<p><i class="fa fa-align-right fa-fw"></i> fa-align-right </p><br>
							<p><i class="fa fa-align-justify fa-fw"></i> fa-align-justify </p><br>
							<p><i class="fa fa-list fa-fw"></i> fa-list </p><br>
							<p><i class="fa fa-dedent fa-fw"></i> fa-dedent </p><br>
							<p><i class="fa fa-outdent fa-fw"></i> fa-outdent </p><br>
							<p><i class="fa fa-indent fa-fw"></i> fa-indent </p><br>
							<p><i class="fa fa-video-camera fa-fw"></i> fa-video-camera </p><br>
							<p><i class="fa fa-photo fa-fw"></i> fa-photo </p><br>
							<p><i class="fa fa-image fa-fw"></i> fa-image </p><br>
							<p><i class="fa fa-picture-o fa-fw"></i> fa-picture-o </p><br>
							<p><i class="fa fa-pencil fa-fw"></i> fa-pencil </p><br>
							<p><i class="fa fa-map-marker fa-fw"></i> fa-map-marker </p><br>
							<p><i class="fa fa-adjust fa-fw"></i> fa-adjust </p><br>
							<p><i class="fa fa-tint fa-fw"></i> fa-tint </p><br>
							<p><i class="fa fa-edit fa-fw"></i> fa-edit </p><br>
							<p><i class="fa fa-pencil-square-o fa-fw"></i> fa-pencil-square-o </p><br>
							<p><i class="fa fa-share-square-o fa-fw"></i> fa-share-square-o </p><br>
							<p><i class="fa fa-check-square-o fa-fw"></i> fa-check-square-o </p><br>
							<p><i class="fa fa-arrows fa-fw"></i> fa-arrows </p><br>
							<p><i class="fa fa-step-backward fa-fw"></i> fa-step-backward </p><br>
							<p><i class="fa fa-fast-backward fa-fw"></i> fa-fast-backward </p><br>
							<p><i class="fa fa-backward fa-fw"></i> fa-backward </p><br>
							<p><i class="fa fa-play fa-fw"></i> fa-play </p><br>
							<p><i class="fa fa-pause fa-fw"></i> fa-pause </p><br>
							<p><i class="fa fa-stop fa-fw"></i> fa-stop </p><br>
							<p><i class="fa fa-forward fa-fw"></i> fa-forward </p><br>
							<p><i class="fa fa-fast-forward fa-fw"></i> fa-fast-forward </p><br>
							<p><i class="fa fa-step-forward fa-fw"></i> fa-step-forward </p><br>
							<p><i class="fa fa-eject fa-fw"></i> fa-eject </p><br>
							<p><i class="fa fa-chevron-left fa-fw"></i> fa-chevron-left </p><br>
							<p><i class="fa fa-chevron-right fa-fw"></i> fa-chevron-right </p><br>
							<p><i class="fa fa-plus-circle fa-fw"></i> fa-plus-circle </p><br>
							<p><i class="fa fa-minus-circle fa-fw"></i> fa-minus-circle </p><br>
							<p><i class="fa fa-times-circle fa-fw"></i> fa-times-circle </p><br>
							<p><i class="fa fa-check-circle fa-fw"></i> fa-check-circle </p><br>
							<p><i class="fa fa-question-circle fa-fw"></i> fa-question-circle </p><br>
							<p><i class="fa fa-info-circle fa-fw"></i> fa-info-circle </p><br>
							<p><i class="fa fa-crosshairs fa-fw"></i> fa-crosshairs </p><br>
							<p><i class="fa fa-times-circle-o fa-fw"></i> fa-times-circle-o </p><br>
							<p><i class="fa fa-check-circle-o fa-fw"></i> fa-check-circle-o </p><br>
							<p><i class="fa fa-ban fa-fw"></i> fa-ban </p><br>
							<p><i class="fa fa-arrow-left fa-fw"></i> fa-arrow-left </p><br>
							<p><i class="fa fa-arrow-right fa-fw"></i> fa-arrow-right </p><br>
							<p><i class="fa fa-arrow-up fa-fw"></i> fa-arrow-up </p><br>
							<p><i class="fa fa-arrow-down fa-fw"></i> fa-arrow-down </p><br>
							<p><i class="fa fa-mail-forward fa-fw"></i> fa-mail-forward </p><br>
							<p><i class="fa fa-share fa-fw"></i> fa-share </p><br>
							<p><i class="fa fa-expand fa-fw"></i> fa-expand </p><br>
							<p><i class="fa fa-compress fa-fw"></i> fa-compress </p><br>
							<p><i class="fa fa-plus fa-fw"></i> fa-plus </p><br>
							<p><i class="fa fa-minus fa-fw"></i> fa-minus </p><br>
							<p><i class="fa fa-asterisk fa-fw"></i> fa-asterisk </p><br>
							<p><i class="fa fa-exclamation-circle fa-fw"></i> fa-exclamation-circle </p><br>
							<p><i class="fa fa-gift fa-fw"></i> fa-gift </p><br>
							<p><i class="fa fa-leaf fa-fw"></i> fa-leaf </p><br>
							<p><i class="fa fa-fire fa-fw"></i> fa-fire </p><br>
							<p><i class="fa fa-eye fa-fw"></i> fa-eye </p><br>
							<p><i class="fa fa-eye-slash fa-fw"></i> fa-eye-slash </p><br>
							<p><i class="fa fa-warning fa-fw"></i> fa-warning </p><br>
							<p><i class="fa fa-exclamation-triangle fa-fw"></i> fa-exclamation-triangle </p><br>
							<p><i class="fa fa-plane fa-fw"></i> fa-plane </p><br>
							<p><i class="fa fa-calendar fa-fw"></i> fa-calendar </p><br>
							<p><i class="fa fa-random fa-fw"></i> fa-random </p><br>
							<p><i class="fa fa-comment fa-fw"></i> fa-comment </p><br>
							<p><i class="fa fa-magnet fa-fw"></i> fa-magnet </p><br>
							<p><i class="fa fa-chevron-up fa-fw"></i> fa-chevron-up </p><br>
							<p><i class="fa fa-chevron-down fa-fw"></i> fa-chevron-down </p><br>
							<p><i class="fa fa-retweet fa-fw"></i> fa-retweet </p><br>
							<p><i class="fa fa-shopping-cart fa-fw"></i> fa-shopping-cart </p><br>
							<p><i class="fa fa-folder fa-fw"></i> fa-folder </p><br>
							<p><i class="fa fa-folder-open fa-fw"></i> fa-folder-open </p><br>
						</div>
						<div class="fa col-lg-3">
							<p><i class="fa fa-arrows-v fa-fw"></i> fa-arrows-v </p><br>
							<p><i class="fa fa-arrows-h fa-fw"></i> fa-arrows-h </p><br>
							<p><i class="fa fa-bar-chart-o fa-fw"></i> fa-bar-chart-o </p><br>
							<p><i class="fa fa-twitter-square fa-fw"></i> fa-twitter-square </p><br>
							<p><i class="fa fa-facebook-square fa-fw"></i> fa-facebook-square </p><br>
							<p><i class="fa fa-camera-retro fa-fw"></i> fa-camera-retro </p><br>
							<p><i class="fa fa-key fa-fw"></i> fa-key </p><br>
							<p><i class="fa fa-gears fa-fw"></i> fa-gears </p><br>
							<p><i class="fa fa-cogs fa-fw"></i> fa-cogs </p><br>
							<p><i class="fa fa-comments fa-fw"></i> fa-comments </p><br>
							<p><i class="fa fa-thumbs-o-up fa-fw"></i> fa-thumbs-o-up </p><br>
							<p><i class="fa fa-thumbs-o-down fa-fw"></i> fa-thumbs-o-down </p><br>
							<p><i class="fa fa-star-half fa-fw"></i> fa-star-half </p><br>
							<p><i class="fa fa-heart-o fa-fw"></i> fa-heart-o </p><br>
							<p><i class="fa fa-sign-out fa-fw"></i> fa-sign-out </p><br>
							<p><i class="fa fa-linkedin-square fa-fw"></i> fa-linkedin-square </p><br>
							<p><i class="fa fa-thumb-tack fa-fw"></i> fa-thumb-tack </p><br>
							<p><i class="fa fa-external-link fa-fw"></i> fa-external-link </p><br>
							<p><i class="fa fa-sign-in fa-fw"></i> fa-sign-in </p><br>
							<p><i class="fa fa-trophy fa-fw"></i> fa-trophy </p><br>
							<p><i class="fa fa-github-square fa-fw"></i> fa-github-square </p><br>
							<p><i class="fa fa-upload fa-fw"></i> fa-upload </p><br>
							<p><i class="fa fa-lemon-o fa-fw"></i> fa-lemon-o </p><br>
							<p><i class="fa fa-phone fa-fw"></i> fa-phone </p><br>
							<p><i class="fa fa-square-o fa-fw"></i> fa-square-o </p><br>
							<p><i class="fa fa-bookmark-o fa-fw"></i> fa-bookmark-o </p><br>
							<p><i class="fa fa-phone-square fa-fw"></i> fa-phone-square </p><br>
							<p><i class="fa fa-twitter fa-fw"></i> fa-twitter </p><br>
							<p><i class="fa fa-facebook fa-fw"></i> fa-facebook </p><br>
							<p><i class="fa fa-github fa-fw"></i> fa-github </p><br>
							<p><i class="fa fa-unlock fa-fw"></i> fa-unlock </p><br>
							<p><i class="fa fa-credit-card fa-fw"></i> fa-credit-card </p><br>
							<p><i class="fa fa-rss fa-fw"></i> fa-rss </p><br>
							<p><i class="fa fa-hdd-o fa-fw"></i> fa-hdd-o </p><br>
							<p><i class="fa fa-bullhorn fa-fw"></i> fa-bullhorn </p><br>
							<p><i class="fa fa-bell fa-fw"></i> fa-bell </p><br>
							<p><i class="fa fa-certificate fa-fw"></i> fa-certificate </p><br>
							<p><i class="fa fa-hand-o-right fa-fw"></i> fa-hand-o-right </p><br>
							<p><i class="fa fa-hand-o-left fa-fw"></i> fa-hand-o-left </p><br>
							<p><i class="fa fa-hand-o-up fa-fw"></i> fa-hand-o-up </p><br>
							<p><i class="fa fa-hand-o-down fa-fw"></i> fa-hand-o-down </p><br>
							<p><i class="fa fa-arrow-circle-left fa-fw"></i> fa-arrow-circle-left </p><br>
							<p><i class="fa fa-arrow-circle-right fa-fw"></i> fa-arrow-circle-right </p><br>
							<p><i class="fa fa-arrow-circle-up fa-fw"></i> fa-arrow-circle-up </p><br>
							<p><i class="fa fa-arrow-circle-down fa-fw"></i> fa-arrow-circle-down </p><br>
							<p><i class="fa fa-globe fa-fw"></i> fa-globe </p><br>
							<p><i class="fa fa-wrench fa-fw"></i> fa-wrench </p><br>
							<p><i class="fa fa-tasks fa-fw"></i> fa-tasks </p><br>
							<p><i class="fa fa-filter fa-fw"></i> fa-filter </p><br>
							<p><i class="fa fa-briefcase fa-fw"></i> fa-briefcase </p><br>
							<p><i class="fa fa-arrows-alt fa-fw"></i> fa-arrows-alt </p><br>
							<p><i class="fa fa-group fa-fw"></i> fa-group </p><br>
							<p><i class="fa fa-users fa-fw"></i> fa-users </p><br>
							<p><i class="fa fa-chain fa-fw"></i> fa-chain </p><br>
							<p><i class="fa fa-link fa-fw"></i> fa-link </p><br>
							<p><i class="fa fa-cloud fa-fw"></i> fa-cloud </p><br>
							<p><i class="fa fa-flask fa-fw"></i> fa-flask </p><br>
							<p><i class="fa fa-cut fa-fw"></i> fa-cut </p><br>
							<p><i class="fa fa-scissors fa-fw"></i> fa-scissors </p><br>
							<p><i class="fa fa-copy fa-fw"></i> fa-copy </p><br>
							<p><i class="fa fa-files-o fa-fw"></i> fa-files-o </p><br>
							<p><i class="fa fa-paperclip fa-fw"></i> fa-paperclip </p><br>
							<p><i class="fa fa-save fa-fw"></i> fa-save </p><br>
							<p><i class="fa fa-floppy-o fa-fw"></i> fa-floppy-o </p><br>
							<p><i class="fa fa-square fa-fw"></i> fa-square </p><br>
							<p><i class="fa fa-navicon fa-fw"></i> fa-navicon </p><br>
							<p><i class="fa fa-reorder fa-fw"></i> fa-reorder </p><br>
							<p><i class="fa fa-bars fa-fw"></i> fa-bars </p><br>
							<p><i class="fa fa-list-ul fa-fw"></i> fa-list-ul </p><br>
							<p><i class="fa fa-list-ol fa-fw"></i> fa-list-ol </p><br>
							<p><i class="fa fa-strikethrough fa-fw"></i> fa-strikethrough </p><br>
							<p><i class="fa fa-underline fa-fw"></i> fa-underline </p><br>
							<p><i class="fa fa-table fa-fw"></i> fa-table </p><br>
							<p><i class="fa fa-magic fa-fw"></i> fa-magic </p><br>
							<p><i class="fa fa-truck fa-fw"></i> fa-truck </p><br>
							<p><i class="fa fa-pinterest fa-fw"></i> fa-pinterest </p><br>
							<p><i class="fa fa-pinterest-square fa-fw"></i> fa-pinterest-square </p><br>
							<p><i class="fa fa-google-plus-square fa-fw"></i> fa-google-plus-square </p><br>
							<p><i class="fa fa-google-plus fa-fw"></i> fa-google-plus </p><br>
							<p><i class="fa fa-money fa-fw"></i> fa-money </p><br>
							<p><i class="fa fa-caret-down fa-fw"></i> fa-caret-down </p><br>
							<p><i class="fa fa-caret-up fa-fw"></i> fa-caret-up </p><br>
							<p><i class="fa fa-caret-left fa-fw"></i> fa-caret-left </p><br>
							<p><i class="fa fa-caret-right fa-fw"></i> fa-caret-right </p><br>
							<p><i class="fa fa-columns fa-fw"></i> fa-columns </p><br>
							<p><i class="fa fa-unsorted fa-fw"></i> fa-unsorted </p><br>
							<p><i class="fa fa-sort fa-fw"></i> fa-sort </p><br>
							<p><i class="fa fa-sort-down fa-fw"></i> fa-sort-down </p><br>
							<p><i class="fa fa-sort-desc fa-fw"></i> fa-sort-desc </p><br>
							<p><i class="fa fa-sort-up fa-fw"></i> fa-sort-up </p><br>
							<p><i class="fa fa-sort-asc fa-fw"></i> fa-sort-asc </p><br>
							<p><i class="fa fa-envelope fa-fw"></i> fa-envelope </p><br>
							<p><i class="fa fa-linkedin fa-fw"></i> fa-linkedin </p><br>
							<p><i class="fa fa-rotate-left fa-fw"></i> fa-rotate-left </p><br>
							<p><i class="fa fa-undo fa-fw"></i> fa-undo </p><br>
							<p><i class="fa fa-legal fa-fw"></i> fa-legal </p><br>
							<p><i class="fa fa-gavel fa-fw"></i> fa-gavel </p><br>
							<p><i class="fa fa-dashboard fa-fw"></i> fa-dashboard </p><br>
							<p><i class="fa fa-tachometer fa-fw"></i> fa-tachometer </p><br>
							<p><i class="fa fa-comment-o fa-fw"></i> fa-comment-o </p><br>
							<p><i class="fa fa-comments-o fa-fw"></i> fa-comments-o </p><br>
							<p><i class="fa fa-flash fa-fw"></i> fa-flash </p><br>
							<p><i class="fa fa-bolt fa-fw"></i> fa-bolt </p><br>
							<p><i class="fa fa-sitemap fa-fw"></i> fa-sitemap </p><br>
							<p><i class="fa fa-umbrella fa-fw"></i> fa-umbrella </p><br>
							<p><i class="fa fa-paste fa-fw"></i> fa-paste </p><br>
							<p><i class="fa fa-clipboard fa-fw"></i> fa-clipboard </p><br>
							<p><i class="fa fa-lightbulb-o fa-fw"></i> fa-lightbulb-o </p><br>
							<p><i class="fa fa-exchange fa-fw"></i> fa-exchange </p><br>
							<p><i class="fa fa-cloud-download fa-fw"></i> fa-cloud-download </p><br>
							<p><i class="fa fa-cloud-upload fa-fw"></i> fa-cloud-upload </p><br>
							<p><i class="fa fa-user-md fa-fw"></i> fa-user-md </p><br>
							<p><i class="fa fa-stethoscope fa-fw"></i> fa-stethoscope </p><br>
							<p><i class="fa fa-suitcase fa-fw"></i> fa-suitcase </p><br>
							<p><i class="fa fa-bell-o fa-fw"></i> fa-bell-o </p><br>
							<p><i class="fa fa-coffee fa-fw"></i> fa-coffee </p><br>
							<p><i class="fa fa-cutlery fa-fw"></i> fa-cutlery </p><br>
							<p><i class="fa fa-file-text-o fa-fw"></i> fa-file-text-o </p><br>
							<p><i class="fa fa-building-o fa-fw"></i> fa-building-o </p><br>
							<p><i class="fa fa-hospital-o fa-fw"></i> fa-hospital-o </p><br>
							<p><i class="fa fa-ambulance fa-fw"></i> fa-ambulance </p><br>
							<p><i class="fa fa-medkit fa-fw"></i> fa-medkit </p><br>
							<p><i class="fa fa-fighter-jet fa-fw"></i> fa-fighter-jet </p><br>
							<p><i class="fa fa-beer fa-fw"></i> fa-beer </p><br>
							<p><i class="fa fa-h-square fa-fw"></i> fa-h-square </p><br>
							<p><i class="fa fa-plus-square fa-fw"></i> fa-plus-square </p><br>
						</div>
						<div class="fa col-lg-3">
							<p><i class="fa fa-angle-double-left fa-fw"></i> fa-angle-double-left </p><br>
							<p><i class="fa fa-angle-double-right fa-fw"></i> fa-angle-double-right </p><br>
							<p><i class="fa fa-angle-double-up fa-fw"></i> fa-angle-double-up </p><br>
							<p><i class="fa fa-angle-double-down fa-fw"></i> fa-angle-double-down </p><br>
							<p><i class="fa fa-angle-left fa-fw"></i> fa-angle-left </p><br>
							<p><i class="fa fa-angle-right fa-fw"></i> fa-angle-right </p><br>
							<p><i class="fa fa-angle-up fa-fw"></i> fa-angle-up </p><br>
							<p><i class="fa fa-angle-down fa-fw"></i> fa-angle-down </p><br>
							<p><i class="fa fa-desktop fa-fw"></i> fa-desktop </p><br>
							<p><i class="fa fa-laptop fa-fw"></i> fa-laptop </p><br>
							<p><i class="fa fa-tablet fa-fw"></i> fa-tablet </p><br>
							<p><i class="fa fa-mobile-phone fa-fw"></i> fa-mobile-phone </p><br>
							<p><i class="fa fa-mobile fa-fw"></i> fa-mobile </p><br>
							<p><i class="fa fa-circle-o fa-fw"></i> fa-circle-o </p><br>
							<p><i class="fa fa-quote-left fa-fw"></i> fa-quote-left </p><br>
							<p><i class="fa fa-quote-right fa-fw"></i> fa-quote-right </p><br>
							<p><i class="fa fa-spinner fa-fw"></i> fa-spinner </p><br>
							<p><i class="fa fa-circle fa-fw"></i> fa-circle </p><br>
							<p><i class="fa fa-mail-reply fa-fw"></i> fa-mail-reply </p><br>
							<p><i class="fa fa-reply fa-fw"></i> fa-reply </p><br>
							<p><i class="fa fa-github-alt fa-fw"></i> fa-github-alt </p><br>
							<p><i class="fa fa-folder-o fa-fw"></i> fa-folder-o </p><br>
							<p><i class="fa fa-folder-open-o fa-fw"></i> fa-folder-open-o </p><br>
							<p><i class="fa fa-smile-o fa-fw"></i> fa-smile-o </p><br>
							<p><i class="fa fa-frown-o fa-fw"></i> fa-frown-o </p><br>
							<p><i class="fa fa-meh-o fa-fw"></i> fa-meh-o </p><br>
							<p><i class="fa fa-gamepad fa-fw"></i> fa-gamepad </p><br>
							<p><i class="fa fa-keyboard-o fa-fw"></i> fa-keyboard-o </p><br>
							<p><i class="fa fa-flag-o fa-fw"></i> fa-flag-o </p><br>
							<p><i class="fa fa-flag-checkered fa-fw"></i> fa-flag-checkered </p><br>
							<p><i class="fa fa-terminal fa-fw"></i> fa-terminal </p><br>
							<p><i class="fa fa-code fa-fw"></i> fa-code </p><br>
							<p><i class="fa fa-mail-reply-all fa-fw"></i> fa-mail-reply-all </p><br>
							<p><i class="fa fa-reply-all fa-fw"></i> fa-reply-all </p><br>
							<p><i class="fa fa-star-half-empty fa-fw"></i> fa-star-half-empty </p><br>
							<p><i class="fa fa-star-half-full fa-fw"></i> fa-star-half-full </p><br>
							<p><i class="fa fa-star-half-o fa-fw"></i> fa-star-half-o </p><br>
							<p><i class="fa fa-location-arrow fa-fw"></i> fa-location-arrow </p><br>
							<p><i class="fa fa-crop fa-fw"></i> fa-crop </p><br>
							<p><i class="fa fa-code-fork fa-fw"></i> fa-code-fork </p><br>
							<p><i class="fa fa-unlink fa-fw"></i> fa-unlink </p><br>
							<p><i class="fa fa-chain-broken fa-fw"></i> fa-chain-broken </p><br>
							<p><i class="fa fa-question fa-fw"></i> fa-question </p><br>
							<p><i class="fa fa-info fa-fw"></i> fa-info </p><br>
							<p><i class="fa fa-exclamation fa-fw"></i> fa-exclamation </p><br>
							<p><i class="fa fa-superscript fa-fw"></i> fa-superscript </p><br>
							<p><i class="fa fa-subscript fa-fw"></i> fa-subscript </p><br>
							<p><i class="fa fa-eraser fa-fw"></i> fa-eraser </p><br>
							<p><i class="fa fa-puzzle-piece fa-fw"></i> fa-puzzle-piece </p><br>
							<p><i class="fa fa-microphone fa-fw"></i> fa-microphone </p><br>
							<p><i class="fa fa-microphone-slash fa-fw"></i> fa-microphone-slash </p><br>
							<p><i class="fa fa-shield fa-fw"></i> fa-shield </p><br>
							<p><i class="fa fa-calendar-o fa-fw"></i> fa-calendar-o </p><br>
							<p><i class="fa fa-fire-extinguisher fa-fw"></i> fa-fire-extinguisher </p><br>
							<p><i class="fa fa-rocket fa-fw"></i> fa-rocket </p><br>
							<p><i class="fa fa-maxcdn fa-fw"></i> fa-maxcdn </p><br>
							<p><i class="fa fa-chevron-circle-left fa-fw"></i> fa-chevron-circle-left </p><br>
							<p><i class="fa fa-chevron-circle-right fa-fw"></i> fa-chevron-circle-right </p><br>
							<p><i class="fa fa-chevron-circle-up fa-fw"></i> fa-chevron-circle-up </p><br>
							<p><i class="fa fa-chevron-circle-down fa-fw"></i> fa-chevron-circle-down </p><br>
							<p><i class="fa fa-html5 fa-fw"></i> fa-html5 </p><br>
							<p><i class="fa fa-css3 fa-fw"></i> fa-css3 </p><br>
							<p><i class="fa fa-anchor fa-fw"></i> fa-anchor </p><br>
							<p><i class="fa fa-unlock-alt fa-fw"></i> fa-unlock-alt </p><br>
							<p><i class="fa fa-bullseye fa-fw"></i> fa-bullseye </p><br>
							<p><i class="fa fa-ellipsis-h fa-fw"></i> fa-ellipsis-h </p><br>
							<p><i class="fa fa-ellipsis-v fa-fw"></i> fa-ellipsis-v </p><br>
							<p><i class="fa fa-rss-square fa-fw"></i> fa-rss-square </p><br>
							<p><i class="fa fa-play-circle fa-fw"></i> fa-play-circle </p><br>
							<p><i class="fa fa-ticket fa-fw"></i> fa-ticket </p><br>
							<p><i class="fa fa-minus-square fa-fw"></i> fa-minus-square </p><br>
							<p><i class="fa fa-minus-square-o fa-fw"></i> fa-minus-square-o </p><br>
							<p><i class="fa fa-level-up fa-fw"></i> fa-level-up </p><br>
							<p><i class="fa fa-level-down fa-fw"></i> fa-level-down </p><br>
							<p><i class="fa fa-check-square fa-fw"></i> fa-check-square </p><br>
							<p><i class="fa fa-pencil-square fa-fw"></i> fa-pencil-square </p><br>
							<p><i class="fa fa-external-link-square fa-fw"></i> fa-external-link-square </p><br>
							<p><i class="fa fa-share-square fa-fw"></i> fa-share-square </p><br>
							<p><i class="fa fa-compass fa-fw"></i> fa-compass </p><br>
							<p><i class="fa fa-toggle-down fa-fw"></i> fa-toggle-down </p><br>
							<p><i class="fa fa-caret-square-o-down fa-fw"></i> fa-caret-square-o-down </p><br>
							<p><i class="fa fa-toggle-up fa-fw"></i> fa-toggle-up </p><br>
							<p><i class="fa fa-caret-square-o-up fa-fw"></i> fa-caret-square-o-up </p><br>
							<p><i class="fa fa-toggle-right fa-fw"></i> fa-toggle-right </p><br>
							<p><i class="fa fa-caret-square-o-right fa-fw"></i> fa-caret-square-o-right </p><br>
							<p><i class="fa fa-euro fa-fw"></i> fa-euro </p><br>
							<p><i class="fa fa-eur fa-fw"></i> fa-eur </p><br>
							<p><i class="fa fa-gbp fa-fw"></i> fa-gbp </p><br>
							<p><i class="fa fa-dollar fa-fw"></i> fa-dollar </p><br>
							<p><i class="fa fa-usd fa-fw"></i> fa-usd </p><br>
							<p><i class="fa fa-rupee fa-fw"></i> fa-rupee </p><br>
							<p><i class="fa fa-inr fa-fw"></i> fa-inr </p><br>
							<p><i class="fa fa-cny fa-fw"></i> fa-cny </p><br>
							<p><i class="fa fa-rmb fa-fw"></i> fa-rmb </p><br>
							<p><i class="fa fa-yen fa-fw"></i> fa-yen </p><br>
							<p><i class="fa fa-jpy fa-fw"></i> fa-jpy </p><br>
							<p><i class="fa fa-ruble fa-fw"></i> fa-ruble </p><br>
							<p><i class="fa fa-rouble fa-fw"></i> fa-rouble </p><br>
							<p><i class="fa fa-rub fa-fw"></i> fa-rub </p><br>
							<p><i class="fa fa-won fa-fw"></i> fa-won </p><br>
							<p><i class="fa fa-krw fa-fw"></i> fa-krw </p><br>
							<p><i class="fa fa-bitcoin fa-fw"></i> fa-bitcoin </p><br>
							<p><i class="fa fa-btc fa-fw"></i> fa-btc </p><br>
							<p><i class="fa fa-file fa-fw"></i> fa-file </p><br>
							<p><i class="fa fa-file-text fa-fw"></i> fa-file-text </p><br>
							<p><i class="fa fa-sort-alpha-asc fa-fw"></i> fa-sort-alpha-asc </p><br>
							<p><i class="fa fa-sort-alpha-desc fa-fw"></i> fa-sort-alpha-desc </p><br>
							<p><i class="fa fa-sort-amount-asc fa-fw"></i> fa-sort-amount-asc </p><br>
							<p><i class="fa fa-sort-amount-desc fa-fw"></i> fa-sort-amount-desc </p><br>
							<p><i class="fa fa-sort-numeric-asc fa-fw"></i> fa-sort-numeric-asc </p><br>
							<p><i class="fa fa-sort-numeric-desc fa-fw"></i> fa-sort-numeric-desc </p><br>
							<p><i class="fa fa-thumbs-up fa-fw"></i> fa-thumbs-up </p><br>
							<p><i class="fa fa-thumbs-down fa-fw"></i> fa-thumbs-down </p><br>
							<p><i class="fa fa-youtube-square fa-fw"></i> fa-youtube-square </p><br>
							<p><i class="fa fa-youtube fa-fw"></i> fa-youtube </p><br>
							<p><i class="fa fa-xing fa-fw"></i> fa-xing </p><br>
							<p><i class="fa fa-xing-square fa-fw"></i> fa-xing-square </p><br>
							<p><i class="fa fa-youtube-play fa-fw"></i> fa-youtube-play </p><br>
							<p><i class="fa fa-dropbox fa-fw"></i> fa-dropbox </p><br>
							<p><i class="fa fa-stack-overflow fa-fw"></i> fa-stack-overflow </p><br>
							<p><i class="fa fa-instagram fa-fw"></i> fa-instagram </p><br>
							<p><i class="fa fa-flickr fa-fw"></i> fa-flickr </p><br>
							<p><i class="fa fa-adn fa-fw"></i> fa-adn </p><br>
							<p><i class="fa fa-bitbucket fa-fw"></i> fa-bitbucket </p><br>
							<p><i class="fa fa-bitbucket-square fa-fw"></i> fa-bitbucket-square </p><br>
							<p><i class="fa fa-tumblr fa-fw"></i> fa-tumblr </p><br>
						</div>
						<div class="fa col-lg-3">
							<p><i class="fa fa-tumblr-square fa-fw"></i> fa-tumblr-square </p><br>
							<p><i class="fa fa-long-arrow-down fa-fw"></i> fa-long-arrow-down </p><br>
							<p><i class="fa fa-long-arrow-up fa-fw"></i> fa-long-arrow-up </p><br>
							<p><i class="fa fa-long-arrow-left fa-fw"></i> fa-long-arrow-left </p><br>
							<p><i class="fa fa-long-arrow-right fa-fw"></i> fa-long-arrow-right </p><br>
							<p><i class="fa fa-apple fa-fw"></i> fa-apple </p><br>
							<p><i class="fa fa-windows fa-fw"></i> fa-windows </p><br>
							<p><i class="fa fa-android fa-fw"></i> fa-android </p><br>
							<p><i class="fa fa-linux fa-fw"></i> fa-linux </p><br>
							<p><i class="fa fa-dribbble fa-fw"></i> fa-dribbble </p><br>
							<p><i class="fa fa-skype fa-fw"></i> fa-skype </p><br>
							<p><i class="fa fa-foursquare fa-fw"></i> fa-foursquare </p><br>
							<p><i class="fa fa-trello fa-fw"></i> fa-trello </p><br>
							<p><i class="fa fa-female fa-fw"></i> fa-female </p><br>
							<p><i class="fa fa-male fa-fw"></i> fa-male </p><br>
							<p><i class="fa fa-gittip fa-fw"></i> fa-gittip </p><br>
							<p><i class="fa fa-sun-o fa-fw"></i> fa-sun-o </p><br>
							<p><i class="fa fa-moon-o fa-fw"></i> fa-moon-o </p><br>
							<p><i class="fa fa-archive fa-fw"></i> fa-archive </p><br>
							<p><i class="fa fa-bug fa-fw"></i> fa-bug </p><br>
							<p><i class="fa fa-vk fa-fw"></i> fa-vk </p><br>
							<p><i class="fa fa-weibo fa-fw"></i> fa-weibo </p><br>
							<p><i class="fa fa-renren fa-fw"></i> fa-renren </p><br>
							<p><i class="fa fa-pagelines fa-fw"></i> fa-pagelines </p><br>
							<p><i class="fa fa-stack-exchange fa-fw"></i> fa-stack-exchange </p><br>
							<p><i class="fa fa-arrow-circle-o-right fa-fw"></i> fa-arrow-circle-o-right </p><br>
							<p><i class="fa fa-arrow-circle-o-left fa-fw"></i> fa-arrow-circle-o-left </p><br>
							<p><i class="fa fa-toggle-left fa-fw"></i> fa-toggle-left </p><br>
							<p><i class="fa fa-caret-square-o-left fa-fw"></i> fa-caret-square-o-left </p><br>
							<p><i class="fa fa-dot-circle-o fa-fw"></i> fa-dot-circle-o </p><br>
							<p><i class="fa fa-wheelchair fa-fw"></i> fa-wheelchair </p><br>
							<p><i class="fa fa-vimeo-square fa-fw"></i> fa-vimeo-square </p><br>
							<p><i class="fa fa-turkish-lira fa-fw"></i> fa-turkish-lira </p><br>
							<p><i class="fa fa-try fa-fw"></i> fa-try </p><br>
							<p><i class="fa fa-plus-square-o fa-fw"></i> fa-plus-square-o </p><br>
							<p><i class="fa fa-space-shuttle fa-fw"></i> fa-space-shuttle </p><br>
							<p><i class="fa fa-slack fa-fw"></i> fa-slack </p><br>
							<p><i class="fa fa-envelope-square fa-fw"></i> fa-envelope-square </p><br>
							<p><i class="fa fa-wordpress fa-fw"></i> fa-wordpress </p><br>
							<p><i class="fa fa-openid fa-fw"></i> fa-openid </p><br>
							<p><i class="fa fa-institution fa-fw"></i> fa-institution </p><br>
							<p><i class="fa fa-bank fa-fw"></i> fa-bank </p><br>
							<p><i class="fa fa-university fa-fw"></i> fa-university </p><br>
							<p><i class="fa fa-mortar-board fa-fw"></i> fa-mortar-board </p><br>
							<p><i class="fa fa-graduation-cap fa-fw"></i> fa-graduation-cap </p><br>
							<p><i class="fa fa-yahoo fa-fw"></i> fa-yahoo </p><br>
							<p><i class="fa fa-google fa-fw"></i> fa-google </p><br>
							<p><i class="fa fa-reddit fa-fw"></i> fa-reddit </p><br>
							<p><i class="fa fa-reddit-square fa-fw"></i> fa-reddit-square </p><br>
							<p><i class="fa fa-stumbleupon-circle fa-fw"></i> fa-stumbleupon-circle </p><br>
							<p><i class="fa fa-stumbleupon fa-fw"></i> fa-stumbleupon </p><br>
							<p><i class="fa fa-delicious fa-fw"></i> fa-delicious </p><br>
							<p><i class="fa fa-digg fa-fw"></i> fa-digg </p><br>
							<p><i class="fa fa-pied-piper-square fa-fw"></i> fa-pied-piper-square </p><br>
							<p><i class="fa fa-pied-piper fa-fw"></i> fa-pied-piper </p><br>
							<p><i class="fa fa-pied-piper-alt fa-fw"></i> fa-pied-piper-alt </p><br>
							<p><i class="fa fa-drupal fa-fw"></i> fa-drupal </p><br>
							<p><i class="fa fa-joomla fa-fw"></i> fa-joomla </p><br>
							<p><i class="fa fa-language fa-fw"></i> fa-language </p><br>
							<p><i class="fa fa-fax fa-fw"></i> fa-fax </p><br>
							<p><i class="fa fa-building fa-fw"></i> fa-building </p><br>
							<p><i class="fa fa-child fa-fw"></i> fa-child </p><br>
							<p><i class="fa fa-paw fa-fw"></i> fa-paw </p><br>
							<p><i class="fa fa-spoon fa-fw"></i> fa-spoon </p><br>
							<p><i class="fa fa-cube fa-fw"></i> fa-cube </p><br>
							<p><i class="fa fa-cubes fa-fw"></i> fa-cubes </p><br>
							<p><i class="fa fa-behance fa-fw"></i> fa-behance </p><br>
							<p><i class="fa fa-behance-square fa-fw"></i> fa-behance-square </p><br>
							<p><i class="fa fa-steam fa-fw"></i> fa-steam </p><br>
							<p><i class="fa fa-steam-square fa-fw"></i> fa-steam-square </p><br>
							<p><i class="fa fa-recycle fa-fw"></i> fa-recycle </p><br>
							<p><i class="fa fa-automobile fa-fw"></i> fa-automobile </p><br>
							<p><i class="fa fa-car fa-fw"></i> fa-car </p><br>
							<p><i class="fa fa-cab fa-fw"></i> fa-cab </p><br>
							<p><i class="fa fa-taxi fa-fw"></i> fa-taxi </p><br>
							<p><i class="fa fa-tree fa-fw"></i> fa-tree </p><br>
							<p><i class="fa fa-spotify fa-fw"></i> fa-spotify </p><br>
							<p><i class="fa fa-deviantart fa-fw"></i> fa-deviantart </p><br>
							<p><i class="fa fa-soundcloud fa-fw"></i> fa-soundcloud </p><br>
							<p><i class="fa fa-database fa-fw"></i> fa-database </p><br>
							<p><i class="fa fa-file-pdf-o fa-fw"></i> fa-file-pdf-o </p><br>
							<p><i class="fa fa-file-word-o fa-fw"></i> fa-file-word-o </p><br>
							<p><i class="fa fa-file-excel-o fa-fw"></i> fa-file-excel-o </p><br>
							<p><i class="fa fa-file-powerpoint-o fa-fw"></i> fa-file-powerpoint-o </p><br>
							<p><i class="fa fa-file-photo-o fa-fw"></i> fa-file-photo-o </p><br>
							<p><i class="fa fa-file-picture-o fa-fw"></i> fa-file-picture-o </p><br>
							<p><i class="fa fa-file-image-o fa-fw"></i> fa-file-image-o </p><br>
							<p><i class="fa fa-file-zip-o fa-fw"></i> fa-file-zip-o </p><br>
							<p><i class="fa fa-file-archive-o fa-fw"></i> fa-file-archive-o </p><br>
							<p><i class="fa fa-file-sound-o fa-fw"></i> fa-file-sound-o </p><br>
							<p><i class="fa fa-file-audio-o fa-fw"></i> fa-file-audio-o </p><br>
							<p><i class="fa fa-file-movie-o fa-fw"></i> fa-file-movie-o </p><br>
							<p><i class="fa fa-file-video-o fa-fw"></i> fa-file-video-o </p><br>
							<p><i class="fa fa-file-code-o fa-fw"></i> fa-file-code-o </p><br>
							<p><i class="fa fa-vine fa-fw"></i> fa-vine </p><br>
							<p><i class="fa fa-codepen fa-fw"></i> fa-codepen </p><br>
							<p><i class="fa fa-jsfiddle fa-fw"></i> fa-jsfiddle </p><br>
							<p><i class="fa fa-life-bouy fa-fw"></i> fa-life-bouy </p><br>
							<p><i class="fa fa-life-saver fa-fw"></i> fa-life-saver </p><br>
							<p><i class="fa fa-support fa-fw"></i> fa-support </p><br>
							<p><i class="fa fa-life-ring fa-fw"></i> fa-life-ring </p><br>
							<p><i class="fa fa-circle-o-notch fa-fw"></i> fa-circle-o-notch </p><br>
							<p><i class="fa fa-ra fa-fw"></i> fa-ra </p><br>
							<p><i class="fa fa-rebel fa-fw"></i> fa-rebel </p><br>
							<p><i class="fa fa-ge fa-fw"></i> fa-ge </p><br>
							<p><i class="fa fa-empire fa-fw"></i> fa-empire </p><br>
							<p><i class="fa fa-git-square fa-fw"></i> fa-git-square </p><br>
							<p><i class="fa fa-git fa-fw"></i> fa-git </p><br>
							<p><i class="fa fa-hacker-news fa-fw"></i> fa-hacker-news </p><br>
							<p><i class="fa fa-tencent-weibo fa-fw"></i> fa-tencent-weibo </p><br>
							<p><i class="fa fa-qq fa-fw"></i> fa-qq </p><br>
							<p><i class="fa fa-wechat fa-fw"></i> fa-wechat </p><br>
							<p><i class="fa fa-weixin fa-fw"></i> fa-weixin </p><br>
							<p><i class="fa fa-send fa-fw"></i> fa-send </p><br>
							<p><i class="fa fa-paper-plane fa-fw"></i> fa-paper-plane </p><br>
							<p><i class="fa fa-send-o fa-fw"></i> fa-send-o </p><br>
							<p><i class="fa fa-paper-plane-o fa-fw"></i> fa-paper-plane-o </p><br>
							<p><i class="fa fa-history fa-fw"></i> fa-history </p><br>
							<p><i class="fa fa-circle-thin fa-fw"></i> fa-circle-thin </p><br>
							<p><i class="fa fa-header fa-fw"></i> fa-header </p><br>
							<p><i class="fa fa-paragraph fa-fw"></i> fa-paragraph </p><br>
							<p><i class="fa fa-sliders fa-fw"></i> fa-sliders </p><br>
							<p><i class="fa fa-share-alt fa-fw"></i> fa-share-alt </p><br>
							<p><i class="fa fa-share-alt-square fa-fw"></i> fa-share-alt-square </p><br>
							<p><i class="fa fa-bomb fa-fw"></i> fa-bomb </p><br>
						</div>
					</div>
				</div>
			</div><!-- / Font Awesome -->

		</div>
	</div>
</div><!-- /#content-wrapper -->
