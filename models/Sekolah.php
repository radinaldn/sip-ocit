<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_sekolah".
 *
 * @property int $id_sekolah
 * @property string $no_statistik
 * @property string $no_telp
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kabupaten
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
class Sekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_sekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'no_statistik', 'no_telp', 'alamat', 'kecamatan', 'kabupaten'], 'required'],
            [['id_sekolah'], 'integer'],
            [['alamat'], 'string'],
            [['no_statistik'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 12],
            [['kecamatan', 'kabupaten'], 'string', 'max' => 100],
            [['id_sekolah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sekolah' => 'Id Sekolah',
            'no_statistik' => 'No Statistik',
            'no_telp' => 'No Telp',
            'alamat' => 'Alamat',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbsenBulanInis()
    {
        return $this->hasMany(AbsenBulanIni::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeadaanPenduduks()
    {
        return $this->hasMany(KeadaanPenduduk::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeadaanSiswas()
    {
        return $this->hasMany(KeadaanSiswa::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobilers()
    {
        return $this->hasMany(Mobiler::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengeluarans()
    {
        return $this->hasMany(Pengeluaran::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyelenggaraKeuanganDanAdministrasis()
    {
        return $this->hasMany(PenyelenggaraKeuanganDanAdministrasi::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerlengkapanPembelajarans()
    {
        return $this->hasMany(PerlengkapanPembelajaran::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaranaDanPrasaranas()
    {
        return $this->hasMany(SaranaDanPrasarana::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumbers()
    {
        return $this->hasMany(Sumber::className(), ['id_sekolah' => 'id_sekolah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanahBangunans()
    {
        return $this->hasMany(TanahBangunan::className(), ['id_sekolah' => 'id_sekolah']);
    }
}
