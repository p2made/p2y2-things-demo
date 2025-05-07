<?php
/**
 * DemoSearch.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things-demo
 * @class \p2m\demo\models\DemoSearch
 */

namespace p2m\demo\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use p2m\demo\models\Demo;

/**
 * DemoSearch represents the model behind the search form of `p2m\demo\models\Demo`.
 */
class DemoSearch extends Demo
{
	/** @var string Your query string */
	public $q;

	/**
	 * {@inheritdoc}
	 */
	public function rules(): array
	{
		return [
			['q', 'trim'],
			['q', 'string', 'max' => 255],
		];
	}

	/**
	 * Creates a data provider instance with search query applied
	 *
	 * @param array $params  typically Yii::$app->request->queryParams
	 *
	 * @return ActiveDataProvider
	 */
	public function search(array $params): ActiveDataProvider
	{
		$this->load($params, '');

		$query = Demo::find(); // assuming you have Demo ActiveRecord
		if ($this->q !== '') {
			$query->andFilterWhere(['like', 'name', $this->q]);
		}

		return new ActiveDataProvider([
			'query'      => $query,
			'pagination' => ['pageSize' => 20],
			'sort'       => ['defaultOrder' => ['id' => SORT_DESC]],
		]);
	}
}
