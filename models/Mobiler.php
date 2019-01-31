<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_mobiler".
 *
 * @property int $id_mobiler
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $lemari_guru
 * @property int $meja_guru
 * @property int $kursi_guru
 * @property int $lemari_siswa
 * @property int $meja_siswa
 * @property int $kursi_siswa
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class Mobiler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_mobiler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'lemari_guru', 'meja_guru', 'kursi_guru', 'lemari_siswa', 'meja_siswa', 'kursi_siswa'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'lemari_guru', 'meja_guru', 'kursi_guru', 'lemari_siswa', 'meja_siswa', 'kursi_siswa'], 'integer'],
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
            'id_mobiler' => 'Id Mobiler',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'lemari_guru' => 'Lemari Guru',
            'meja_guru' => 'Meja Guru',
            'kursi_guru' => 'Kursi Guru',
            'lemari_siswa' => 'Lemari Siswa',
            'meja_siswa' => 'Meja Siswa',
            'kursi_siswa' => 'Kursi Siswa',
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
