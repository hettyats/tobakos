<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $id_pemesanan
 * @property int $id_rumahindekos
 * @property int $id_customer
 * @property string $tanggal
 * @property string $waktu
 * @property int $jumlah_kamar
 * @property int $status
 *
 * @property RumahIndekos $rumahindekos
 * @property Customer $customer
 * @property Pemesanan $status0
 * @property Pemesanan[] $pemesanans
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rumahindekos', 'id_customer', 'tanggal', 'jumlah_kamar', 'status'], 'required'],
            [['id_rumahindekos', 'id_customer', 'jumlah_kamar', 'status'], 'integer'],
            [['tanggal', 'waktu'], 'safe'],
            [['id_rumahindekos'], 'exist', 'skipOnError' => true, 'targetClass' => RumahIndekos::className(), 'targetAttribute' => ['id_rumahindekos' => 'ID_RUMAHINDEKOS']],
            [['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['id_customer' => 'ID_CUSTOMER']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::className(), 'targetAttribute' => ['status' => 'id_pemesanan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemesanan' => 'Id Pemesanan',
            'id_rumahindekos' => 'Id Rumahindekos',
            'id_customer' => 'Id Customer',
            'tanggal' => 'Tanggal',
            'waktu' => 'Waktu',
            'jumlah_kamar' => 'Jumlah Kamar',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRumahindekos()
    {
        return $this->hasOne(RumahIndekos::className(), ['ID_RUMAHINDEKOS' => 'id_rumahindekos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['ID_CUSTOMER' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Pemesanan::className(), ['id_pemesanan' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['status' => 'id_pemesanan']);
    }
}
