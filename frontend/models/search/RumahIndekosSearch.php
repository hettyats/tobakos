<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RumahIndekos;

/**
 * RumahIndekosSearch represents the model behind the search form of `frontend\models\RumahIndekos`.
 */
class RumahIndekosSearch extends RumahIndekos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_RUMAHINDEKOS', 'ID_VENDOR', 'ID_CUSTOMER', 'NAMA_RUMAHINDEKOS', 'ALAMAT_RUMAHINDEKOS'], 'safe'],
            [['BIAYA'], 'integer'],
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
        $query = RumahIndekos::find();

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
            'BIAYA' => $this->BIAYA,
        ]);

        $query->andFilterWhere(['like', 'ID_RUMAHINDEKOS', $this->ID_RUMAHINDEKOS])
            ->andFilterWhere(['like', 'ID_VENDOR', $this->ID_VENDOR])
            ->andFilterWhere(['like', 'ID_CUSTOMER', $this->ID_CUSTOMER])
            ->andFilterWhere(['like', 'NAMA_RUMAHINDEKOS', $this->NAMA_RUMAHINDEKOS])
            ->andFilterWhere(['like', 'ALAMAT_RUMAHINDEKOS', $this->ALAMAT_RUMAHINDEKOS]);

        return $dataProvider;
    }
}