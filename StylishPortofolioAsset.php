<?php
namespace hoaaah\stylish;

use yii\web\AssetBundle;

/**
 * sb-StylishPortofolio AssetBundle
 */
class StylishPortofolioAsset extends AssetBundle
{
    public $sourcePath='@vendor/hoaaah/yii2-startbootstrap-stylish-portfolio/assets';
    public $baseUrl = '@web';
    
    public $css=[
        'css/stylish-portfolio.css',
        'font-awesome/css/font-awesome.min.css',
    ];
    
    public $js=[
        'js/jquery-1.11.0.js',
        'js/stylish-portfolio.js',
    ];
    
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}