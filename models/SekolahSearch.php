<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sekolah;

/**
 * SekolahSearch represents the model behind the search form of `app\models\Sekolah`.
 */
class SekolahSearch extends Sekolah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sekolah'], 'integer'],
            [['no_statistik', 'no_telp', 'alamat', 'kecamatan', 'kabupaten'], 'safe'],
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
        $query = Sekolah::find();

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
            'id_sekolah' => $this->id_sekolah,
        ]);

        $query->andFilterWhere(['like', 'no_statistik', $this->no_statistik])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten]);

        return $dataProvider;
    }
}
