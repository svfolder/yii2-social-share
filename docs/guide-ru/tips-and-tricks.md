Советы и фичи
=============

## Использование HTML контента вместо текстовых лэйблов

```php
'components' => [
    // ...
    'socialShare' => [
        'class' => \svfolder\social\share\configurators\Configurator::class,
        'socialNetworks' => [
            'facebook' => [
                'class' => \svfolder\social\share\drivers\Facebook::class,
                'label' => \yii\helpers\Html::tag('i', '', ['class' => 'icon-fb']),
            ],
            // ...
        ],
    ],
],
```

## Переводы для текстовых лэйблов

```php
'components' => [
    // ...
    'socialShare' => [
        'class' => \svfolder\social\share\configurators\Configurator::class,
        'socialNetworks' => [
            'facebook' => [
                'class' => \svfolder\social\share\drivers\Facebook::class,
                'label' => Yii::t('app', 'Facebook'),
            ],
            // ...
        ],
    ],
],
```

Переопределиние иконки в стандартном наборе иконок
--------------------------------------------------

В этом примере для Facebook будет использоваться CSS класс `my-facebook-icon`.
Для остальных социальных сетей будут использоваться стандартные иконки.

```php
'components' => [
    // ...
    'socialShare' => [
        'class' => \svfolder\social\share\configurators\Configurator::class,
        'enableIcons' => true,
        'icons' => [
            \svfolder\social\share\drivers\Facebook::class => 'my-facebook-icon',
        ],
    ],
],
```

## Использование разных социальных сетей на разных страницах

Настройте несколько компонентов в конфигурации приложения

```php
'components' => [
    // ...
    'socialShareBlog' => [
        'class' => \svfolder\social\share\configurators\Configurator::class,
        'socialNetworks' => [
            'facebook' => [
                'class' => \svfolder\social\share\drivers\Facebook::class,
                'label' => Yii::t('app', 'Facebook'),
            ],
            'twitter' => [
                'class' => \svfolder\social\share\drivers\Twitter::class,
                'label' => Yii::t('app', 'Twitter'),
            ],
            'googlePlus' => [
                'class' => \svfolder\social\share\drivers\GooglePlus::class,
                'label' => Yii::t('app', '+Google'),
            ],
        ],
    ],
    'socialShareMessangers', => [
        'class' => \svfolder\social\share\configurators\Configurator::class,
        'socialNetworks' => [
            'telegram' => [
                'class' => \svfolder\social\share\drivers\other\Telegram::class,
                'label' => Yii::t('app', 'Telegram'),
            ],
            'viber' => [
                'class' => \svfolder\social\share\drivers\other\mobile\Viber::class,
                'label' => Yii::t('app', 'Viber'),
            ],
            'whatsApp' => [
                'class' => \svfolder\social\share\drivers\other\mobile\WhatsApp::class,
                'label' => Yii::t('app', 'Whats app'),
            ],
        ],
    ],
],
```

Вызовите виджет с нужным компонентом в файлах представления

```php
// blog-article.php файл представления

<?= \svfolder\social\share\widgets\SocialShare::widget([
    'configurator'  => 'socialShareBlog', // ID нужного компонента
    'url'           => \yii\helpers\Url::to('/blog', true),
    'title'         => 'Blog page',
    'description'   => 'This is blog page',
    'imageUrl'      => \yii\helpers\Url::to('/images/blog.png', true),
]); ?>
```

```php
// main.php лэйаут файл

<?= \svfolder\social\share\widgets\SocialShare::widget([
    'configurator'  => 'socialShareMessangers', // ID нужного компонента
    'url'           => \yii\helpers\Url::to('/', true),
    'title'         => 'Site name',
    'description'   => 'Welcome to my site!',
    'imageUrl'      => \yii\helpers\Url::to('/images/hello.png', true),
]); ?>
```
