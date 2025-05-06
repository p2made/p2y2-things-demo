<?php
/**
 * @p2m/demo/views/layouts/_nav_side.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** $this->render('@p2m/demo/views/layouts/_nav_side.php'); */

/** @var \yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use p2m\helpers\BI;

$menu = Yii::$app->params['menus']['side'] ?? [];

function renderSideMenu(array $items, int $depth = 1): string
{
	$html = '';

	foreach ($items as $item) {
		$label = Html::encode($item['label']);
		$url = $item['url'] ?? '#';
		$icon = isset($item['icon']) ? Html::tag('div',
			BI::i($item['icon'])->size(6),
			['class' => 'sb-nav-link-icon']
		) : '';
		$hasChildren = isset($item['items']) && is_array($item['items']);
		$collapseId = 'menuCollapse_' . md5($label . '-' . $depth);

		if ($hasChildren) {
			// Collapse toggle anchor
			$html .= Html::a(
				$icon . ' ' . $label .
				Html::tag('div', BI::i(BI::_CHEVRON_DOWN), ['class' => 'sb-sidenav-collapse-arrow']),
				"#{$collapseId}",
				[
					'class' => 'nav-link collapsed',
					'data-bs-toggle' => 'collapse',
					'aria-expanded' => 'false',
					'aria-controls' => $collapseId,
				]
			);

			// Collapsible inner section
			$html .= Html::beginTag('div', [
				'class' => 'collapse',
				'id' => $collapseId,
			]);

			// Use nested nav wrapper for child items
			$html .= Html::beginTag('nav', ['class' => 'sb-sidenav-menu-nested nav']);
			$html .= renderSideMenu($item['items'], $depth + 1);
			$html .= Html::endTag('nav');

			$html .= Html::endTag('div');
		} else {
			$html .= Html::a(
				$icon . ' ' . $label,
				Url::to($url),
				['class' => 'nav-link']
			);
		}
	}

	return $html;
}
?>
<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
		<div class="sb-sidenav-menu">
			<div class="nav">
				<?php foreach ($menu as $heading => $items): ?>
					<div class="sb-sidenav-menu-heading"><?= Html::encode($heading) ?></div>
					<?= renderSideMenu($items) ?>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="sb-sidenav-footer">
			<div class="small">Logged in as:</div>
			<?= Html::encode($this->params['username']) ?>
		</div>
	</nav>
</div>
