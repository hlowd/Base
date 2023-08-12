<?php

namespace Hlowd\Base\Service;

use Hlowd\Base\Contracts\IValidator;

class ValidatorClass implements IValidator
{

    public function isMobile(string $str=''):bool{
        return $this->regCheck($str,'/^1[3456789]\d{9}$/');
    }

    public function isPassword(string $str=''):bool{
        return $this->regCheck($str,'/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^\da-zA-Z\s]).{8,20}$/');
    }

    public function isIdNum(string $str=''):bool{
        return $this->regCheck($str,'/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/');
    }

    public function isSms(string $str=''):bool{
        return $this->regCheck($str,'/^\d{4}$/');
    }


    /**
     * @param string $str
     * @return bool
     */
    public function isEmail(string $str=''):bool{
        return $this->regCheck($str,'/^\w+[-|\w._]+@(\w+(-\w+)?\\.)+[a-z]{2,}$/');
    }

    private function regCheck(string $str,string $reg):bool{
        if (preg_match($reg, $str, $matches)) {
            return boolval($matches[0]);
        }else{
            return false;
        }
    }

}