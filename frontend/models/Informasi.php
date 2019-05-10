<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "informasi".
 *
 * @property string $ID_INFORMASI
 * @property string $ID_RUMAHINDEKOS
 * @property string $ID_VENDOR
 * @property string $JENIS_FASILITAS
 * @property int $STOK
 * @property string $KETERANGAN
 *
 * @property RumahIndekos $rUMAHINDEKOS
 * @property Vendor $vENDOR
 */
class Informasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_INFORMASI'], 'required'],
            [['STOK'], 'integer'],
            [['ID_INFORMASI', 'ID_RUMAHINDEKOS', 'ID_VENDOR'], 'string', 'max' => 16],
            [['JENIS_FASILITAS'], 'string', 'max' => 32],
            [['KETERANGAN'], 'string', 'max' => 2048],
            [['ID_INFORMASI'], 'unique'],
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
            'ID_INFORMASI' => 'Id Informasi',
            'ID_RUMAHINDEKOS' => 'Id Rumahindekos',
            'ID_VENDOR' => 'Id Vendor',
            'JENIS_FASILITAS' => 'Jenis Fasilitas',
            'STOK' => 'Stok',
            'KETERANGAN' => 'Keterangan',
        ];
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
