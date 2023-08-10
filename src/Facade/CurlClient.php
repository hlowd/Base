<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Service\CurlClientClass;

class CurlClient extends Facade
{
    /**
     * @method static array getJson(string $url,array $param)
     * @method static array postJson(string $url,array $param)
     */


    public static function getAccessor(): string
    {
        return CurlClientClass::class;
    }


}