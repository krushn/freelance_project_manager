<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Heru Arief Wijaya <hoaaah.arief@gmail.com>
 */
class MorrisAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'js/morris/morris.css'
    ];
           
    public $js = [
        'js/morris/raphael-min.js',
        'js/morris/morris.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];    
}
