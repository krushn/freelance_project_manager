<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Password;

/**
 * PasswordSearch represents the model behind the search form about `app\models\Password`.
 */
class PasswordSearch extends Password
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password_id'], 'integer'],
            [['website', 'type', 'data'], 'safe'],
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
        $query = Password::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => ['defaultOrder' => ['password_id'=> SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'password_id' => $this->password_id,
        ]);

        $query->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'data', $this->data]);

        return $dataProvider;
    }
}
