<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shopUsers extends Model
{
    //自定义表名
    public $table  ='shop_users';
    public $primarykey = 'uid';
}
