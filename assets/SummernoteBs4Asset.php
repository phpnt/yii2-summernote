<?php
/**
 * User: Vladimir Baranov <phpnt@yandex.ru>
 * Git: <https://github.com/phpnt>
 * VK: <https://vk.com/phpnt>
 * Date: 26.01.2019
 * Time: 17:25
 */

namespace phpnt\summernote\assets;

use yii\web\AssetBundle;

class SummernoteBs4Asset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/summernote';

    /**
     * @inherit
     */
    public $css = [
        'dist/summernote-bs4.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/summernote-bs4.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'phpnt\fontAwesome\FontAwesomeAsset',
    ];
}
