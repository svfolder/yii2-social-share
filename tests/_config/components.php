<?php

use svfolder\social\share\configurators\Configurator;

$drivers = [
    'vkontakte' => [
        'class' => \svfolder\social\share\drivers\Vkontakte::class,
    ],
    'facebook' => [
        'class' => \svfolder\social\share\drivers\Facebook::class,
    ],
    'twitter' => [
        'class' => \svfolder\social\share\drivers\Twitter::class,
    ],
    'googlePlus' => [
        'class' => \svfolder\social\share\drivers\GooglePlus::class,
    ],
    'linkedin' => [
        'class' => \svfolder\social\share\drivers\LinkedIn::class,
    ],
    'pinterest' => [
        'class' => \svfolder\social\share\drivers\Pinterest::class,
    ],
    'telegram' => [
        'class' => \svfolder\social\share\drivers\Telegram::class,
    ],
    'viber' => [
        'class' => \svfolder\social\share\drivers\Viber::class,
    ],
    'whatsApp' => [
        'class' => \svfolder\social\share\drivers\WhatsApp::class,
    ],
    'gmail' => [
        'class' => \svfolder\social\share\drivers\Gmail::class,
    ],
    'tumblr' => [
        'class' => \svfolder\social\share\drivers\Tumblr::class,
    ],
    'yahoo' => [
        'class' => \svfolder\social\share\drivers\Yahoo::class,
    ],
    'odnoklassniki' => [
        'class' => \svfolder\social\share\drivers\Odnoklassniki::class,
    ],
    'trello' => [
        'class' => \svfolder\social\share\drivers\Trello::class,
    ],
];

return [
    'defaultConfig' => [
        'class' => Configurator::class,
        'socialNetworks' => $drivers,
    ],
    'defaultIcons' => [
        'class' => Configurator::class,
        'enableIcons' => true,
        'socialNetworks' => $drivers
    ],
    'disableMetaTags' => [
        'class' => Configurator::class,
        'registerMetaTags' => false,
    ],
];
