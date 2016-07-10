<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lead;

/**
 * LeadSearch represents the model behind the search form about `app\models\Lead`.
 */
class LeadSearch extends Lead
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lead_id'], 'integer'],
            [['name', 'email', 'skype', 'contact_no', 'note', 'date_added'], 'safe'],
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
        $query = Lead::find();

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
            'lead_id' => $this->lead_id,
            'date_added' => $this->date_added,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'contact_no', $this->contact_no])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
