<?php

namespace Hlowd\Base\Conf;

class LoginConf
{
    const LOGIN_TP_ACCOUNT = 1;
    const LOGIN_TP_MB = 2;
    const LOGIN_TP_EMAIL = 3;
    const LOGIN_TP_WX = 4;
    const LOGIN_TP_WX_MP =5;
    const LOGIN_TP_WX_QY = 6;
    const LOGIN_TP_ORDER = 7;//没有有效的订单,不允许登录,用于封装App

}