phpNT - Yii2 Summernote
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-summernote/v/stable)](https://packagist.org/packages/phpnt/yii2-summernote) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-summernote/downloads)](https://packagist.org/packages/phpnt/yii2-summernote) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-summernote/v/unstable)](https://packagist.org/packages/phpnt/yii2-summernote) [![License](https://poser.pugx.org/phpnt/yii2-summernote/license)](https://packagist.org/packages/phpnt/yii2-summernote)
### Описание:
### Отличный WYSIWYG редактор с возможностью добавления смайлов.

![alt text](http://screenshot.ru/3e09e3639c52453261a423063f640354.png)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-summernote" "*"
```
или

```
composer require phpnt/yii2-summernote
```

или добавить в composer.json файл

```
"phpnt/yii2-summernote": "*"
```

### Представление:
------------
```php
<?php
use phpnt\summernote\SummernoteWidget;
?>
```
```html
<?php $form = ActiveForm::begin(); ?>
 <?= $form->field($modelCommentForm, 'text')->widget(SummernoteWidget::class,[
                'options' => [
                    'id' => 'summernote-id'
                ],
                'i18n' => true,             // переводить на другие языки
                'codemirror' => true,       // использовать CodeMirror (оформленный редактор кода)
                'emoji' => true,             // включить эмоджи
                'widgetOptions' => [
                    /* Настройка панели */
                    'placeholder' => Yii::t('app', 'Ваш комментарий.'),
                    'height' => 200,
                    'tabsize' => 2,
                    'minHeight' => 200,
                    'maxHeight' => 200,
                    'focus' => true,
                    /* Панель управления */
                    'toolbar' => [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['paragraph']],
                        ['height', ['height']],
                        ['misc', ['codeview']],
                    ],
                ],
            ])->label(false); ?>
<?php ActiveForm::end(); ?>
```
------------
# Документация (примеры):
## [Summernote](https://summernote.org/)
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
