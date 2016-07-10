<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lead-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-raised btn-success' : 'btn btn-raised btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
