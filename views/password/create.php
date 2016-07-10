<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Password */

$this->title = 'Create Password';
$this->params['breadcrumbs'][] = ['label' => 'Passwords', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
