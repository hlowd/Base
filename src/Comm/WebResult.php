<?php

namespace Hlowd\Base\Comm;

class WebResult
{


    public function __construct(public int $Code, public string $Msg, public array $Data = [])
    {

    }
}