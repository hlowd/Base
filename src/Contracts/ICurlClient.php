<?php

namespace Hlowd\Base\Contracts;

interface ICurlClient
{
    function getJson(string $url,array $param = []):array;
    function postJson(string $url,array $param = []):array;
}