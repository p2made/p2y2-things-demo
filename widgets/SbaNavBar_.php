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
 * Custonisation of NavBar for SB Admin
 *
 */

declare(strict_types=1);

namespace p2m\demo\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\bootstrap5\NavBar;
use yii\helpers\Html;
use p2m\helpers\BI;

/**
 * NavBar renders a navbar HTML component.
 *
 * Any content enclosed between the [[begin()]] and [[end()]] calls of NavBar
 * is treated as the content of the navbar. You may use widgets such as [[Nav]]
 * or [[\yii\widgets\Menu]] to build up such content. For example,
 *
 * ```php
 * use yii\bootstrap\NavBar;
 * use yii\bootstrap\Nav;
 *
 * NavBar::begin(['brandLabel' => 'NavBar Test']);
 * echo Nav::widget([
 *     'items' => [
 *         ['label' => 'Home', 'url' => ['/site/index']],
 *         ['label' => 'About', 'url' => ['/site/about']],
 *     ],
 *     'options' => ['class' => 'navbar-nav'],
 * ]);
 * NavBar::end();
 * ```
 *
 * @see https://getbootstrap.com/docs/4.0/components/navbar/
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @author John Snook <jsnook@gmail.com>
 * @since 2.0
 * @note This is a merge of 2.0.8 and 2.1 b
 */
class SbaNavBar extends NavBar
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
	 * @var array the HTML attributes of the inner container.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $innerContainerOptions = [];

	public $clientOptions = [];

	public function init(): void
	{
		parent::init();
		if (!isset($this->options['class']) || empty($this->options['class'])) {
			Html::addCssClass($this->options, [
				'widget' => 'sb-topnav navbar',
				'toggle' => 'navbar-expand',
				'navbar-dark',
				'bg-dark',
			]);
		} else {
			Html::addCssClass($this->options, [
				'widget' => 'sb-topnav navbar',
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
		if ($this->showSearch) {
		//	$this->renderSearchForm() . PHP_EOL;
		}
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
}
