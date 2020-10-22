Установка
=========

## Получение с помощью Composer

Предпочтительный способ установки расширения через [composer](http://getcomposer.org/download/).

Для этого запустите

```
$ composer require yiimaker/yii2-social-share
```

или добавьте

```
"yiimaker/yii2-social-share": "~2.3"
```

в секцию `require` вашего `composer.json`.

## Настройка приложения

Для использования расширения, просто добавьте этот код в конфигурацию вашего приложения:

```php
'components' => [
    // ...
    'socialShare' => [
        'class' => \svfolder\social\share\configurators\Configurator::class,
        'socialNetworks' => [
            'facebook' => [
                'class' => \svfolder\social\share\drivers\Facebook::class,
                'label' => Yii::t('app', 'Facebook'),
                'options' => ['class' => 'fb'],
            ],
            'twitter' => [
                'class' => \svfolder\social\share\drivers\Twitter::class,
                'label' => Yii::t('app', 'Twitter'),
                'options' => ['class' => 'tw'],
                'config' => [
                    'account' => $params['twitterAccount']
                ],
            ],
            'googlePlus' => [
                'class' => \svfolder\social\share\drivers\GooglePlus::class,
                'label' => Yii::t('app', '+Google'),
                'options' => ['class' => 'gp'],
            ],
            // ...
        ],
        'options' => [
            'class' => 'social-network',
        ],
    ],
],
```
