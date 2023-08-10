<?php

namespace Hlowd\Base\Service;

use Hlowd\Base\Contracts\ICurlClient;
use Hlowd\Base\Exceptions\CurlException;
use Curl\Curl;
use stdClass;


class CurlClientClass implements ICurlClient
{
    private Curl $curl;


    public function __constructor(){
        $this->curl = new Curl();
        $this->curl->setHeader('Content-Type', 'application/json');
    }

    public function __destruct()
    {
        $this->curl->close();
    }

    /**
     * @throws CurlException
     */
    public function getJson(string $url, array $param = []):array{
        $this->curl->get($url,$param);
        if ($this->curl->error) {
            throw new CurlException($this->curl->error_message);
        } else {
            return json_decode($this->curl->getResponse(),true);
        }
    }

    /**
     * @throws CurlException
     */
    public function postJson(string $url, array $param = []):array{
        $this->curl->post($url, $param,true);
        if ($this->curl->error) {
            throw new CurlException($this->curl->error_message);
        } else {
            return json_decode($this->curl->getResponse(),true);
        }
    }

}