<?php

namespace Hlowd\Base\Wx\Mp;

use Exception;
use Curl\Curl;
class Auth
{
    private $curl;
    private $appId;
    private $appSecret;

    public function __construct($appId,$appSecret){
        $this->curl= new Curl();
        $this->appId = $appId;
        $this->appSecret = $appSecret;
    }

    public function __destruct(){
        $this->curl->close();
    }


    /**
     * @throws Exception
     */
    private function dealWithResult(){
        if ($this->curl->error) {
            throw new Exception($this->curl->error_message);
        } else {
            $res = json_decode($this->curl->getResponse());
            if(intval($res->errcode) !== 0){
                throw new Exception($res->errmsg);
            }
            return $res;
        }

    }

    /**
     * @throws Exception
     */
    public function getAccessToken(){
        $url = "https://api.weixin.qq.com/cgi-bin/token";
        $this->curl->get($url,[
            'grant_type'=>'client_credential',
            'appid'=>$this->appId,
            'secret'=>$this->appSecret
        ]);
        return $this->dealWithResult();

    }

    /**
     * @throws Exception
     */
    public function getStableAccessToken($forceRefresh=false){
        $url="https://api.weixin.qq.com/cgi-bin/stable_token";
        $this->curl->post($url,[
            'grant_type'=>'client_credential',
            'appid'=>$this->appId,
            'secret'=>$this->appSecret,
            'force_refresh'=>$forceRefresh
        ]);
        return $this->dealWithResult();
    }


    /**
     * @throws Exception
     */
    public function code2Session($code){
        $url ="https://api.weixin.qq.com/sns/jscode2session";
        $this->curl->get($url,[
            'appid'=>$this->appId,
            'secret'=>$this->appSecret,
            'js_code'=>$code,
            'grant_type'=>'authorization_code'
        ]);
        return $this->dealWithResult();
    }

    /**
     * @throws Exception
     */
    public function getPhoneNumber($accessToken, $code){
        $url = "https://api.weixin.qq.com/wxa/business/getuserphonenumber";
        $this->curl->post($url,[
            'access_token'=>$accessToken,
            'code'=>$code,
        ]);
        return $this->dealWithResult();
    }








}