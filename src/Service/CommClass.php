<?php

namespace Hlowd\Base\Service;

class CommClass
{
    public function RedisHashMapDecode(array $redisHashMap):array{
        $result = [];
        foreach ($redisHashMap as $r){
            $result[] = json_decode($r);
        }
        return $result;
    }

    public function RedisHashMapEncode(array $rs):array{
        $result = [];
        foreach ($rs as $r){
            $result[$r->id] = json_encode($r,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_UNICODE);
        }
        return $result;
    }

    public function pager(int $totalCount,array $list,int $pageNum,int $pageSize):array{
        return [
            'totalCount'=>$totalCount,
            'list'=>$list,
            'pageNum'=>$pageNum,
            'pageSize'=>$pageSize
        ];
    }

    public function isHz(int $deleId):bool{
        return in_array($deleId,[3,1]);
    }

}