<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property string $ID_VENDOR
 * @property string $ID_AKUN
 * @property string $NAMA_VENDOR
 * @property string $ALAMAT_VENDOR
 * @property string $EMAIL_VENDOR
 * @property int $NO_TELEPON__VENDOR
 *
 * @property Informasi[] $informasis
 * @property RumahIndekos[] $rumahIndekos
 * @property Ulasan[] $ulasans
 * @property Akun $aKUN
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_VENDOR', 'ID_AKUN'], 'required'],
            [['NO_TELEPON__VENDOR'], 'integer'],
            [['ID_VENDOR', 'ID_AKUN'], 'string', 'max' => 16],
            [['NAMA_VENDOR', 'EMAIL_VENDOR'], 'string', 'max' => 32],
            [['ALAMAT_VENDOR'], 'string', 'max' => 64],
            [['ID_VENDOR'], 'unique'],
            [['ID_AKUN'], 'exist', 'skipOnError' => true, 'targetClass' => Akun::className(), 'targetAttribute' => ['ID_AKUN' => 'ID_AKUN']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_VENDOR' => 'Id Vendor',
            'ID_AKUN' => 'Id Akun',
            'NAMA_VENDOR' => 'Nama Vendor',
            'ALAMAT_VENDOR' => 'Alamat Vendor',
            'EMAIL_VENDOR' => 'Email Vendor',
            'NO_TELEPON__VENDOR' => 'No Telepon Vendor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformasis()
    {
        return $this->hasMany(Informasi::className(), ['ID_VENDOR' => 'ID_VENDOR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRumahIndekos()
    {
        return $this->hasMany(RumahIndekos::className(), ['ID_VENDOR' => 'ID_VENDOR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUlasans()
    {
        return $this->hasMany(Ulasan::className(), ['ID_VENDOR' => 'ID_VENDOR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAKUN()
    {
        return $this->hasOne(Akun::className(), ['ID_AKUN' => 'ID_AKUN']);
    }
}
