<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ulasan".
 *
 * @property int $ID_ULASAN
 * @property int $ID_CUSTOMER
 * @property int $ID_RUMAHINDEKOS
 * @property string $KOMENTAR
 * @property int $RATING
 *
 * @property Customer $cUSTOMER
 * @property RumahIndekos $rUMAHINDEKOS
 */
class Ulasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ulasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_CUSTOMER', 'ID_RUMAHINDEKOS'], 'required'],
            [['ID_CUSTOMER', 'ID_RUMAHINDEKOS', 'RATING'], 'integer'],
            [['KOMENTAR'], 'string', 'max' => 128],
            [['ID_CUSTOMER'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['ID_CUSTOMER' => 'ID_CUSTOMER']],
            [['ID_RUMAHINDEKOS'], 'exist', 'skipOnError' => true, 'targetClass' => RumahIndekos::className(), 'targetAttribute' => ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_ULASAN' => 'Id Ulasan',
            'ID_CUSTOMER' => 'Id Customer',
            'ID_RUMAHINDEKOS' => 'Id Rumahindekos',
            'KOMENTAR' => 'Komentar',
            'RATING' => 'Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['ID_CUSTOMER' => 'ID_CUSTOMER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRumahindekos()
    {
        return $this->hasOne(RumahIndekos::className(), ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']);
    }
}
