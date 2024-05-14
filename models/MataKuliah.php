<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property string $id_matkul
 * @property string $nama_matkul
 * @property string $Hari
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_matkul', 'nama_matkul', 'Hari'], 'required'],
            [['id_matkul'], 'string', 'max' => 8],
            [['nama_matkul'], 'string', 'max' => 30],
            [['Hari'], 'string', 'max' => 10],
            [['id_matkul'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_matkul' => 'Id Matkul',
            'nama_matkul' => 'Nama Matkul',
            'Hari' => 'Hari',
        ];
    }
}
