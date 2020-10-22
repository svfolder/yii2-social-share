<?php
/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2019 Yii Maker
 * @license BSD 3-Clause License
 */

namespace svfolder\social\share\tests\unit\drivers;

use Codeception\Test\Unit;
use svfolder\social\share\base\AbstractDriver;
use svfolder\social\share\drivers\Odnoklassniki;

/**
 * Test case for [[Odnoklassniki]] driver.
 *
 * @author Petro Sokolnykov <info@xyz.net.ua>
 * @since 2.1
 */
class OdnoklassnikiTest extends Unit
{
    public function testGetLinkWithSiteName()
    {
        $url = 'http://example.com';
        $title = 'this is title';
        $description = 'this is description';
        $imageUrl = 'http://example.com/image.jpg';

        $driver = new Odnoklassniki(\compact('url', 'title', 'description', 'imageUrl'));

        $expected = 'https://connect.ok.ru/offer'
            . '?url=' . AbstractDriver::encodeData($url)
            . '&title=' . AbstractDriver::encodeData($title)
            . '&description=' . AbstractDriver::encodeData($description)
            . '&imageUrl=' . AbstractDriver::encodeData($imageUrl);

        self::assertEquals($expected, $driver->getLink());
    }
}
