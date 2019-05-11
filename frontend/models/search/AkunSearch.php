<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Akun;

/**
 * AkunSearch represents the model behind the search form of `frontend\models\Akun`.
 */
class AkunSearch extends Akun
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_AKUN', 'ID_CUSTOMER', 'ID_ADMIN', 'PERTANYAAN_KEAMANAN', 'NAMA_AKUN', 'KATA_SANDI'], 'safe'],
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
        $query = Akun::find();

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
        $query->andFilterWhere(['like', 'ID_AKUN', $this->ID_AKUN])
            ->andFilterWhere(['like', 'ID_CUSTOMER', $this->ID_CUSTOMER])
            ->andFilterWhere(['like', 'ID_ADMIN', $this->ID_ADMIN])
            ->andFilterWhere(['like', 'PERTANYAAN_KEAMANAN', $this->PERTANYAAN_KEAMANAN])
            ->andFilterWhere(['like', 'NAMA_AKUN', $this->NAMA_AKUN])
            ->andFilterWhere(['like', 'KATA_SANDI', $this->KATA_SANDI]);

        return $dataProvider;
    }
}
