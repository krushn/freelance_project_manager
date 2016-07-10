<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="row">
    <div class="col-md-4 col-md-offset-4">

        <?php $form = ActiveForm::begin([
            'id' => 'validate-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "<div class=\"col-xs-12\">{input}</div>\n<div class=\"col-xs-12\">{error}</div>"
            ],
        ]); ?>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><?= Html::encode($this->title) ?></h2>
            </div>
            <div class="panel-body">

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>

            </div>
            <div class="panel-footer">
                <div class="clearfix">
                               
                    <div class="checkbox checkbox-inline pull-left p-n">
                        <label for="loginform-rememberme">
                           <input type="hidden" name="LoginForm[rememberMe]" value="0">
                           <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked=""> 
                           Remeber me
                        </label>
                    </div>
                    
                    <button name="login-button" class="btn btn-primary btn-raised pull-right">Login</button>
                </div>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
