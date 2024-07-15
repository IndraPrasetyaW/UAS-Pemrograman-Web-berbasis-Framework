<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $id_Fakultas
 * @property string $nama_Fakultas
 */
class fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_Fakultas'], 'required'],
            [['nama_Fakultas'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Fakultas' => 'Id Fakultas',
            'nama_Fakultas' => 'Nama Fakultas',
        ];
    }
}
