<?php
namespace xPDO\Test\Sample;

use xPDO\xPDO;

/**
 * Class SecureObject
 *
 *
 * @package xPDO\Test\Sample
 */
class SecureObject extends \xPDO\Om\xPDOSimpleObject implements Secure
{
    public function isSecure()
    {
        return true;
    }
}
