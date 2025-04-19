<?php
/**
 * @p2m/demo/views/layouts/navigation-side.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 */

/** @var \yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use p2m\helpers\BI;

$menu = $this->params['menus']['side'] ?? [];
$user = $this->params['demoUser'];

function renderMenu(array $items, int $depth = 1): string
{
	$html = Html::beginTag('ul', ['class' => $depth === 1 ? 'nav' : 'nav nested']);
	foreach ($items as $item) {
		if (is_string($item)) {
			// Section heading
			$html .= Html::tag('div', $item, ['class' => 'sb-sidenav-menu-heading']);
			continue;
		}

		$label = Html::encode($item['label']);
		$url = isset($item['url']) ? Url::to($item['url']) : '#';
		$icon = isset($item['icon']) ? BI::i($item['icon'])->size(4) : '';
		$linkText = $icon . Html::tag('span', $label);

		$hasSub = isset($item['items']) && is_array($item['items']);

		if ($hasSub) {
			$collapseId = 'menuCollapse_' . md5($label . $depth);
			$html .= Html::beginTag('li', ['class' => 'nav-item']);
			$html .= Html::a(
				$linkText . Html::tag('div', '<i class="bi bi-chevron-down"></i>', ['class' => 'sb-sidenav-collapse-arrow']),
				'#' . $collapseId,
				[
					'class' => 'nav-link collapsed',
					'data-bs-toggle' => 'collapse',
					'aria-expanded' => 'false',
					'aria-controls' => $collapseId,
				]
			);
			$html .= Html::beginTag('div', [
				'class' => 'collapse',
				'id' => $collapseId,
			]);
			$html .= renderMenu($item['items'], $depth + 1);
			$html .= Html::endTag('div');
			$html .= Html::endTag('li');
		} else {
			$html .= Html::tag('li',
				Html::a($linkText, $url, ['class' => 'nav-link']),
				['class' => 'nav-item']
			);
		}
	}
	$html .= Html::endTag('ul');
	return $html;
}

echo Html::beginTag('div', ['class' => 'layoutSidenav_nav']);

echo Html::beginTag('nav', [
	'class' => 'sb-sidenav accordion sb-sidenav-dark',
	'id' => 'sidenavAccordion',
]);

echo Html::beginTag('div', ['class' => 'sb-sidenav-menu']);

foreach ($menu as $group => $items) {
	echo Html::tag('div', $group, ['class' => 'sb-sidenav-menu-heading']);
	echo renderMenu($items);
}

echo Html::endTag('div');

echo Html::tag('div',
	Html::tag('div', 'Logged in as:', ['class' => 'small']) . $user,
	['class' => 'sb-sidenav-footer']
);

echo Html::endTag('nav');
echo Html::endTag('div');
?>
<div class="layoutSidenav_nav">
	<nav id="sidenavAccordion" class="sb-sidenav accordion sb-sidenav-dark">
		<div class="sb-sidenav-menu">
			<div class="sb-sidenav-menu-heading">Core</div>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="/">
						<i class="bi bi-speedometer2 fs-4"></i>
						<span>Dashboard</span>
					</a>
				</li>
			</ul>
			<div class="sb-sidenav-menu-heading">Interface</div>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link collapsed" href="#menuCollapse_58ea11bc34c2420925948ae6ec409b08" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menuCollapse_58ea11bc34c2420925948ae6ec409b08">
						<i class="bi bi-columns fs-4"></i>
						<span>Layouts</span>
						<div class="sb-sidenav-collapse-arrow">
							<i class="bi bi-chevron-down"></i>
						</div>
					</a>
					<div id="menuCollapse_58ea11bc34c2420925948ae6ec409b08" class="collapse">
						<ul class="nav nested">
							<li class="nav-item">
								<a class="nav-link" href="/layout/static">
									<span>Static Navigation</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/layout/light">
									<span>Light Sidenav</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapsed" href="#menuCollapse_5faf33516072dffe4485d71fbfe54988" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menuCollapse_5faf33516072dffe4485d71fbfe54988">
						<i class="bi bi-book fs-4"></i>
						<span>Pages</span>
						<div class="sb-sidenav-collapse-arrow">
							<i class="bi bi-chevron-down"></i>
						</div>
					</a>
					<div id="menuCollapse_5faf33516072dffe4485d71fbfe54988" class="collapse">
						<ul class="nav nested">
							<li class="nav-item">
								<a class="nav-link collapsed" href="#menuCollapse_c43eb42f5fabfe33732ad99b87602505" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menuCollapse_c43eb42f5fabfe33732ad99b87602505">
									<span>Authentication</span>
									<div class="sb-sidenav-collapse-arrow">
										<i class="bi bi-chevron-down"></i>
									</div>
								</a>
								<div id="menuCollapse_c43eb42f5fabfe33732ad99b87602505" class="collapse">
									<ul class="nav nested">
										<li class="nav-item">
											<a class="nav-link" href="/login">
												<span>Login</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="/register">
												<span>Register</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link collapsed" href="#menuCollapse_c674c4448acae88fb7de5de963cdeb1f" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menuCollapse_c674c4448acae88fb7de5de963cdeb1f">
									<span>Error</span>
									<div class="sb-sidenav-collapse-arrow">
									<i class="bi bi-chevron-down"></i>
								</div>
							</a>
							<div id="menuCollapse_c674c4448acae88fb7de5de963cdeb1f" class="collapse"><ul class="nav nested"><li class="nav-item"><a class="nav-link" href="/error/401"><span>401 Page</span></a></li><li class="nav-item"><a class="nav-link" href="/error/404"><span>404 Page</span></a></li><li class="nav-item"><a class="nav-link" href="/error/500"><span>500 Page</span></a></li></ul></div></li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="sb-sidenav-menu-heading">Addons</div>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="/charts">
						<i class="bi bi-bar-chart fs-4"></i>
						<span>Charts</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/tables">
						<i class="bi bi-table fs-4"></i>
						<span>Tables</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="sb-sidenav-footer">
			<div class="small">Logged in as:</div>
			Demo User
		</div>
	</nav>
</div>
