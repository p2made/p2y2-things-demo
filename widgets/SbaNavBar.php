<?php
/**
 * SbaNavBar.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\assets\ThingsDemoAsset
 *
 * Customisation of NavBar for SB Admin
 */

declare(strict_types=1);

namespace p2m\demo\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use p2m\helpers\BI;

class SbaNavBar extends \yii\bootstrap5\NavBar
{
	public $options = [];
	public $collapseOptions = [];
	public $offcanvasOptions = false;
	public $brandLabel = false;
	public $brandImage = false;
	public $brandImageOptions = [];
	public $brandUrl = false;
	public $brandOptions = ['class' => 'navbar-brand ps-3 me-auto'];
	public $screenReaderToggleText;
	public $togglerContent = '<span class="navbar-toggler-icon"></span>';
	public $togglerOptions = [];
	public $renderInnerContainer = true;
	public $innerContainerOptions = [];
	public $clientOptions = [];

	/**
	 * Initiate the widget.
	 */
	public function init(): void
	{
		parent::init();
		if (!isset($this->options['class']) || empty($this->options['class'])) {
			Html::addCssClass($this->options, [
				'widget' => 'navbar',
				'toggle' => 'navbar-expand-lg',
				'navbar-light',
				'bg-light',
			]);
		} else {
			Html::addCssClass($this->options, [
				'widget' => 'navbar',
			]);
		}
		$navOptions = $this->options;
		$navTag = ArrayHelper::remove($navOptions, 'tag', 'nav');
		$brand = '';
		if (!isset($this->innerContainerOptions['class'])) {
			Html::addCssClass($this->innerContainerOptions, [
				'panel' => 'container',
			]);
		}
		if ($this->collapseOptions !== false && !isset($this->collapseOptions['id'])) {
			$this->collapseOptions['id'] = "{$this->options['id']}-collapse";
		} elseif ($this->offcanvasOptions !== false && !isset($this->offcanvasOptions['id'])) {
			$this->offcanvasOptions['id'] = "{$this->options['id']}-offcanvas";
		}
		if ($this->brandImage !== false) {
			$this->brandLabel = Html::img($this->brandImage, $this->brandImageOptions);
		}
		if ($this->brandLabel !== false) {
			Html::addCssClass($this->brandOptions, [
				'widget' => 'navbar-brand',
			]);
			if ($this->brandUrl === null) {
				$brand = Html::tag('span', $this->brandLabel, $this->brandOptions);
			} else {
				$brand = Html::a(
					$this->brandLabel,
					$this->brandUrl === false ? Yii::$app->homeUrl : $this->brandUrl,
					$this->brandOptions,
				);
			}
		}

		ob_start();

		echo Html::beginTag($navTag, $navOptions) . "\n";
		if ($this->renderInnerContainer) {
			echo Html::beginTag('div', $this->innerContainerOptions) . "\n";
		}
		echo $brand . "\n";
		echo $this->renderToggleButton() . "\n";
		if ($this->collapseOptions !== false) {
			Html::addCssClass($this->collapseOptions, [
				'collapse' => 'collapse',
				'widget' => 'navbar-collapse',
			]);
			$collapseOptions = $this->collapseOptions;
			$collapseTag = ArrayHelper::remove($collapseOptions, 'tag', 'div');
			echo Html::beginTag($collapseTag, $collapseOptions) . "\n";
		} elseif ($this->offcanvasOptions !== false) {
			Offcanvas::begin($this->offcanvasOptions);
		}
	}

	/**
	 * Renders the widget.
	 */
	public function run(): string
	{
		if ($this->collapseOptions !== false) {
			$tag = ArrayHelper::remove($this->collapseOptions, 'tag', 'div');
			echo Html::endTag($tag) . "\n";
		} elseif ($this->offcanvasOptions !== false) {
			Offcanvas::end();
		}
		$content = ob_get_clean();
		if ($this->renderInnerContainer) {
			$content .= Html::endTag('div') . "\n";
		}
		$tag = ArrayHelper::remove($this->options, 'tag', 'nav');
		$content .= Html::endTag($tag);
		\yii\bootstrap5\BootstrapPluginAsset::register($this->getView());

		return $content;
	}

	/**
	 * Container options setter for backwards compatibility
	 * @deprecated
	 */
	public function setContainerOptions(array $collapseOptions): void
	{
		$this->collapseOptions = $collapseOptions;
	}

	/**
	 * Renders collapsible toggle button.
	 * @return string the rendering toggle button.
	 */
	protected function renderToggleButton(): string
	{
		if ($this->collapseOptions === false && $this->offcanvasOptions === false) {
			return '';
		}

		$options = $this->togglerOptions;
		Html::addCssClass($options, [
			'widget' => 'navbar-toggler',
		]);
		if ($this->offcanvasOptions !== false) {
			$bsData = [
				'bs-toggle' => 'offcanvas',
				'bs-target' => '#' . $this->offcanvasOptions['id'],
			];
			$aria = $this->offcanvasOptions['id'];
		} elseif ($this->collapseOptions !== false) {
			$bsData = [
				'bs-toggle' => 'collapse',
				'bs-target' => '#' . $this->collapseOptions['id'],
			];
			$aria = $this->collapseOptions['id'];
		}

		return Html::button(
			BI::i(BI::_LIST)->size(4),
			ArrayHelper::merge($options, [
				'type' => 'button',
				'data' => $bsData,
				'aria' => [
					'controls' => $aria,
					'expanded' => 'false',
					'label' => $this->screenReaderToggleText ?: Yii::t('yii/bootstrap5', 'Toggle navigation'),
				],
			]),
		);
	}

	/**
	 * Renders search form.
	 * @return string the rendering search form.
	 */
	protected function renderSearchForm(): string
	{
		$form = Html::beginForm('', 'get', [
			'class' => 'd-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0',
		]);
		$form .= Html::beginTag('div', ['class' => 'input-group']);
		$form .= Html::activeInput('text', $this->searchModel, 'q', [
			'class' => 'form-control',
			'placeholder' => 'Search for...',
			'aria-label' => 'Search for...',
			'aria-describedby' => 'btnNavbarSearch',
		]);
		$form .= Html::button(
			BI::i(BI::_SEARCH . ' fs-6'),
			[
				'class' => 'btn btn-primary',
				'id' => 'btnNavbarSearch',
				'type' => 'submit',
			]
		);
		$form .= Html::endTag('div');
		$form .= Html::endForm();

		return $form;
	}

	/**
	 * Renders dropdown menu.
	 * @return string the rendering dropdown menu.
	 */
	protected function renderDropdown(): string
	{
		//
		$dropDown = Html::beginTag('ul', ['class' => 'navbar-nav ms-auto ms-md-0 me-3 me-lg-4']);
		$dropDown .= Html::beginTag('li', ['class' => 'nav-item dropdown']);
		$dropDown .= Html::a(
			BI::i(BI::_PERSON)->size(5),
			'#',
			[
				'class' => 'nav-link dropdown-toggle',
				'id' => 'navbarDropdown',
				'role' => 'button',
				'data-bs-toggle' => 'dropdown',
				'aria-expanded' => 'false',
			]
		);
		$dropDown .= Html::beginTag('ul', [
			'class' => 'dropdown-menu dropdown-menu-end',
			'aria-labelledby' => 'navbarDropdown',
		]);

		$items = $this->userDropdownItems ?: [
			Html::a('Settings', '#!', ['class' => 'dropdown-item']),
			Html::a('Activity Log', '#!', ['class' => 'dropdown-item']),
			Html::tag('hr', '', ['class' => 'dropdown-divider']),
			Html::a('Logout', '#!', ['class' => 'dropdown-item']),
		];

		foreach ($items as $item) {
			$dropDown .= Html::tag('li', $item);
		}

		$dropDown .= Html::endTag('ul');
		$dropDown .= Html::endTag('li');
		$dropDown .= Html::endTag('ul');
	}
}
