<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lead */

$this->title = 'Update Lead: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Leads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->lead_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Cancle', ['index'], ['class' => 'btn btn-raised btn-info']) ?>
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

			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>
			  </div>
			</div>
		</div>
	</div>
</div>
