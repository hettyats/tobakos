<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "informasi".
 *
 * @property int $ID_INFORMASI
 * @property int $ID_RUMAHINDEKOS
 * @property string $JENIS_FASILITAS
 * @property int $STOK
 * @property string $KETERANGAN
 *
 * @property RumahIndekos $rUMAHINDEKOS
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
            [['ID_RUMAHINDEKOS'], 'required'],
            [['ID_RUMAHINDEKOS', 'STOK'], 'integer'],
            [['JENIS_FASILITAS'], 'string', 'max' => 32],
            [['KETERANGAN'], 'string', 'max' => 2048],
            [['ID_RUMAHINDEKOS'], 'exist', 'skipOnError' => true, 'targetClass' => RumahIndekos::className(), 'targetAttribute' => ['ID_RUMAHINDEKOS' => 'ID_RUMAHINDEKOS']],
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
}
