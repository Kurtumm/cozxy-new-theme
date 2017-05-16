<?php

namespace common\models\costfit\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\costfit\Region as RegionModel;

/**
 * Region represents the model behind the search form about `\common\models\costfit\Region`.
 */
class Region extends RegionModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regionId', 'status'], 'integer'],
            [['title', 'description', 'createDateTime', 'updateDateTime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RegionModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'regionId' => $this->regionId,
            'status' => $this->status,
            'createDateTime' => $this->createDateTime,
            'updateDateTime' => $this->updateDateTime,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
