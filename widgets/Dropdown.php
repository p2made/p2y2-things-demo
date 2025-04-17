<?php
/**
 * DemoController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\ThingsDemoAsset
 */

namespace p2m\demo\widgets;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Dropdown extends \yii\bootstrap\Dropdown
{
	/**
	 * Initializes the widget.
	 * If you override this method, make sure you call the parent implementation first.
	 */
	public function init() {
		if ($this->submenuOptions === null) {
			// copying of [[options]] kept for BC
			// @todo separate [[submenuOptions]] from [[options]] completely before 2.1 release
			$this->submenuOptions = $this->options;
			unset($this->submenuOptions['id']);
		}

		parent::init();
		Html::addCssClass($this->options, [
			'widget' => 'dropdown-menu'
		]);
	}

	/**
	 * Renders menu items.
	 * @param array $items the menu items to be rendered
	 * @param array $options the container HTML attributes
	 * @return string the rendering result.
	 * @throws InvalidConfigException if the label option is not specified in one of the items.
	 */
	protected function renderItems($items, $options = []) {
		$lines = [];
		foreach ($items as $item) {
			if (is_string($item)) {
				$lines[] = $item;
				continue;
			}
			if (isset($item['visible']) && !$item['visible']) {
				continue;
			}
			/** empty label dont throw errors, they're dividers */
			if (!array_key_exists('label', $item) || empty($item['label'])) {
				$lines[] = Html::tag('div', '', ['class' => 'dropdown-divider']);
				continue;
			}
			$encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
			$label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
			$itemOptions = ArrayHelper::getValue($item, 'options', []);
			$linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);
			Html::addCssClass($linkOptions, 'dropdown-item');

			$linkOptions['tabindex'] = '-1';
			$url = array_key_exists('url', $item) ? $item['url'] : null;
			if (empty($item['items'])) {
				if ($url === null) {
					// No items or Url, you must be a header
					Html::addCssClass($itemOptions, ['widget' => 'dropdown-header']);
					$lines[] = Html::tag('h6', $label, $itemOptions);
					continue;
				} else {
					$content = Html::a($label, $url, $linkOptions);
				}
			} else {
				$submenuOptions = $this->submenuOptions;
				if (isset($item['submenuOptions'])) {
					$submenuOptions = array_merge($submenuOptions, $item['submenuOptions']);
				}
				$content = Html::a($label, $url === null ? 'javascript:;' : $url, $linkOptions)
						. $this->renderItems($item['items'], $submenuOptions);
				Html::addCssClass($itemOptions, ['widget' => 'dropdown-submenu']);
			}

			#$lines[] = Html::tag('li', $content, $itemOptions);
			$lines[] = $content;
		}

		return Html::tag('div', implode("\n", $lines), $options);
	}
}
