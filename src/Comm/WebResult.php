<?php

namespace Hlowd\Base\Comm;

class WebResult
{
    public int $Code;
    public string $Msg;
    public array | object | null $Data;

    /**
     * @param int $code
     * @param string $msg
     * @param array | null | object $data
     */
    public function __construct(int $code,string $msg,array | null | object $data = null)
    {
        $this->Code = $code;
        $this->Msg = $msg;
        $this->Data = $data;
    }
}