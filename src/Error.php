<?php

namespace Hlowd\Base;

class Error{
    const SUCCESS = 0;  //通用成功
    const FAIL = 1;     //通用失败
    const NO_LOGIN = 2; //没有登录
    const NO_PRIV = 3;  //没有操作权限
    const NO_ORDER = 4;  //没有课程权限
    const FAIL_ACCESS_TOKEN_EXPIRE = 5; //access_token过期，需要更新

    public static function succ($data=[],$msg="成功"){
        return ['Code'=>self::SUCCESS,'Data'=>$data,'Msg'=>$msg];
    }

     public static function succInfo($msg="成功"){
        return ['Code'=>self::SUCCESS,'Msg'=>$msg];
    }

    public static function failInfo($msg="失败"){
        return ['Code'=>self::FAIL,'Msg'=>$msg];
    }

    public static function failNoLogin($msg="您还没有登录"){
        return ['Code'=>self::NO_LOGIN,'Msg'=>$msg];
    }

    public static function failNoPriv($msg = "您没有相关操作权限"){
        return ['Code'=>self::NO_PRIV,'Msg'=>$msg];
    }

    public static function failNoOrder($msg ="您没有相关学习权限，请购买"){
        return ['Code'=>self::NO_ORDER,'Msg'=>$msg];
    }

    public static function failTokenExpire($msg="ACCESS_TOKEN 已经过期了"){
        return ['Code'=>self::FAIL_ACCESS_TOKEN_EXPIRE,'Msg'=>$msg];
    }

}