<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_penyelenggara_keuangan_dan_administrasi".
 *
 * @property int $id_penyelenggara_keuangan
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $sumber
 * @property int $pengeluaran
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class PenyelenggaraKeuanganDanAdministrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_penyelenggara_keuangan_dan_administrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'sumber', 'pengeluaran'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'sumber', 'pengeluaran'], 'integer'],
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
            'id_penyelenggara_keuangan' => 'Id Penyelenggara Keuangan',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'sumber' => 'Sumber',
            'pengeluaran' => 'Pengeluaran',
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
