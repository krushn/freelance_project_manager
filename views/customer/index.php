<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-raised btn-success']) ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">
                    Customers
                </h2>
              </div>
              <div class="panel-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        // ['class' => 'yii\grid\SerialColumn'],

                        //'customer_id',
                        'name',
                        'email:email',
                        'skype',
                        'contact_no',
                        //'note:ntext',
                        //'date_added',

                        ['class' => 'app\components\CActionColumn'],
                    ],
                ]); ?>
              </div>
            </div>
        </div>
    </div>
</div>
