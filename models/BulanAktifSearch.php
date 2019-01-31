<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BulanAktif;

/**
 * BulanAktifSearch represents the model behind the search form of `app\models\BulanAktif`.
 */
class BulanAktifSearch extends BulanAktif
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bulan_aktif'], 'integer'],
            [['bulan', 'tahun', 'status'], 'safe'],
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
        $query = BulanAktif::find();

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
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'bulan', $this->bulan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
