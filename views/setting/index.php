<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-heading">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="container-fluid">

    <?php if (Yii::$app->session->hasFlash('ProfileUpdated')){ ?>
        <div class="alert alert-success">
            Success: Profile Updated successfully!
        </div>
    <?php } ?>

    <?php if (Yii::$app->session->hasFlash('PasswordChanged')){ ?>
        <div class="alert alert-success">
            Success: Password changed successfully!
        </div>
    <?php } ?>

    <?php if (Yii::$app->session->hasFlash('PasswordNotMatched')){ ?>
        <div class="alert alert-danger">
            Error: Password and confirm password did not matched!
        </div>
    <?php } ?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
		            <h2 class="panel-title">
		                Profile
		            </h2>
                </div>
                <div class="panel-body">  

                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => ['setting/profile']]); ?>

                    <?= $form->field($model, 'username')->textInput() ?>

                    <?= $form->field($model, 'email')->textInput() ?>

                    <div class="form-group">
                        <label class="control-label">Avatar</label>
                        <div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"><img src="<?= Url::to('@web/../upload/'.$model->avatar) ?>" /></div>
                            <div>
                                <!--
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                -->
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="UploadForm[avatar]"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Update', ['class' => 'btn-raised btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        Password
                    </h2>
                </div>
                <div class="panel-body"> 

                    <?php $form = ActiveForm::begin(['action' => ['setting/password']]); ?>

                    <div class="form-group field-user-password required">
                        <label class="control-label" for="user-password">Password</label>
                        <input required="" type="password" id="user-password" class="form-control" name="password" value="">
                        <div class="help-block"></div>
                    </div>

                    <div class="form-group field-user-password required">
                        <label class="control-label" for="user-password">Confirm Password</label>
                        <input required="" type="password" id="user-password" class="form-control" name="confirm_password" value="">
                        <div class="help-block"></div>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Update', ['class' => 'btn-raised btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>



