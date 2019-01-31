<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SaranaDanPrasarana;

/**
 * SaranaDanPrasaranaSearch represents the model behind the search form of `app\models\SaranaDanPrasarana`.
 */
class SaranaDanPrasaranaSearch extends SaranaDanPrasarana
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sarana_dan_prasarana', 'id_sekolah', 'id_bulan_aktif', 'tanah_bangunan', 'mobiler', 'perlengkapan_pembelajaran'], 'integer'],
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
        $query = SaranaDanPrasarana::find();

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
            'id_sarana_dan_prasarana' => $this->id_sarana_dan_prasarana,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'tanah_bangunan' => $this->tanah_bangunan,
            'mobiler' => $this->mobiler,
            'perlengkapan_pembelajaran' => $this->perlengkapan_pembelajaran,
        ]);

        return $dataProvider;
    }
}
