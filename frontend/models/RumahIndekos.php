<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rumah_indekos".
 *
 * @property int $ID_RUMAHINDEKOS
 * @property int $ID_VENDOR
 * @property string $NAMA_RUMAHINDEKOS
 * @property int $BIAYA
 * @property string $ALAMAT_RUMAHINDEKOS
 *
 * @property Informasi[] $informasis
 * @property Vendor $vENDOR
 * @property Ulasan[] $ulasans
 */
class RumahIndekos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rumah_indekos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_VENDOR'], 'required'],
            [['ID_VENDOR', 'BIAYA'], 'integer'],
            [['NAMA_RUMAHINDEKOS'], 'string', 'max' => 32],
            [['ALAMAT_RUMAHINDEKOS'], 'string', 'max' => 64],
            [['ID_VENDOR'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['ID_VENDOR' => 'ID_VENDOR']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_RUMAHINDEKOS' => 'Id Rumahindekos',
            'ID_VENDOR' => 'Id Vendor',
            'NAMA_RUMAHINDEKOS' => 'Nama Rumahindekos',
            'BIAYA' => 'Biaya',
            'ALAMAT_RUMAHINDEKOS' => 'Alamat Rumahindekos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformasis()
    {
        return $this->hasMany(Informasi::className(), ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['ID_VENDOR' => 'ID_VENDOR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUlasans()
    {
        return $this->hasMany(Ulasan::className(), ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']);
    }
}
