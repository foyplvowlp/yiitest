<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ModernaAsset extends AssetBundle
{
    public $sourcePath = '@themes/moderna';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/custom-fonts.css',
        'css/flexslider.css',
        'css/font-awesome.css',
        'css/overwrite.css',
        'css/style.css',
    ];
    public $js = [
        'js/animate.js',
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox-media.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.flexslider.js',
        'js/jquery.js',
        'js/validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
