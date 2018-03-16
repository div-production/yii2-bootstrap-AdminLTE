<?php

namespace cszchen\alte;

use yii\web\AssetBundle;

class AlteAsset extends AssetBundle
{
    public $js = [
        'js/jquery.slimscroll.min.js',
        'js/app.js'
    ];
    
    public $css = [
        'css/font-awesome.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
}
