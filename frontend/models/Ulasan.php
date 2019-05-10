<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ulasan".
 *
 * @property string $ID_ULASAN
 * @property string $ID_CUSTOMER
 * @property string $ID_VENDOR
 * @property string $ID_RUMAHINDEKOS
 * @property string $KOMENTAR
 * @property double $RATING
 *
 * @property Customer $cUSTOMER
 * @property RumahIndekos $rUMAHINDEKOS
 * @property Vendor $vENDOR
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
            [['ID_ULASAN', 'ID_VENDOR', 'ID_RUMAHINDEKOS'], 'required'],
            [['RATING'], 'number'],
            [['ID_ULASAN', 'ID_CUSTOMER', 'ID_VENDOR', 'ID_RUMAHINDEKOS'], 'string', 'max' => 16],
            [['KOMENTAR'], 'string', 'max' => 128],
            [['ID_ULASAN'], 'unique'],
            [['ID_CUSTOMER'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['ID_CUSTOMER' => 'ID_CUSTOMER']],
            [['ID_RUMAHINDEKOS'], 'exist', 'skipOnError' => true, 'targetClass' => RumahIndekos::className(), 'targetAttribute' => ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']],
            [['ID_VENDOR'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['ID_VENDOR' => 'ID_VENDOR']],
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
            'ID_VENDOR' => 'Id Vendor',
            'ID_RUMAHINDEKOS' => 'Id Rumahindekos',
            'KOMENTAR' => 'Komentar',
            'RATING' => 'Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCUSTOMER()
    {
        return $this->hasOne(Customer::className(), ['ID_CUSTOMER' => 'ID_CUSTOMER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRUMAHINDEKOS()
    {
        return $this->hasOne(RumahIndekos::className(), ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVENDOR()
    {
        return $this->hasOne(Vendor::className(), ['ID_VENDOR' => 'ID_VENDOR']);
    }
}
