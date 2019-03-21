<?php
namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Heru Arief Wijaya <hoaaah.arief@gmail.com>
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init() {
        $this->jsOptions['position'] = View::POS_END;
        parent::init();
    }    

    public $css = [
        // 'js/morris/morris.css'
    ];
           
    public $js = [
        // 'js/morris/raphael-min.js',
        // 'js/morris/morris.min.js',
        'js/dashboard.js',
    ];

    public $depends = [
        'app\assets\MorrisAsset'
    ];    
}
