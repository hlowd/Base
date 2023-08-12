<?php

namespace Hlowd\Base\Contracts;

use Hlowd\Base\Comm\WebResult;

interface IError
{

    function success(array $data):WebResult;
    function fail(string $msg):WebResult;
    public function failParameterError():WebResult;
    public function failNoLogin():WebResult;
    public function failNoPriv():WebResult;
    public function failTokenExpire():WebResult;
    public function failNoOrder():WebResult;



}