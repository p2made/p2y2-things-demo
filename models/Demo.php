<?php
/**
 * Demo.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\models\Demo
 */

namespace p2m\demo\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%language}}".
 *
 * @property int $pk Language PK
 * @property string $lang_code Language Code
 * @property string|null $prev_code Previous Code
 * @property int|null $menu_position Menu Position
 * @property int $active Active
 * @property string $lang_name Language Name
 * @property string $native_name Native Name
 * @property string $flag_icon Flag Icon
 * @property string $ui_label UI Label
 * @property string $locale Locale
 * @property string $html_lang HTML Language
 * @property string|null $footer_content Footer Content
 */
class Demo extends ActiveRecord
{
	/**
	 * {@inheritdoc}
	public static function tableName()
	{
		return '{{%language}}';
	}
	 */

	/**
	 * {@inheritdoc}
	public function rules()
	{
		return [
			[['lang_code', 'lang_name', 'native_name', 'flag_icon', 'ui_label', 'locale', 'html_lang'], 'required'],
			[['menu_position', 'active'], 'integer'],
			[['footer_content'], 'string'],
			[['lang_code', 'prev_code', 'flag_icon', 'ui_label'], 'string', 'max' => 4],
			[['lang_name', 'native_name'], 'string', 'max' => 32],
			[['locale', 'html_lang'], 'string', 'max' => 12],
			[['lang_code'], 'unique'],
			[['lang_name'], 'unique'],
			[['native_name'], 'unique'],
			[['flag_icon'], 'unique'],
			[['ui_label'], 'unique'],
			[['locale'], 'unique'],
			[['html_lang'], 'unique'],
			[['prev_code'], 'unique'],
		];
	}
	 */

	/**
	 * {@inheritdoc}
	public function attributeLabels()
	{
		return [
			'pk' => 'Language PK',
			'lang_code' => 'Language Code',
			'prev_code' => 'Previous Code',
			'menu_position' => 'Menu Position',
			'active' => 'Active',
			'lang_name' => 'Language Name',
			'native_name' => 'Native Name',
			'flag_icon' => 'Flag Icon',
			'ui_label' => 'UI Label',
			'locale' => 'Locale',
			'html_lang' => 'HTML Language',
			'footer_content' => 'Footer Content',
		];
	}
	 */
}
