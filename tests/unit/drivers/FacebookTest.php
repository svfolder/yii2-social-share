<?php
/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2019 Yii Maker
 * @license BSD 3-Clause License
 */

namespace svfolder\social\share\tests\unit\drivers;

use Codeception\Test\Unit;
use Yii;
use svfolder\social\share\drivers\Facebook;

/**
 * Test case for [[Facebook]] driver.
 *
 * @property-read \UnitTester $tester
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.4.0
 */
class FacebookTest extends Unit
{
    public function testRegisteredMetaTags()
    {
        $url = 'http://example.com';
        $title = 'this is title';
        $description = 'this is description';
        $imageUrl = 'http://example.com/image.jpg';

        (new Facebook([
            'url' => $url,
            'title' => $title,
            'description' => $description,
            'imageUrl' => $imageUrl,
            'registerMetaTags' => true,
        ]))->getLink();

        $expected = [
            $this->tester->openGraphMetaTag('og:url', $url),
            $this->tester->openGraphMetaTag('og:type', 'website'),
            $this->tester->openGraphMetaTag('og:title', $title),
            $this->tester->openGraphMetaTag('og:description', $description),
            $this->tester->openGraphMetaTag('og:image', $imageUrl),
        ];

        self::assertEquals($expected, \array_values(Yii::$app->getView()->metaTags));
    }
}
