<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bulan_aktif".
 *
 * @property int $id_bulan_aktif
 * @property string $bulan
 * @property string $tahun
 * @property string $status
 *
 * @property AbsenBulanIni[] $tbAbsenBulanInis
 * @property KeadaanPenduduk[] $tbKeadaanPenduduks
 * @property KeadaanSiswa[] $tbKeadaanSiswas
 * @property Mobiler[] $tbMobilers
 * @property Pengeluaran[] $tbPengeluarans
 * @property PenyelenggaraKeuanganDanAdministrasi[] $tbPenyelenggaraKeuanganDanAdministrasis
 * @property PerlengkapanPembelajaran[] $tbPerlengkapanPembelajarans
 * @property SaranaDanPrasarana[] $tbSaranaDanPrasaranas
 * @property Sumber[] $tbSumbers
 * @property TanahBangunan[] $tbTanahBangunans
 */
class BulanAktif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_bulan_aktif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bulan', 'tahun', 'status'], 'required'],
            [['bulan', 'status'], 'string'],
            [['tahun'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbsenBulanInis()
    {
        return $this->hasMany(AbsenBulanIni::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeadaanPenduduks()
    {
        return $this->hasMany(KeadaanPenduduk::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeadaanSiswas()
    {
        return $this->hasMany(KeadaanSiswa::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobilers()
    {
        return $this->hasMany(Mobiler::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengeluarans()
    {
        return $this->hasMany(Pengeluaran::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyelenggaraKeuanganDanAdministrasis()
    {
        return $this->hasMany(PenyelenggaraKeuanganDanAdministrasi::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerlengkapanPembelajarans()
    {
        return $this->hasMany(PerlengkapanPembelajaran::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaranaDanPrasaranas()
    {
        return $this->hasMany(SaranaDanPrasarana::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumbers()
    {
        return $this->hasMany(Sumber::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanahBangunans()
    {
        return $this->hasMany(TanahBangunan::className(), ['id_bulan_aktif' => 'id_bulan_aktif']);
    }
}
