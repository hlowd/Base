<?php

namespace Hlowd\Base;

class Validator
{
    public static function mobileFilter($str=''){
        if (preg_match('/^(13|14|15|16|17|18|19)[0-9]{9}$/', $str, $matches)) {
            return $matches[0];
        }
    }

     public static function passwordFilter($str=''){
        if (preg_match('/^[0-9a-zA-Z_@]{8,20}$/', $str, $matches)) {
            return $matches[0];
        }
    }

    public static function idNumFilter($str=''){
        if (preg_match('/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/', $str, $matches)) {
            return $matches[0];
        }
    }

    public static function smsFilter($str=''){
        if (preg_match('/^[0-9]{4}$/', $str, $matches)) {
            return $matches[0];
        }
    }

}