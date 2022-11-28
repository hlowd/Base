<?php

namespace Hlowd\Base;

class Error{
    const SUCCESS = 0;  //通用成功
    const FAIL = 1;     //通用失败
    const NO_LOGIN = 2; //没有登录
    const NO_PRIV = 3;  //没有操作权限

    public static function succ($data=[],$msg="成功"){
        return ['Code'=>self::SUCCESS,'Data'=>$data,'Msg'=>$msg];
    }

     public static function succInfo($msg="成功"){
        return ['Code'=>self::SUCCESS,'Msg'=>$msg];
    }

    public static function failInfo($msg="失败"){
        return ['Code'=>self::FAIL,'Msg'=>$msg];
    }



}