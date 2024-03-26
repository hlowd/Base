<?php

namespace Hlowd\Base\Conf;

class ActConf
{

    const ACT_INSERT = 1;
    const ACT_UPDATE = 2;
    const ACT_DELETE = 3;
    const ACT_SORT = 4; //改变顺序

    const ACT_ACTIVE = 5;//激活条目:

    const ACT_START =6;
    const ACT_STOP = 7;
    const ACT_RESTART = 8;
    const ACT_SUBMIT = 10;
    const ACT_PASS = 11;
    const ACT_REJECT = 12;
}