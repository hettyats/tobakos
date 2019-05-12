<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jenis_kelamin".
 *
 * @property int $id
 * @property string $jenisKelamin
 *
 * @property Customer[] $customers
 */
class JenisKelamin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_kelamin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisKelamin'], 'required'],
            [['jenisKelamin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenisKelamin' => 'Jenis Kelamin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['JENIS_KELAMIN' => 'id']);
    }
}
