<?php

namespace Hlowd\Base\Contracts;

use Hlowd\Base\Comm\WebResult;

interface IError
{
    const SUCCESS = 0;
    const FAIL = 1;
    const FAIL_PARAM_ERROR = 2;
    const FAIL_TOKEN_OBSOLETE = 3;
    const FAIL_NO_PRIV = 4;
    const FAIL_HAS_LOGOUT = 5;
    const FAIL_NO_ORDER = 6;

    function success(array $data):WebResult;
    function fail(string $msg):WebResult;
    public function failParameterError():WebResult;
    public function failNoLogin():WebResult;
    public function failNoPriv():WebResult;
    public function failTokenExpire():WebResult;
    public function failNoOrder():WebResult;



}