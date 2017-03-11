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
    ];
    
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}