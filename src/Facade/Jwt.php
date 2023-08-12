<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Service\JwtClass;

class Jwt extends Facade
{
    protected static function getAccessor(): string
    {
        return JwtClass::class;
    }

}