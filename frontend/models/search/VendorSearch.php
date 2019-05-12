<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Vendor;

/**
 * VendorSearch represents the model behind the search form of `frontend\models\Vendor`.
 */
class VendorSearch extends Vendor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_VENDOR', 'ID_AKUN', 'NO_TELEPON__VENDOR'], 'integer'],
            [['NAMA_VENDOR', 'ALAMAT_VENDOR', 'EMAIL_VENDOR'], 'safe'],
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
        $query = Vendor::find();

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
            'ID_VENDOR' => $this->ID_VENDOR,
            'ID_AKUN' => $this->ID_AKUN,
            'NO_TELEPON__VENDOR' => $this->NO_TELEPON__VENDOR,
        ]);

        $query->andFilterWhere(['like', 'NAMA_VENDOR', $this->NAMA_VENDOR])
            ->andFilterWhere(['like', 'ALAMAT_VENDOR', $this->ALAMAT_VENDOR])
            ->andFilterWhere(['like', 'EMAIL_VENDOR', $this->EMAIL_VENDOR]);

        return $dataProvider;
    }
}
