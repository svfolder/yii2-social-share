<?php
/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2019 Yii Maker
 * @license BSD 3-Clause License
 */

namespace svfolder\social\share\tests\unit\drivers;

use Codeception\Test\Unit;
use Yii;
use svfolder\social\share\base\AbstractDriver;
use svfolder\social\share\drivers\Twitter;

/**
 * Test case for [[Twitter]] driver.
 *
 * @property-read \UnitTester $tester
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.4.0
 */
class TwitterTest extends Unit
{
    public function testGetLinkWithAccount()
    {
        $account = 'tester';
        $url = 'http://example.com';
        $description = 'this is description';

        $driver = new Twitter(\compact('account', 'url', 'description'));

        $expected = 'http://twitter.com/share'
            . '?url=' . AbstractDriver::encodeData($url)
            . '&text=' . AbstractDriver::encodeData($description)
            . '&via=' . AbstractDriver::encodeData($account);

        self::assertEquals($expected, $driver->getLink());
    }

    public function testRegisteredMetaTags()
    {
        $title = 'this is title';
        $description = 'this is description';
        $imageUrl = 'this is image url';

        (new Twitter([
            'title' => $title,
            'description' => $description,
            'imageUrl' => $imageUrl,
            'registerMetaTags' => true,
        ]))->getLink();

        $expected = [
            $this->tester->metaTag('twitter:card', 'summary_large_image'),
            $this->tester->metaTag('twitter:title', $title),
            $this->tester->metaTag('twitter:description', $description),
            $this->tester->metaTag('twitter:image', $imageUrl),
        ];

        self::assertEquals($expected, \array_values(Yii::$app->getView()->metaTags));
    }
}
