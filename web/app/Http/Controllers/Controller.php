<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\shopType;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //利用递归获取所有的数据  并且将子类存在sub中
    public function getTypePid ($pid = 0)
    {
        $type = new shopType;
        $data = $type::where('pid',$pid)->get();
        $type_data = [];
        foreach ($data as $k=>$v) {    
            $v['sub'] = $this->getTypePid($v->tid);
            $type_data[] = $v;
        }
        return $type_data;
    }
}
