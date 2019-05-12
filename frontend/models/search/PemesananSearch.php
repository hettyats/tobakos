<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `frontend\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemesanan', 'id_rumahindekos', 'id_customer', 'jumlah_kamar', 'status'], 'integer'],
            [['tanggal', 'waktu'], 'safe'],
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
        $query = Pemesanan::find();

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
            'id_pemesanan' => $this->id_pemesanan,
            'id_rumahindekos' => $this->id_rumahindekos,
            'id_customer' => $this->id_customer,
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
            'jumlah_kamar' => $this->jumlah_kamar,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
