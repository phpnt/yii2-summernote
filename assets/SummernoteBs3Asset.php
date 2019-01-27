<?php
/**
 * User: Vladimir Baranov <phpnt@yandex.ru>
 * Git: <https://github.com/phpnt>
 * VK: <https://vk.com/phpnt>
 * Date: 24.01.2019
 * Time: 16:32
 */

namespace phpnt\summernote\assets;

use yii\web\AssetBundle;

class SummernoteBs3Asset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/summernote';

    /**
     * @inherit
     */
    public $css = [
        'dist/summernote.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/summernote.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'phpnt\fontAwesome\FontAwesomeAsset',
    ];
}