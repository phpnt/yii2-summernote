<?php
/**
 * User: Vladimir Baranov <phpnt@yandex.ru>
 * Git: <https://github.com/phpnt>
 * VK: <https://vk.com/phpnt>
 * Date: 25.01.2019
 * Time: 10:54
 */

namespace phpnt\summernote\assets;

use yii\web\AssetBundle;

class EmojiAsset extends AssetBundle
{
    public function init() {

        parent::init();
    }

    /**
     * @inherit
     */
    public $sourcePath = '@phpnt/summernote/emoji';

    /**
     * @inherit
     */
    public $css = [
        'css/emoji.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/config.js',
    ];
}