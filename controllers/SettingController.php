<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\models\UploadForm;
use yii\web\UploadedFile;

class SettingController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        //'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        $model = User::findOne(Yii::$app->user->id);

        return $this->render('index', compact('model'));
    }

    public function actionProfile()
    {
        $user = Yii::$app->request->post('User');

        Yii::$app->db->createCommand()->update('user',
            [
                'email' => $user['email'],
                'username' =>$user['username']
            ], 
            'id = '. Yii::$app->user->id
        )->execute();

        //upload file 
        if (Yii::$app->request->isPost) {
            $model = new UploadForm();

            $model->avatar = UploadedFile::getInstance($model, 'avatar');

            if ($model->upload()) {

                Yii::$app->db->createCommand()->update('user',
                    [
                        'avatar' => $model->avatar
                    ], 
                    'id = '. Yii::$app->user->id
                )->execute();
            }
        }

        Yii::$app->session->setFlash('ProfileUpdated');

        return $this->redirect(['index']);
    }

    public function actionPassword()
    {
        $request = Yii::$app->request;

        $password = $request->post('password');
        $confirm_password = $request->post('confirm_password');

        if($password == $confirm_password){
                
            Yii::$app->db->createCommand()->update('user', ['password' => sha1($password)], 'id = '. Yii::$app->user->id)->execute();

            Yii::$app->session->setFlash('PasswordChanged');
        }else{
            Yii::$app->session->setFlash('PasswordNotMatched');
        }

        return $this->redirect(['index']);
    }
}
