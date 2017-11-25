<p align="center">
    <a href="https://github.com/yiimaker" target="_blank">
        <img src="https://avatars1.githubusercontent.com/u/24204902" height="100px">
    </a>
    <h1 align="center">Extension for sharing on social networks</h1>
</p>

[![Build Status](https://travis-ci.org/yiimaker/yii2-social-share.svg?branch=master)](https://travis-ci.org/yiimaker/yii2-social-share)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yiimaker/yii2-social-share/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yiimaker/yii2-social-share/?branch=master)
[![Monthly Downloads](https://poser.pugx.org/yiimaker/yii2-social-share/d/monthly)](https://packagist.org/packages/yiimaker/yii2-social-share)
[![Latest Stable Version](https://poser.pugx.org/yiimaker/yii2-social-share/v/stable)](https://packagist.org/packages/yiimaker/yii2-social-share)
[![Latest Unstable Version](https://poser.pugx.org/yiimaker/yii2-social-share/v/unstable)](https://packagist.org/packages/yiimaker/yii2-social-share)

With this extension you can share data from your web pages to any social network!
Features: SEO support, default icons for social networks, easy creation of custom drivers
for other social networks and more!

Extension supports from the box next social network drivers:

* [Vkontakte](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/Vkontakte.php)
* [Facebook](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/Facebook.php)
* [Twitter](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/Twitter.php)
* [+Google](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/GooglePlus.php)
* [LinkedIn](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/LinkedIn.php)
* [Pinterest](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/Pinterest.php)
* [Tumblr](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/Tumblr.php)

and drivers for messengers:
* [Telegram](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/other/Telegram.php)
* [Viber](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/other/mobile/Viber.php)
* [WhatsApp](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/other/mobile/WhatsApp.php)

other drivers:
* [Gmail](https://github.com/yiimaker/yii2-social-share/blob/master/src/drivers/other/Gmail.php)

also you can [create](docs/en/advanced-usage.md#2-create-my-social-network-driver) your driver, it's very simple!

Installation
------------

#### Install package

Run command
```
$ composer require yiimaker/yii2-social-share
```

or add
```json
"yiimaker/yii2-social-share": "~1.0"
```
to the require section of your `composer.json` file.

Usage
-----
* [(EN) Basic usage](docs/en/basic-usage.md)
* [(RU) Базовое использование](docs/ru/basic-usage.md)
* [(EN) Advanced usage](docs/en/advanced-usage.md)
* [(RU) Продвинутое использование](docs/ru/advanced-usage.md)
* [(EN) Tips and tricks](docs/en/tips-and-tricks.md)
* [(RU) Советы и фичи](docs/ru/tips-and-tricks.md)

Tests
-----
You can run tests with composer command

```bash
$ composer test
```

or using following command

```bash
$ codecept build && codecept run
```

License
-------
[![License](https://poser.pugx.org/yiimaker/yii2-social-share/license)](https://packagist.org/packages/yiimaker/yii2-social-share)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2017, Yii Maker
