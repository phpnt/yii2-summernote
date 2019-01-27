<?php
/**
 * User: Vladimir Baranov <phpnt@yandex.ru>
 * Git: <https://github.com/phpnt>
 * VK: <https://vk.com/phpnt>
 * Date: 26.01.2019
 * Time: 17:26
 */

namespace phpnt\summernote\assets;

use yii\web\AssetBundle;

class SummernoteLiteAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/summernote';

    /**
     * @inherit
     */
    public $css = [
        'dist/summernote-lite.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/summernote-lite.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'phpnt\fontAwesome\FontAwesomeAsset',
    ];
}