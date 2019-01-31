<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AbsenBulanIni;

/**
 * AbsenBulanIniSearch represents the model behind the search form of `app\models\AbsenBulanIni`.
 */
class AbsenBulanIniSearch extends AbsenBulanIni
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_absen', 'id_sekolah', 'id_bulan_aktif', 'sakit', 'izin', 'alpa', 'jumlah'], 'integer'],
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
        $query = AbsenBulanIni::find();

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
            'id_absen' => $this->id_absen,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'sakit' => $this->sakit,
            'izin' => $this->izin,
            'alpa' => $this->alpa,
            'jumlah' => $this->jumlah,
        ]);

        return $dataProvider;
    }
}
