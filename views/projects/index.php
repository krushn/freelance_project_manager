<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\CActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-raised btn-success']) ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">
                    Projects
                </h2>
              </div>
              <div class="panel-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],

                        'project_id',
                        'name',
                        array(
                            'header'  => 'Total',
                            'format' => 'html',
                            'value' => 'total'
                        ),
                        //'type',
                        //'rate',
                        //'amount',
                        'paid',
                        //'status',
                        'date_added',

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
    $('input[name=\'ProjectsSearch[project_id]\']').parent().css('width', '70px');
});");
?>