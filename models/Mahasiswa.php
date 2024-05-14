<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $progdi
 * @property string $kelas
 * @property string $tgl_masuk
 * @property string $agama
 * @property string $ukm
 * @property string $keterangan
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
            [['nim', 'nama', 'progdi', 'kelas','tgl_masuk','agama'], 'required'],
            [['nim'], 'string', 'max' => 11],
            [['nama'], 'string', 'max' => 40],
            [['progdi'], 'string', 'max' => 25],
            [['kelas'], 'string', 'max' => 5],
            [['tgl_masuk'], 'safe'],
            [['agama'], 'safe'],
            [['ukm'], 'safe'],
            [['keterangan'], 'safe'],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'progdi' => 'Progdi',
            'kelas' => 'Kelas',
            'tgl_masuk' => 'Tanggal Masuk',
            'agama' => 'Agama',
            'ukm' => 'UKM',
            'keterangan' => 'Keterangan',
        ];
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if(is_array($this->ukm)){
                $this->ukm = implode(', ',$this->ukm);
            }
            return true;
        }

        return false;

       
    }
}
