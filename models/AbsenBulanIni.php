<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_absen_bulan_ini".
 *
 * @property int $id_absen
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $sakit
 * @property int $izin
 * @property int $alpa
 * @property int $jumlah
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class AbsenBulanIni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_absen_bulan_ini';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'sakit', 'izin', 'alpa', 'jumlah'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'sakit', 'izin', 'alpa', 'jumlah'], 'integer'],
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
            'id_absen' => 'Id Absen',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'sakit' => 'Sakit',
            'izin' => 'Izin',
            'alpa' => 'Alpa',
            'jumlah' => 'Jumlah',
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
