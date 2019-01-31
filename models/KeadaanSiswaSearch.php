<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KeadaanSiswa;

/**
 * KeadaanSiswaSearch represents the model behind the search form of `app\models\KeadaanSiswa`.
 */
class KeadaanSiswaSearch extends KeadaanSiswa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keadaan_siswa', 'id_sekolah', 'id_bulan_aktif', 'kelas', 'jumlah_rombel', 'jumlah_siswa', 'laki_laki', 'perempuan', 'jumlah_total', 'mutasi_siswa', 'masuk', 'keluar', 'rekapitulasi_absen', 'sakit', 'alpa', 'izin', 'jumlah_telegram', 'keterangan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = KeadaanSiswa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_keadaan_siswa' => $this->id_keadaan_siswa,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'kelas' => $this->kelas,
            'jumlah_rombel' => $this->jumlah_rombel,
            'jumlah_siswa' => $this->jumlah_siswa,
            'laki_laki' => $this->laki_laki,
            'perempuan' => $this->perempuan,
            'jumlah_total' => $this->jumlah_total,
            'mutasi_siswa' => $this->mutasi_siswa,
            'masuk' => $this->masuk,
            'keluar' => $this->keluar,
            'rekapitulasi_absen' => $this->rekapitulasi_absen,
            'sakit' => $this->sakit,
            'alpa' => $this->alpa,
            'izin' => $this->izin,
            'jumlah_telegram' => $this->jumlah_telegram,
            'keterangan' => $this->keterangan,
        ]);

        return $dataProvider;
    }
}
