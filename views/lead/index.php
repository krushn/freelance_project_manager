<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leads';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Create Lead', ['create'], ['class' => 'btn btn-raised btn-success']) ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">
                    Leads
                </h2>
              </div>
              <div class="panel-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        // ['class' => 'yii\grid\SerialColumn'],

                        // 'lead_id',
                        'name',
                        'email:email',
                        'skype',
                        'contact_no',
                        // 'note:ntext',
                        // 'date_added',

                        [
                            'class' => 'app\components\CActionColumn',
                            'template' => '{customer} {view} {update} {delete}',
                            'buttons' => [
                                'customer' => function ($url) {
                                    return Html::a(
                                        '<span class="fa fa-check"></span>',
                                        $url, 
                                        [
                                            'title' => 'move to customer',
                                            'class' => 'btn btn-raised btn-success btn-xs'
                                        ]
                                    );
                                },
                            ],
                        ],
                    ],
                ]); ?>
              </div>
            </div>
        </div>
    </div>
</div>
