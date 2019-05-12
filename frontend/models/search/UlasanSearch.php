<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ulasan;

/**
 * UlasanSearch represents the model behind the search form of `frontend\models\Ulasan`.
 */
class UlasanSearch extends Ulasan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_ULASAN', 'ID_CUSTOMER', 'ID_RUMAHINDEKOS'], 'integer'],
            [['KOMENTAR'], 'safe'],
            [['RATING'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Ulasan::find();

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
            'ID_ULASAN' => $this->ID_ULASAN,
            'ID_CUSTOMER' => $this->ID_CUSTOMER,
            'ID_RUMAHINDEKOS' => $this->ID_RUMAHINDEKOS,
            'RATING' => $this->RATING,
        ]);

        $query->andFilterWhere(['like', 'KOMENTAR', $this->KOMENTAR]);

        return $dataProvider;
    }
}
