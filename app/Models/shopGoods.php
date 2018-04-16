<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class shopGoods extends Model
{
    //自定义表名
    public $table  ='shop_goods';
    public $primarykey = 'gid';

    public function getType ()
    {
        $type_data = DB::select( "select *,concat(path, ',' ,tid) as paths from shop_type order by paths");
        foreach ($type_data as $k=>$v) {
            //计算path中 ，出现的次数
            $n = substr_count($v->path,',');
            $v->tname = str_repeat('|----',$n) . $v->tname;
        }
        return $type_data;
    }
}
