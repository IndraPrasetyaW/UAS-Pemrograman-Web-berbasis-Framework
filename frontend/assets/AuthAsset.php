<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
     'template/assets/compiled/css/app.css',
   'template/assets/compiled/css/app-dark.css',
   'template/assets/compiled/css/auth.css',
    ];
    public $js = [
         'template/assets/static/js/components/dark.js',
        'template/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js',  
        'template/assets/compiled/js/app.js',
        'template/assets/extensions/apexcharts/apexcharts.min.js',
        'template/assets/static/js/pages/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
