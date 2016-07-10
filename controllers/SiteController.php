<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Projects;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'graph', 'logout'],
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $total_income = Projects::total_income();
        $total_income_last_month = Projects::total_income_last_month();
        $total_income_month = Projects::total_income_month();
        $total_income_year = Projects::total_income_year();

        return $this->render('index', compact('total_income','total_income_last_month', 'total_income_month','total_income_year'));
    }

    public function actionGraph(){
        
        $type = Yii::$app->request->get('type');

        if($type == 'month') {
            $result = Projects::getMonthGrpah();
        }elseif($type == 'year') {
            $result = Projects::getYearGrpah();
        }else{
            $result = Projects::getDayGrpah();
        }

        \Yii::$app->response->format = 'json';
        return $result;
    }

    public function actionLogin()
    {
        $this->layout = 'guest';

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
