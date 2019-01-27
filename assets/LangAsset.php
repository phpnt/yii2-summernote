<?php
/**
 * User: Vladimir Baranov <phpnt@yandex.ru>
 * Git: <https://github.com/phpnt>
 * VK: <https://vk.com/phpnt>
 * Date: 26.01.2019
 * Time: 18:33
 */

namespace phpnt\summernote\assets;

use Yii;
use yii\web\AssetBundle;

class LangAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/summernote';

    public function init()
    {
        parent::init();

        if (Yii::$app->language != 'en') {
            $lang = Yii::$app->language . '-' . strtoupper(Yii::$app->language);
            $this->js = [
                'dist/lang/summernote-' . $lang . '.js'
            ];
        }
    }

    public $depends = [
        'yii\web\YiiAsset',
    ];
}