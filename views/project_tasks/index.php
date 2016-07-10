<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectTasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Create Project Tasks', ['create'], ['class' => 'btn btn-raised btn-success']) ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">
                    Project tasks
                </h2>
              </div>
              <div class="panel-body">                          
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                       // ['class' => 'yii\grid\SerialColumn'],

                      //  'project_task_id',
                        'project_id',
                        'name',
                        'start_time',
                        'end_time',
                        // 'note:ntext',

                        ['class' => 'app\components\CActionColumn'],
                    ],
                ]); ?>
              </div>
            </div>
        </div>
    </div>
</div>

<?php $this->registerJs("
$(document).ready(function(){
    $('input[name=\'ProjectTasksSearch[project_id]\']').parent().css('width', '70px');
    $('input[name=\'ProjectTasksSearch[project_task_id]\']').parent().css('width', '70px');
});");
?>