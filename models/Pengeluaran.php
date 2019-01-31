<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pengeluaran".
 *
 * @property int $id_pengeluaran
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $tekor
 * @property int $dll
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class Pengeluaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'tekor', 'dll'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'tekor', 'dll'], 'integer'],
            [['id_sekolah'], 'exist', 'skipOnError' => true, 'targetClass' => Sekolah::className(), 'targetAttribute' => ['id_sekolah' => 'id_sekolah']],
            [['id_bulan_aktif'], 'exist', 'skipOnError' => true, 'targetClass' => BulanAktif::className(), 'targetAttribute' => ['id_bulan_aktif' => 'id_bulan_aktif']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengeluaran' => 'Id Pengeluaran',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'tekor' => 'Tekor',
            'dll' => 'Dll',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSekolah()
    {
        return $this->hasOne(Sekolah::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBulanAktif()
    {
        return $this->hasOne(BulanAktif::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }
}
