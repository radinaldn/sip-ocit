<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_perlengkapan_pembelajaran".
 *
 * @property int $id_perlengkapan_pembelajaran
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $buku_pedoman_guru
 * @property int $buku_teks_siswa
 * @property int $alat_peraga
 * @property int $komputer
 * @property int $listrik
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class PerlengkapanPembelajaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_perlengkapan_pembelajaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'buku_pedoman_guru', 'buku_teks_siswa', 'alat_peraga', 'komputer', 'listrik'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'buku_pedoman_guru', 'buku_teks_siswa', 'alat_peraga', 'komputer', 'listrik'], 'integer'],
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
            'id_perlengkapan_pembelajaran' => 'Id Perlengkapan Pembelajaran',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'buku_pedoman_guru' => 'Buku Pedoman Guru',
            'buku_teks_siswa' => 'Buku Teks Siswa',
            'alat_peraga' => 'Alat Peraga',
            'komputer' => 'Komputer',
            'listrik' => 'Listrik',
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
