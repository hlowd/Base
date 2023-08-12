<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Comm\WebResult;
use Hlowd\Base\Service\ErrorClass;

class Error extends Facade
{

    /**
     * @method static WebResult success(array $data)
     * @method static WebResult failParameterError()
     * @method static WebResult failNoLogin()
     * @method static WebResult failNoPriv()
     * @method static WebResult failTokenExpire()
     * @method static WebResult failNoOrder()
     * @method static WebResult fail(string $msg)
     *
     */

    protected static function getAccessor(): string
    {
        return ErrorClass::class;
    }

}