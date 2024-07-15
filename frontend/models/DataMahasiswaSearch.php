<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataMahasiswa;

/**
 * ProdiSearch represents the model behind the search form about `app\models\DataMahasiswa`.
 */
class DataMahasiswaSearch extends DataMahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mahasiswa'], 'integer'],
            [['nama_mahasiswa'], 'safe'],
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
        $query = DataMahasiswa::find();

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
            'id_mahasiswa' => $this->id_mahasiswa,
        ]);

        $query->andFilterWhere(['like', 'nama_mahasiswa', $this->nama_mahasiswa]);

        return $dataProvider;
    }
}
