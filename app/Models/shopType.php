<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class shopType extends Model
{
    //修改默认配置
    public $table = 'shop_type';
    public $primaryKey = 'tid';

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
