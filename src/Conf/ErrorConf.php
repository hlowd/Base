<?php

namespace Hlowd\Base\Conf;

class ErrorConf
{
    const SUCCESS = 0;
    const FAIL = 1;
    const FAIL_PARAM_ERROR = 2;
    const FAIL_TOKEN_OBSOLETE = 3;
    const FAIL_NO_PRIV = 4;
    const FAIL_HAS_LOGOUT = 5;
    const FAIL_NO_ORDER = 6;
}