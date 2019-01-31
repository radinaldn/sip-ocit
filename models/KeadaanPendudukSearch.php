<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KeadaanPenduduk;

/**
 * KeadaanPendudukSearch represents the model behind the search form of `app\models\KeadaanPenduduk`.
 */
class KeadaanPendudukSearch extends KeadaanPenduduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keadaan_penduduk', 'id_sekolah', 'id_bulan_aktif', 'nama_tenaga_pendidik'], 'integer'],
            [['tempat_lahir', 'tanggal_lahir', 'no_telp', 'jabatan_mapel_diajar', 'pendidikan_ijazah_terakhir', 'status_kepegawaian'], 'safe'],
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
        $query = KeadaanPenduduk::find();

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
            'id_keadaan_penduduk' => $this->id_keadaan_penduduk,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'nama_tenaga_pendidik' => $this->nama_tenaga_pendidik,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $query->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'jabatan_mapel_diajar', $this->jabatan_mapel_diajar])
            ->andFilterWhere(['like', 'pendidikan_ijazah_terakhir', $this->pendidikan_ijazah_terakhir])
            ->andFilterWhere(['like', 'status_kepegawaian', $this->status_kepegawaian]);

        return $dataProvider;
    }
}
