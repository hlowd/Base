<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Service\ValidatorClass;

/**
 * @method static bool isMobile(string $str)
 * @method static bool isPassword(string $str)
 * @method static bool isEmail(string $str)
 * @method static bool isSms(string $str)
 * @method static bool isIdNum(string $str)
 */


class Validator extends Facade
{


    protected static function getAccessor(): string
    {
        return ValidatorClass::class;
    }


}