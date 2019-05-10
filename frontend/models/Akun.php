<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun".
 *
 * @property string $ID_AKUN
 * @property string $ID_CUSTOMER
 * @property string $ID_ADMIN
 * @property string $PERTANYAAN_KEAMANAN
 * @property string $NAMA_AKUN
 * @property string $KATA_SANDI
 *
 * @property Admin $aDMIN
 * @property Customer $cUSTOMER
 * @property Vendor[] $vendors
 */
class Akun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_AKUN', 'ID_CUSTOMER', 'ID_ADMIN'], 'required'],
            [['ID_AKUN', 'ID_CUSTOMER', 'ID_ADMIN', 'KATA_SANDI'], 'string', 'max' => 16],
            [['PERTANYAAN_KEAMANAN'], 'string', 'max' => 256],
            [['NAMA_AKUN'], 'string', 'max' => 32],
            [['ID_AKUN'], 'unique'],
            [['ID_ADMIN'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['ID_ADMIN' => 'ID_ADMIN']],
            [['ID_CUSTOMER'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['ID_CUSTOMER' => 'ID_CUSTOMER']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_AKUN' => 'Id Akun',
            'ID_CUSTOMER' => 'Id Customer',
            'ID_ADMIN' => 'Id Admin',
            'PERTANYAAN_KEAMANAN' => 'Pertanyaan Keamanan',
            'NAMA_AKUN' => 'Nama Akun',
            'KATA_SANDI' => 'Kata Sandi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getADMIN()
    {
        return $this->hasOne(Admin::className(), ['ID_ADMIN' => 'ID_ADMIN']);
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
    public function getVendors()
    {
        return $this->hasMany(Vendor::className(), ['ID_AKUN' => 'ID_AKUN']);
    }
}
