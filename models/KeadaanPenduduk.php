<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_keadaan_penduduk".
 *
 * @property int $id_keadaan_penduduk
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $nama_tenaga_pendidik
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $no_telp
 * @property string $jabatan_mapel_diajar
 * @property string $pendidikan_ijazah_terakhir
 * @property string $status_kepegawaian
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class KeadaanPenduduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_keadaan_penduduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'nama_tenaga_pendidik', 'tempat_lahir', 'tanggal_lahir', 'no_telp', 'jabatan_mapel_diajar', 'pendidikan_ijazah_terakhir', 'status_kepegawaian'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'nama_tenaga_pendidik'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['tempat_lahir', 'jabatan_mapel_diajar'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 12],
            [['pendidikan_ijazah_terakhir', 'status_kepegawaian'], 'string', 'max' => 100],
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
            'id_keadaan_penduduk' => 'Id Keadaan Penduduk',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'nama_tenaga_pendidik' => 'Nama Tenaga Pendidik',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'no_telp' => 'No Telp',
            'jabatan_mapel_diajar' => 'Jabatan Mapel Diajar',
            'pendidikan_ijazah_terakhir' => 'Pendidikan Ijazah Terakhir',
            'status_kepegawaian' => 'Status Kepegawaian',
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
