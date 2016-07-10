<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasswordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Passwords';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Create Password', ['create'], ['class' => 'btn btn-raised btn-success']) ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">
                    <?= $this->title ?>
                </h2>
              </div>
              <div class="panel-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        //['class' => 'yii\grid\SerialColumn'],

                        'password_id',
                        'website',
                        'type',
                        'data:ntext',

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
    $('input[name=\'PasswordSearch[password_id]\']').parent().css('width', '70px');
});");
?>