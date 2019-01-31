<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_sarana_dan_prasarana".
 *
 * @property int $id_sarana_dan_prasarana
 * @property int $id_sekolah
 * @property int $id_bulan_aktif
 * @property int $tanah_bangunan
 * @property int $mobiler
 * @property int $perlengkapan_pembelajaran
 *
 * @property Sekolah $sekolah
 * @property BulanAktif $bulanAktif
 */
class SaranaDanPrasarana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_sarana_dan_prasarana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah', 'id_bulan_aktif', 'tanah_bangunan', 'mobiler', 'perlengkapan_pembelajaran'], 'required'],
            [['id_sekolah', 'id_bulan_aktif', 'tanah_bangunan', 'mobiler', 'perlengkapan_pembelajaran'], 'integer'],
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
            'id_sarana_dan_prasarana' => 'Id Sarana Dan Prasarana',
            'id_sekolah' => 'Id Sekolah',
            'id_bulan_aktif' => 'Id Bulan Aktif',
            'tanah_bangunan' => 'Tanah Bangunan',
            'mobiler' => 'Mobiler',
            'perlengkapan_pembelajaran' => 'Perlengkapan Pembelajaran',
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
