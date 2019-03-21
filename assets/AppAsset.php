<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'fonts/font-awesome/css/font-awesome.min.css',
        'css/styles.css',
        'plugins/codeprettifier/prettify.css',
        'plugins/dropdown.js/jquery.dropdown.css',
        'plugins/progress-skylo/skylo.css',
        'js/datetimepicker/css/bootstrap-datetimepicker.min.css',
    ];
           
    public $js = [   
        'plugins/nanoScroller/js/jquery.nanoscroller.min.js',
        'js/enquire.min.js',
        'plugins/velocityjs/velocity.min.js',
        'plugins/velocityjs/velocity.ui.min.js',
        'plugins/progress-skylo/skylo.js',
        'plugins/wijets/wijets.js',
        'plugins/codeprettifier/prettify.js',

        'plugins/form-jasnyupload/fileinput.min.js',
        'plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js',
        'js/jquery-ui/jquery-ui-1.8.23.custom.min.js',
        'plugins/dropdown.js/jquery.dropdown.js',
        'plugins/bootstrap-material-design/js/material.min.js',
        'plugins/bootstrap-material-design/js/ripples.min.js',
        'js/application.js',
        'js/datetimepicker/js/moment.js',
        'js/datetimepicker/js/bootstrap-datetimepicker.min.js',
    ];
    public $depends = [
       'yii\web\YiiAsset',
    //    'yii\bootstrap\BootstrapAsset',
    ];
}
