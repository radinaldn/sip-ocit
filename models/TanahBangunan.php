<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tanah_bangunan".
 *
 * @property int $id_tanah_bangunan
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $tanah
 * @property int $bangunan
 * @property int $ruang_belajar
 * @property int $ruang_tu
 * @property int $ruang_kepala
 * @property int $ruang_majelis_guru
 * @property int $perpustakaan
 * @property int $ruang_komputer
 * @property int $tempat_ibadah
 * @property int $wc_guru
 * @property int $wc_siswa
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class TanahBangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tanah_bangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'tanah', 'bangunan', 'ruang_belajar', 'ruang_tu', 'ruang_kepala', 'ruang_majelis_guru', 'perpustakaan', 'ruang_komputer', 'tempat_ibadah', 'wc_guru', 'wc_siswa'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'tanah', 'bangunan', 'ruang_belajar', 'ruang_tu', 'ruang_kepala', 'ruang_majelis_guru', 'perpustakaan', 'ruang_komputer', 'tempat_ibadah', 'wc_guru', 'wc_siswa'], 'integer'],
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
            'id_tanah_bangunan' => 'Id Tanah Bangunan',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'tanah' => 'Tanah',
            'bangunan' => 'Bangunan',
            'ruang_belajar' => 'Ruang Belajar',
            'ruang_tu' => 'Ruang Tu',
            'ruang_kepala' => 'Ruang Kepala',
            'ruang_majelis_guru' => 'Ruang Majelis Guru',
            'perpustakaan' => 'Perpustakaan',
            'ruang_komputer' => 'Ruang Komputer',
            'tempat_ibadah' => 'Tempat Ibadah',
            'wc_guru' => 'Wc Guru',
            'wc_siswa' => 'Wc Siswa',
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
