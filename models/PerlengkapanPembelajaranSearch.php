<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerlengkapanPembelajaran;

/**
 * PerlengkapanPembelajaranSearch represents the model behind the search form of `app\models\PerlengkapanPembelajaran`.
 */
class PerlengkapanPembelajaranSearch extends PerlengkapanPembelajaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_perlengkapan_pembelajaran', 'id_sekolah', 'id_bulan_aktif', 'buku_pedoman_guru', 'buku_teks_siswa', 'alat_peraga', 'komputer', 'listrik'], 'integer'],
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
        $query = PerlengkapanPembelajaran::find();

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
            'id_perlengkapan_pembelajaran' => $this->id_perlengkapan_pembelajaran,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'buku_pedoman_guru' => $this->buku_pedoman_guru,
            'buku_teks_siswa' => $this->buku_teks_siswa,
            'alat_peraga' => $this->alat_peraga,
            'komputer' => $this->komputer,
            'listrik' => $this->listrik,
        ]);

        return $dataProvider;
    }
}
