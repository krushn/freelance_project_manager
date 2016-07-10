<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectTasks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn-raised btn btn-success' : 'btn btn-primary btn-raised']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php $this->registerJs("
$(document).ready(function(){
    $('#projecttasks-end_time, #projecttasks-start_time').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'
    });
});");
?>

<style>
    .form-control, .form-group{
        position: relative;
    }
</style>