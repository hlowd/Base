<?php

namespace Hlowd\Base\Service;

use Hlowd\Base\Comm\WebResult;
use Hlowd\Base\Contracts\IError;
use Hlowd\Base\Conf\ErrorConf;

class ErrorClass implements IError
{

    function success(array $data): WebResult
    {
        return $this->getWebResult(ErrorConf::SUCCESS, "成功", $data);
    }

    function fail(string $msg="失败"): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL, $msg);
    }

    function failParameterError(): WebResult
    {
        return $this->fail("参数错误");
    }


    /**
     * @return WebResult 此错误发生后，客户端需要监听错误码，更换access_token
     */
    public function failAccessTokenExpire(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_ACCESS_TOKEN_EXPIRE, "access_token已过期，请及时更换");
    }

    /**
     * @return WebResult 此错误发生后，基本断定已经在其他地方登录，需要跳转到登录
     */
    public function failAccessTokenDeprecated(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_ACCESS_TOKEN_DEPRECATED, "access_token已作废，请重新登陆");
    }


    /**
     * @return WebResult 此错误发生后,表示已掉线，需要重新登录
     */
    public function failRefreshTokenExpire(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_REFRESH_TOKEN_EXPIRE, "refresh_token已过期，请登录");
    }

    /**
     * @return WebResult 此错误发生后，基本断定已经在其他地方登录，需要跳转到登录
     */
    public function failRefreshTokenDeprecated(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_REFRESH_TOKEN_DEPRECATED, "refresh_token已作废，请登录");
    }


    /**
     * @return WebResult 此错误发生，客户端需要记录当前页面，并跳转到登陆
     */
    public function failNoLogin(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_NO_LOGIN, "您还没有登录");
    }

    /**
     * @return WebResult 后台角色错误，一般用于后台系统
     */
    public function failNoPriv(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_NO_PRIV, "您没有权限,请联系管理员开通");
    }


    /**
     * @return WebResult 出现此错误,一般客户端需要跳转到购买页面
     */
    public function failNoRes(): WebResult
    {
        return $this->getWebResult(ErrorConf::FAIL_NO_RES, "您没有相关访问,请购买开通");
    }

    private function getWebResult(int $code,string $msg,array $data = []):WebResult
    {
        return new WebResult($code,$msg,$data);
    }



}