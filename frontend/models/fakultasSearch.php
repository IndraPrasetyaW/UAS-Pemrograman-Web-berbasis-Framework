<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\fakultas;

/**
 * FakultasSearch represents the model behind the search form about `app\models\fakultas`.
 */
class fakultasSearch extends fakultas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Fakultas'], 'integer'],
            [['nama_Fakultas'], 'safe'],
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
        $query = Fakultas::find();

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
            'id_Fakultas' => $this->id_Fakultas,
        ]);

        $query->andFilterWhere(['like', 'nama_Fakultas', $this->nama_Fakultas]);

        return $dataProvider;
    }
}
