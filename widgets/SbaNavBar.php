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
	/**
	 * @var array the HTML attributes of the brand link.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $brandOptions = ['class' => 'navbar-brand ps-3 me-auto'];

	public $showSearch = true;

	public $searchModel;

	public $userDropdownItems = []; // optional override for user menu


	/**
	 * @var array the HTML attributes for the widget container tag. The following special options are recognized:
	 *
	 * - tag: string, defaults to "nav", the name of the container tag.
	 *
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $options = [];

	/**
	 * @var array|bool the HTML attributes for the collapse container tag. The following special options are recognized:
	 *
	 * - tag: string, defaults to "div", the name of the container tag.
	 *
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $collapseOptions = [];

	/**
	 * @var array|bool the HTML attributes for the offcanvas container tag.
	 *
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $offcanvasOptions = false;

	/**
	 * @var string|bool the text of the brand or false if it's not used. Note that this is not HTML-encoded.
	 * @see https://getbootstrap.com/docs/5.1/components/navbar/
	 */
	public $brandLabel = false;

	/**
	 * @var string|bool src of the brand image or false if it's not used. Note that this param will override `$this->brandLabel` param.
	 * @see https://getbootstrap.com/docs/5.1/components/navbar/
	 * @since 2.0.8
	 */
	public $brandImage = false;

	/**
	 * @var array the HTML attributes of the brand image.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $brandImageOptions = [];

	/**
	 * @var array|string|bool the URL for the brand's hyperlink tag. This parameter will be processed by [[\yii\helpers\Url::to()]]
	 * and will be used for the "href" attribute of the brand link. Default value is false that means
	 * [[\yii\web\Application::homeUrl]] will be used.
	 * You may set it to `null` if you want to have no link at all.
	 */
	public $brandUrl = false;

	/**
	 * @var string text to show for screen readers for the button to toggle the navbar.
	 */
	public $screenReaderToggleText;

	/**
	 * @var array the HTML attributes of the navbar toggler button.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $togglerOptions = [];

	/**
	 * @var bool whether the navbar content should be included in an inner div container which by default
	 * adds left and right padding. Set this to false for a 100% width navbar.
	 */
	public $renderInnerContainer = true;

	public $clientOptions = [];


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

		echo Html::beginTag($navTag, $navOptions) . PHP_EOL;
		echo $brand . PHP_EOL;
		echo $this->renderToggleButton() . PHP_EOL;
		if ($this->collapseOptions !== false) {
			Html::addCssClass($this->collapseOptions, [
				'collapse' => 'collapse',
				'widget' => 'navbar-collapse',
			]);
			$collapseOptions = $this->collapseOptions;
			$collapseTag = ArrayHelper::remove($collapseOptions, 'tag', 'div');
			echo Html::beginTag($collapseTag, $collapseOptions) . PHP_EOL;
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
			echo Html::endTag($tag) . PHP_EOL;
		} elseif ($this->offcanvasOptions !== false) {
			Offcanvas::end();
		}
		$content = ob_get_clean();
		$tag = ArrayHelper::remove($this->options, 'tag', 'nav');
		$content .= Html::endTag($tag);

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
	 * Renders sidebar toggle button.
	 * @return string the rendering toggle button.
	 */
	protected function renderToggleButton(): string
	{
		return Html::button(
			BI::i(BI::_LIST)->size(4),
			[
				'class' => 'btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0',
				'id' => 'sidebarToggle',
				'type' => 'button',
			]
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
/**
if ($this->showSearch) {
    echo Html::beginForm('', 'get', [
        'class' => 'd-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0',
    ]);
    echo Html::beginTag('div', ['class' => 'input-group']);

    echo Html::activeInput('text', $this->searchModel, 'q', [
        'class' => 'form-control',
        'placeholder' => 'Search for...',
        'aria-label' => 'Search for...',
        'aria-describedby' => 'btnNavbarSearch',
    ]);

    echo Html::button(
        BI::i(BI::_SEARCH . ' fs-6'),
        [
            'class' => 'btn btn-primary',
            'id' => 'btnNavbarSearch',
            'type' => 'submit',
        ]
    );

    echo Html::endTag('div');
    echo Html::endForm();
}
 */

/**
echo Html::beginTag('ul', ['class' => 'navbar-nav ms-auto ms-md-0 me-3 me-lg-4']);
echo Html::beginTag('li', ['class' => 'nav-item dropdown']);

echo Html::a(
    BI::i(BI::_PERSON . ' fs-5'),
    '#',
    [
        'class' => 'nav-link dropdown-toggle',
        'id' => 'navbarDropdown',
        'role' => 'button',
        'data-bs-toggle' => 'dropdown',
        'aria-expanded' => 'false',
    ]
);

echo Html::beginTag('ul', [
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
    echo Html::tag('li', $item);
}

echo Html::endTag('ul');
echo Html::endTag('li');
echo Html::endTag('ul');
 */
