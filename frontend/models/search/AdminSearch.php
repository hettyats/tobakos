<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Admin;

/**
 * AdminSearch represents the model behind the search form of `frontend\models\Admin`.
 */
class AdminSearch extends Admin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_ADMIN', 'ID_AKUN', 'NO_TELEPON_ADMIN'], 'integer'],
            [['NAMA_ADMIN', 'ALAMAT_ADMIN', 'EMAIL_ADMIN'], 'safe'],
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
        $query = Admin::find();

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
            'ID_ADMIN' => $this->ID_ADMIN,
            'ID_AKUN' => $this->ID_AKUN,
            'NO_TELEPON_ADMIN' => $this->NO_TELEPON_ADMIN,
        ]);

        $query->andFilterWhere(['like', 'NAMA_ADMIN', $this->NAMA_ADMIN])
            ->andFilterWhere(['like', 'ALAMAT_ADMIN', $this->ALAMAT_ADMIN])
            ->andFilterWhere(['like', 'EMAIL_ADMIN', $this->EMAIL_ADMIN]);

        return $dataProvider;
    }
}
