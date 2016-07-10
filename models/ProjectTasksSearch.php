<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProjectTasks;

/**
 * ProjectTasksSearch represents the model behind the search form about `app\models\ProjectTasks`.
 */
class ProjectTasksSearch extends ProjectTasks
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_task_id', 'project_id'], 'integer'],
            [['name', 'start_time', 'end_time', 'note'], 'safe'],
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
        $query = ProjectTasks::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort'=> ['defaultOrder' => ['project_task_id'=>SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'project_task_id' => $this->project_task_id,
            'project_id' => $this->project_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
