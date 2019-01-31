<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mobiler;

/**
 * MobilerSearch represents the model behind the search form of `app\models\Mobiler`.
 */
class MobilerSearch extends Mobiler
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mobiler', 'id_sekolah', 'id_bulan_aktif', 'lemari_guru', 'meja_guru', 'kursi_guru', 'lemari_siswa', 'meja_siswa', 'kursi_siswa'], 'integer'],
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
        $query = Mobiler::find();

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
            'id_mobiler' => $this->id_mobiler,
            'id_sekolah' => $this->id_sekolah,
            'id_bulan_aktif' => $this->id_bulan_aktif,
            'lemari_guru' => $this->lemari_guru,
            'meja_guru' => $this->meja_guru,
            'kursi_guru' => $this->kursi_guru,
            'lemari_siswa' => $this->lemari_siswa,
            'meja_siswa' => $this->meja_siswa,
            'kursi_siswa' => $this->kursi_siswa,
        ]);

        return $dataProvider;
    }
}
