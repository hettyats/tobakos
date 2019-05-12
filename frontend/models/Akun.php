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
}
