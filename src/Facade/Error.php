<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Comm\WebResult;
use Hlowd\Base\Service\ErrorClass;


/**
 * @method static WebResult success(array $data):WebResult
 * @method static WebResult failParameterError()
 * @method static WebResult failNoLogin()
 * @method static WebResult failNoPriv()
 * @method static WebResult failTokenExpire()
 * @method static WebResult failNoOrder()
 * @method static WebResult fail(string $msg)
 *
 */

class Error extends Facade
{

    protected static function getAccessor(): string
    {
        return ErrorClass::class;
    }

}