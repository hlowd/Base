<?php

namespace Hlowd\Base\Facade;

use Hlowd\Base\Comm\Facade;
use Hlowd\Base\Service\CommClass;

/**
 * @method static array redisHashMapDecode(array $redisHashMap):array
 * @method static array redisHashMapEncode(array $rs):array
 * @method static array pager(int $totalCount,array $list,int $pageNum,int $pageSize):array
 * @method static bool isHz(int $deleId):bool
 */


class Comm extends Facade
{
    protected static function getAccessor(): string
    {
        return CommClass::class;
    }

}