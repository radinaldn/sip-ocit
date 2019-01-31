<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_keadaan_siswa".
 *
 * @property int $id_keadaan_siswa
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $kelas
 * @property int $jumlah_rombel
 * @property int $jumlah_siswa
 * @property int $laki_laki
 * @property int $perempuan
 * @property int $jumlah_total
 * @property int $mutasi_siswa
 * @property int $masuk
 * @property int $keluar
 * @property int $rekapitulasi_absen
 * @property int $sakit
 * @property int $alpa
 * @property int $izin
 * @property int $jumlah_telegram
 * @property int $keterangan
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class KeadaanSiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_keadaan_siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'kelas', 'jumlah_rombel', 'jumlah_siswa', 'laki_laki', 'perempuan', 'jumlah_total', 'mutasi_siswa', 'masuk', 'keluar', 'rekapitulasi_absen', 'sakit', 'alpa', 'izin', 'jumlah_telegram', 'keterangan'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'kelas', 'jumlah_rombel', 'jumlah_siswa', 'laki_laki', 'perempuan', 'jumlah_total', 'mutasi_siswa', 'masuk', 'keluar', 'rekapitulasi_absen', 'sakit', 'alpa', 'izin', 'jumlah_telegram', 'keterangan'], 'integer'],
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
            'id_keadaan_siswa' => 'Id Keadaan Siswa',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'kelas' => 'Kelas',
            'jumlah_rombel' => 'Jumlah Rombel',
            'jumlah_siswa' => 'Jumlah Siswa',
            'laki_laki' => 'Laki Laki',
            'perempuan' => 'Perempuan',
            'jumlah_total' => 'Jumlah Total',
            'mutasi_siswa' => 'Mutasi Siswa',
            'masuk' => 'Masuk',
            'keluar' => 'Keluar',
            'rekapitulasi_absen' => 'Rekapitulasi Absen',
            'sakit' => 'Sakit',
            'alpa' => 'Alpa',
            'izin' => 'Izin',
            'jumlah_telegram' => 'Jumlah Telegram',
            'keterangan' => 'Keterangan',
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
