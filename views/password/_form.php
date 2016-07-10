<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Password */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="password-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'FTP' => 'FTP', 'Database' => 'Database', 'Admin' => 'Admin', 'Customer' => 'Customer', 'Other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'data')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-raised btn-success' : 'btn btn-raised btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
