<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= Html::a('Update', ['update', 'id' => $model->customer_id], ['class' => 'btn btn-raised btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->customer_id], [
        'class' => 'btn btn-raised btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <?= Html::encode($this->title) ?>
                    </h2>
                </div>
                <div class="panel-body">  

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'customer_id',
                            'name',
                            'email:email',
                            'skype',
                            'contact_no',
                            'note:ntext',
                            'date_added',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
