<?php

namespace Hlowd\Base\Service;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use stdClass;

class JwtClass
{
    /**
     * @param string $sender 签发者
     * @param string $receiver 接受者
     * @param string $subject  主题
     * @param string $info 包含的信息
     * @param int $liveSec 存活时间
     * @return array
     */
    public function createPayload(string $sender, string $receiver, string $subject, string $info, int $liveSec):array{
        return [
            'iss' => $sender,//签发这
            'aud' => $receiver,//接受者
            'sub'=>$subject,//主题
            'iat' => time(),//签发时间
            'nbf' => time(), //not before 在此前不生效
            'jti'=>$info,
            'exp'=>time()+$liveSec
        ];

    }

    /**
     * @param string $token
     * @param string $pubKey
     * @return stdClass
     */
    public function decode(string $token,string $pubKey):stdClass{
        return JWT::decode($token, new Key($pubKey, 'RS256'));

    }

    /**
     * @param array $payload
     * @param string $privKey
     * @return string
     */
    public function encode(array $payload,string $privKey):string{
        return JWT::encode($payload, $privKey, 'RS256');

    }



}