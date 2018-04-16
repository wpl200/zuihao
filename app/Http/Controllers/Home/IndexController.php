<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use APP\Http\Controllers\Home\IndexController;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $type_data = $this->getTypePid();
         return view('home.index.index',['type_data'=>$type_data]);
    }

    public function getLogin()
    {
        return view('home.goods.login');
    }
     //调用继承过来的递归函数  获取type表中的数据
        

       
}
