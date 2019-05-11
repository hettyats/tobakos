<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Informasi;

/**
 * InformasiSearch represents the model behind the search form of `frontend\models\Informasi`.
 */
class InformasiSearch extends Informasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_INFORMASI', 'ID_RUMAHINDEKOS', 'ID_VENDOR', 'JENIS_FASILITAS', 'KETERANGAN'], 'safe'],
            [['STOK'], 'integer'],
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
        $query = Informasi::find();

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
            'STOK' => $this->STOK,
        ]);

        $query->andFilterWhere(['like', 'ID_INFORMASI', $this->ID_INFORMASI])
            ->andFilterWhere(['like', 'ID_RUMAHINDEKOS', $this->ID_RUMAHINDEKOS])
            ->andFilterWhere(['like', 'ID_VENDOR', $this->ID_VENDOR])
            ->andFilterWhere(['like', 'JENIS_FASILITAS', $this->JENIS_FASILITAS])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN]);

        return $dataProvider;
    }
}
