<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string $ID_ADMIN
 * @property string $NAMA_ADMIN
 * @property string $ALAMAT_ADMIN
 * @property string $EMAIL_ADMIN
 * @property int $NO_TELEPON_ADMIN
 *
 * @property Akun[] $akuns
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
            [['ID_ADMIN'], 'required'],
            [['NO_TELEPON_ADMIN'], 'integer'],
            [['ID_ADMIN'], 'string', 'max' => 16],
            [['NAMA_ADMIN', 'EMAIL_ADMIN'], 'string', 'max' => 32],
            [['ALAMAT_ADMIN'], 'string', 'max' => 64],
            [['ID_ADMIN'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_ADMIN' => 'Id Admin',
            'NAMA_ADMIN' => 'Nama Admin',
            'ALAMAT_ADMIN' => 'Alamat Admin',
            'EMAIL_ADMIN' => 'Email Admin',
            'NO_TELEPON_ADMIN' => 'No Telepon Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAkuns()
    {
        return $this->hasMany(Akun::className(), ['ID_ADMIN' => 'ID_ADMIN']);
    }
}
