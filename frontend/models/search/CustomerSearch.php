<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Customer;

/**
 * CustomerSearch represents the model behind the search form of `frontend\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_CUSTOMER', 'ID_AKUN', 'NAMA_CUSTOMER', 'ALAMAT_CUSTOMER', 'EMAIL_CUSTOMER'], 'safe'],
            [['NO_TELEPON_CUSTOMER', 'JENIS_KELAMIN'], 'integer'],
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
        $query = Customer::find();

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
            'NO_TELEPON_CUSTOMER' => $this->NO_TELEPON_CUSTOMER,
            'JENIS_KELAMIN' => $this->JENIS_KELAMIN,
        ]);

        $query->andFilterWhere(['like', 'ID_CUSTOMER', $this->ID_CUSTOMER])
            ->andFilterWhere(['like', 'ID_AKUN', $this->ID_AKUN])
            ->andFilterWhere(['like', 'NAMA_CUSTOMER', $this->NAMA_CUSTOMER])
            ->andFilterWhere(['like', 'ALAMAT_CUSTOMER', $this->ALAMAT_CUSTOMER])
            ->andFilterWhere(['like', 'EMAIL_CUSTOMER', $this->EMAIL_CUSTOMER]);

        return $dataProvider;
    }
}
