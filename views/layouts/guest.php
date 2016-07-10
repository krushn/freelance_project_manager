<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

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

<?php $this->beginBody() ?>

<body class="focused-form animated-content">
                
<div class="container" id="login-form">
    <a href="<?php echo Url::base(); ?>" class="login-logo">
        <h3 style="text-align: center;"><i>Smart Developers</i></h3>
    </a>       
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</div>
<div class="extrabar-underlay"></div>
</div>
</div>

</div>

</body>
</html>
<?php $this->endPage() ?>

