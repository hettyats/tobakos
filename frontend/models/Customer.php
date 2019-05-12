<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $ID_CUSTOMER
 * @property int $ID_AKUN
 * @property string $NAMA_CUSTOMER
 * @property string $ALAMAT_CUSTOMER
 * @property int $NO_TELEPON_CUSTOMER
 * @property int $JENIS_KELAMIN
 * @property string $EMAIL_CUSTOMER
 *
 * @property User $aKUN
 * @property JenisKelamin $jENISKELAMIN
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
            [['ID_AKUN', 'JENIS_KELAMIN'], 'required'],
            [['ID_AKUN', 'NO_TELEPON_CUSTOMER', 'JENIS_KELAMIN'], 'integer'],
            [['NAMA_CUSTOMER', 'EMAIL_CUSTOMER'], 'string', 'max' => 32],
            [['ALAMAT_CUSTOMER'], 'string', 'max' => 64],
            [['ID_AKUN'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ID_AKUN' => 'id']],
            [['JENIS_KELAMIN'], 'exist', 'skipOnError' => true, 'targetClass' => JenisKelamin::className(), 'targetAttribute' => ['JENIS_KELAMIN' => 'id']],
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
    public function getAKUN()
    {
        return $this->hasOne(User::className(), ['id' => 'ID_AKUN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJENISKELAMIN()
    {
        return $this->hasOne(JenisKelamin::className(), ['id' => 'JENIS_KELAMIN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUlasans()
    {
        return $this->hasMany(Ulasan::className(), ['ID_CUSTOMER' => 'ID_CUSTOMER']);
    }
}
