<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $ID_CUSTOMER
 * @property string $ID_AKUN
 * @property string $NAMA_CUSTOMER
 * @property string $ALAMAT_CUSTOMER
 * @property int $NO_TELEPON_CUSTOMER
 * @property int $JENIS_KELAMIN
 * @property string $EMAIL_CUSTOMER
 *
 * @property Akun[] $akuns
 * @property RumahIndekos[] $rumahIndekos
 * @property Ulasan[] $ulasans
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_CUSTOMER'], 'required'],
            [['NO_TELEPON_CUSTOMER', 'JENIS_KELAMIN'], 'integer'],
            [['ID_CUSTOMER', 'ID_AKUN'], 'string', 'max' => 16],
            [['NAMA_CUSTOMER', 'EMAIL_CUSTOMER'], 'string', 'max' => 32],
            [['ALAMAT_CUSTOMER'], 'string', 'max' => 64],
            [['ID_CUSTOMER'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_CUSTOMER' => 'Id Customer',
            'ID_AKUN' => 'Id Akun',
            'NAMA_CUSTOMER' => 'Nama Customer',
            'ALAMAT_CUSTOMER' => 'Alamat Customer',
            'NO_TELEPON_CUSTOMER' => 'No Telepon Customer',
            'JENIS_KELAMIN' => 'Jenis Kelamin',
            'EMAIL_CUSTOMER' => 'Email Customer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAkuns()
    {
        return $this->hasMany(Akun::className(), ['ID_CUSTOMER' => 'ID_CUSTOMER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRumahIndekos()
    {
        return $this->hasMany(RumahIndekos::className(), ['ID_CUSTOMER' => 'ID_CUSTOMER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUlasans()
    {
        return $this->hasMany(Ulasan::className(), ['ID_CUSTOMER' => 'ID_CUSTOMER']);
    }
}
