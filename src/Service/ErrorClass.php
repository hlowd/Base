<?php

namespace Hlowd\Base\Service;

use Hlowd\Base\Comm\WebResult;
use Hlowd\Base\Contracts\IError;

class ErrorClass implements IError
{

    function success(array|object $data): WebResult
    {
        return $this->getWebResult(self::SUCCESS, "成功", $data);
    }


    public function failParameterError(): WebResult
    {
        return $this->getWebResult(self::FAIL_PARAM_ERROR, "参数错误");

    }

    public function failNoLogin(): WebResult
    {
        return $this->getWebResult(self::FAIL_HAS_LOGOUT, "请登录");
    }

    public function failNoPriv(): WebResult
    {
        return $this->getWebResult(self::FAIL_NO_PRIV, "您没有权限");
    }

    public function failTokenExpire(): WebResult
    {
        return $this->getWebResult(self::FAIL_TOKEN_OBSOLETE, "已过期，请重新登录");
    }

    public function failNoOrder(): WebResult
    {
        return $this->getWebResult(self::FAIL_NO_ORDER, "已过期，请重新登录");
    }

    private function getWebResult(int $code,string $msg,array|object|null $data = null):WebResult
    {
        return new WebResult($code,$msg,$data);
    }

    function fail(string $msg): WebResult
    {
        return $this->getWebResult(self::FAIL, $msg);
    }
}