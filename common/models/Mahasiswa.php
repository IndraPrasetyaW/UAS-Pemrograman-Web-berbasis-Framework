<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $prestasi_mahasiswa
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'nama_mahasiswa', 'prestasi_mahasiswa'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['nama_mahasiswa', 'prestasi_mahasiswa'], 'string', 'max' => 255],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id Mahasiswa',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'prestasi_mahasiswa' => 'Prestasi Mahasiswa',
        ];
    }
}
