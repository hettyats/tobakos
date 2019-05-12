<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $ID_ADMIN
 * @property int $ID_AKUN
 * @property string $NAMA_ADMIN
 * @property string $ALAMAT_ADMIN
 * @property string $EMAIL_ADMIN
 * @property int $NO_TELEPON_ADMIN
 *
 * @property User $aKUN
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_AKUN'], 'required'],
            [['ID_AKUN', 'NO_TELEPON_ADMIN'], 'integer'],
            [['NAMA_ADMIN', 'EMAIL_ADMIN'], 'string', 'max' => 32],
            [['ALAMAT_ADMIN'], 'string', 'max' => 64],
            [['ID_AKUN'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ID_AKUN' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_ADMIN' => 'Id Admin',
            'ID_AKUN' => 'Id Akun',
            'NAMA_ADMIN' => 'Nama Admin',
            'ALAMAT_ADMIN' => 'Alamat Admin',
            'EMAIL_ADMIN' => 'Email Admin',
            'NO_TELEPON_ADMIN' => 'No Telepon Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAKUN()
    {
        return $this->hasOne(User::className(), ['id' => 'ID_AKUN']);
    }
}
