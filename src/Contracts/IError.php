<?php

namespace Hlowd\Base\Contracts;

use Hlowd\Base\Comm\WebResult;

interface IError
{

    function success(array $data):WebResult;
    function fail(string $msg):WebResult;
    public function failParameterError():WebResult;

    public function failAccessTokenExpire():WebResult;
    public function failAccessTokenDeprecated():WebResult;
    public function failRefreshTokenExpire():WebResult;
    public function failRefreshTokenDeprecated():WebResult;

    public function failNoLogin():WebResult;
    public function failNoRes():WebResult;
    public function failNoPriv():WebResult;



}