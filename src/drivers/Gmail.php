<?php
/**
 * @link https://github.com/yiimaker/yii2-social-share
 * @copyright Copyright (c) 2017-2019 Yii Maker
 * @license BSD 3-Clause License
 */

namespace svfolder\social\share\drivers;

use svfolder\social\share\base\AbstractMailDriver;

/**
 * Driver for Gmail.
 *
 * @link https://gmail.google.com
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class Gmail extends AbstractMailDriver
{
    /**
     * {@inheritdoc}
     */
    protected function buildLink()
    {
        return 'https://mail.google.com/mail/?view=cm&fs=1&su={title}&body={body}';
    }
}
