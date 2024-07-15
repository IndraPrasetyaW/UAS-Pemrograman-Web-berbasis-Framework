<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form about `app\models\mahasiswa`.
 */
class MahasiswaSearch extends mahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nim_mahasiswa'], 'integer'],
            [['nama_mahasiswa', 'prestasi_mahasiswa', 'foto'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = mahasiswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'nim_mahasiswa' => $this->nim_mahasiswa,
        ]);

        $query->andFilterWhere(['like', 'nama_mahasiswa', $this->nama_mahasiswa])
            ->andFilterWhere(['like', 'prestasi_mahasiswa', $this->prestasi_mahasiswa])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
