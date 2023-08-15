<?php

namespace Hlowd\Base\Comm;

use Exception;


class Facade
{
    protected static function getAccessor():string{
        return '';
    }

    protected static function getInstance(string $nam){
        if(!isset(Container::$box[$nam])){
            Container::$box[$nam] = new $nam();
        }
        return Container::$box[$nam];
    }

    /**
     * @throws Exception
     */
    protected static function __callStatic($method, $args)
    {
        $accessor = static::getAccessor();
        if(!$accessor){
            throw new Exception("子类必须具体实现getAccessor方法");
        }
        $instance = static::getInstance($accessor);//static::class);
        if (! $instance) {
            throw new Exception('err');
        }
        return $instance->$method(...$args);
    }
}
