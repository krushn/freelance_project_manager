<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Hourly' => 'Hourly', 'Fixed' => 'Fixed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Processing' => 'Processing', 'Complete' => 'Complete', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-raised  btn-success' : 'btn-raised btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php $this->registerJs("
$(document).ready(function(){

    $('#projects-type').change(function(){
      if($(this).val() == 'Hourly') {
          $('.field-projects-rate').show();
          $('.field-projects-amount').hide();
      } else{
          $('.field-projects-rate').hide();
          $('.field-projects-amount').show();
      }
    });

    $('#projects-type').trigger('change');
});");

?>
    