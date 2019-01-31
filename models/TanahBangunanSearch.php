<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TanahBangunan;

/**
 * TanahBangunanSearch represents the model behind the search form of `app\models\TanahBangunan`.
 */
class TanahBangunanSearch extends TanahBangunan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tanah_bangunan', 'id_sekolah', 'id_bulan_aktif', 'tanah', 'bangunan', 'ruang_belajar', 'ruang_tu', 'ruang_kepala', 'ruang_majelis_guru', 'perpustakaan', 'ruang_komputer', 'tempat_ibadah', 'wc_guru', 'wc_siswa'], 'integer'],
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
        $query = TanahBangunan::find();

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
            'id_tanah_bangunan' => $this->id_tanah_bangunan,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'tanah' => $this->tanah,
            'bangunan' => $this->bangunan,
            'ruang_belajar' => $this->ruang_belajar,
            'ruang_tu' => $this->ruang_tu,
            'ruang_kepala' => $this->ruang_kepala,
            'ruang_majelis_guru' => $this->ruang_majelis_guru,
            'perpustakaan' => $this->perpustakaan,
            'ruang_komputer' => $this->ruang_komputer,
            'tempat_ibadah' => $this->tempat_ibadah,
            'wc_guru' => $this->wc_guru,
            'wc_siswa' => $this->wc_siswa,
        ]);

        return $dataProvider;
    }
}
