<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Comm\WebResult;
use Hlowd\Base\Service\ErrorClass;


/**
 * @method static WebResult success(array $data):WebResult
 * @method static WebResult fail(string $msg)
 * @method static WebResult failParameterError()
 * @method static WebResult failAccessTokenExpire()
 * @method static WebResult failAccessTokenDeprecated()
 * @method static WebResult failRefreshTokenExpire()
 * @method static WebResult failRefreshTokenDeprecated()
 *
 * @method static WebResult failNoLogin()
 * @method static WebResult failNoRes()
 * @method static WebResult failNoPriv()
 *
 */


class Error extends Facade
{

    protected static function getAccessor(): string
    {
        return ErrorClass::class;
    }

}