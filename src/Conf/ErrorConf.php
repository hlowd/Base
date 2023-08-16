<?php

namespace Hlowd\Base\Conf;

class ErrorConf
{
    /**
     * @doc 0表示成功
     */
    const SUCCESS = 0;


    /**
     * @doc 可以直接弹窗的错误，即只用通知，不需要客户端识别的错误
     */
    const FAIL = 10;

    /**
     * @doc 20-29 token相关错误码
     */
    const FAIL_ACCESS_TOKEN_EXPIRE = 22;
    const FAIL_ACCESS_TOKEN_DEPRECATED = 23;
    const FAIL_REFRESH_TOKEN_EXPIRE = 22;
    const FAIL_REFRESH_TOKEN_DEPRECATED = 23;

    /**
     * @doc 31-39 权限相关
     */

    const FAIL_NO_LOGIN = 31;
    const FAIL_NO_RES =32;
    const FAIL_NO_PRIV =32;
}