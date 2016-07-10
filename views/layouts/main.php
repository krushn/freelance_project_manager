<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use app\models\User;
use app\components\Navigation;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

AppAsset::register($this);

$user = User::findOne(Yii::$app->user->id);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="animated-content infobar-overlay">

    <?php $this->beginBody() ?>

    <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
    <!-- <div id="page-progress-loader" class="show"></div> -->

    <div class="logo-area">
        <a class="navbar-brand navbar-brand-primary" href="<?php Url::base(); ?>">
            <h3 style="color: white; text-align: center;"><i>Smart Developers</i></h3>
        </a>

        <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
            <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                <span class="icon-bg">
                    <i class="material-icons">menu</i>
                </span>
            </a>
        </span>
    </div><!-- logo-area -->

    <ul class="nav navbar-nav toolbar pull-right">

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg">
                <i class="material-icons">fullscreen</i>
            </span></i></a>
        </li>

        <li class="toolbar-icon-bg">
            <a href="<?= Url::to(['setting/index']); ?>">
                <span class="icon-bg pull-left">
                    <i class="material-icons">settings</i>
                </span>
            </a>
        </li>

        <li class="toolbar-icon-bg">
            <a href="<?= Url::to(['site/logout'], true); ?>">
                <span class="icon-bg pull-left">
                    <i class="material-icons">power_settings_new</i>
                </span>
            </a>
        </li>
    </ul>

</header>

<div id="wrapper">
    <div id="layout-static">
    <div class="static-sidebar-wrapper sidebar-blue">
    <div class="static-sidebar">
    <div class="sidebar">

    <div class="widget" id="widget-profileinfo">
        <div class="widget-body">
            <div class="userinfo ">
                <div class="avatar pull-left">
                    <img src="<?= Url::to('@web/../upload/'.$user->avatar, true); ?>" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username"><?= $user->username; ?></span>
                    <span class="useremail"><?= $user->email ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="widget stay-on-collapse" id="widget-sidebar">

        <nav role="navigation" class="widget-body">

            <?php 

            $route = Yii::$app->controller->getRoute();

            echo Navigation::widget([//igation
                'options' => ['class' => 'acc-menu'],
                'encodeLabels' => false,
             //  'submenuOptions' => ['class' => 'acc-menu'],
                'items' => [
                    [
                        'label' => '<span class="icon"><i class="material-icons">home</i></span><span>Dashboard</span>', 
                        'url' => ['/site/index'],
                        'linkOptions' => ['class' => 'withripple']
                    ],                    
                    [
                        'label' => '<span class="icon"><i class="material-icons">widgets</i></span><span>Projects</span>', 
                        'url' => ['/projects/index'],
                        'active' => in_array($route, ['projects/view', 'projects/index', 'projects/create', 'projects/update']),
                        'linkOptions' => ['class' => 'withripple']
                    ],
                    [
                        'label' => '<span class="icon"><i class="material-icons">view_comfy</i></span><span>Project Tasks</span>', 
                        'linkOptions' => ['class' => 'withripple'],
                        'active' => in_array($route, ['project_tasks/view', 'project_tasks/index', 'project_tasks/create', 'project_tasks/update']),
                        'url' => ['/project_tasks/index']
                    ],
                    [
                        'label' => '<span class="icon"><i class="material-icons">public</i></span><span>Marketing</span>', 
                        'linkOptions' => ['class' => 'hasChild withripple'],
                        'active' => in_array($route, ['lead/view', 'lead/index', 'lead/create', 'lead/update', 'customer/view', 'customer/index', 'customer/create', 'customer/update']),
                        'items' => [
                            ['label' => 'Customer', 'url' => ['/customer/index']],
                            ['label' => 'Lead', 'url' => ['/lead/index']],
                        ]    
                    ],
                    [
                        'label' => '<span class="icon"><i class="material-icons">vpn_key</i></span><span>Password</span>', 
                        'url' => ['/password'],
                        'active' => in_array($route, ['password/index', 'password/view', 'password/create', 'password/update']),
                        'linkOptions' => ['class' => 'withripple']
                    ],
                    [
                        'label' => '<span class="icon"><i class="material-icons">note</i></span><span>Note</span>', 
                        'url' => ['/note'],
                        'active' => in_array($route, ['note/view', 'note/index', 'note/create', 'note/update']),
                        'linkOptions' => ['class' => 'withripple']
                    ]
                ],
            ]);

            ?>    
        </nav>

        </div>
    </div>
</div>
</div>
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= $content ?>
        </div> <!-- #page-content -->
    </div>
    <footer role="contentinfo">
        <p class="pull-left">
            <a target="_blank" href="http://iamkrushn.com">&copy; Smart Developer <?= date('Y') ?></a>
        </p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </footer>
    <?php $this->endBody() ?>
</div>
<div class="extrabar-underlay"></div>
</div>
</div>

</div>

</body>
</html>
<?php $this->endPage() ?>

