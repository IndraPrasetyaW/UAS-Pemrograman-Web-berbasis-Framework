<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property int $nim_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $prestasi_mahasiswa
 * @property string|null $foto
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $fotoFile;

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
            [['nim_mahasiswa', 'nama_mahasiswa', 'prestasi_mahasiswa'], 'required'],
            [['nim_mahasiswa'], 'integer'],
            [['nama_mahasiswa', 'prestasi_mahasiswa'], 'string', 'max' => 255],
            [['fotoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim_mahasiswa' => 'Nim Mahasiswa',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'prestasi_mahasiswa' => 'Prestasi Mahasiswa',
            'foto' => 'Foto',
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if ($this->fotoFile) {
            $this->foto = $this->uploadFoto();
        }
        return parent::beforeSave($insert);
    }

    /**
     * Upload foto to the server
     * @return string the uploaded file name
     */
    private function uploadFoto()
    {
        $fileName = Yii::$app->security->generateRandomString() . '.' . $this->fotoFile->extension;
        $this->fotoFile->saveAs(Yii::getAlias('@uploads') . '/' . $fileName);
        return $fileName;
    }
}