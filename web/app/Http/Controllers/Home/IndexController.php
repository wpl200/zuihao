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
    public function index()
    {
       //调用继承过来的递归函数  获取type表中的数据
        $type_data = $this->getTypePid();

        //下边的都是测试数据的
        /*//dump($type_data);
        foreach($type_data as $k=>$v){
            //dump($v->sub);
            foreach($v->sub as $kk=>$vv){
                //dump($vv->tid);
                //dump($vv->sub);
                foreach($vv->sub as $kkk=>$vvv){
                    //dump($vvv->tid);
                }
            }
        }*/

        return view('home.goods.index',['type_data'=>$type_data]);
    }

    public function getLogin()
    {
        return view('home.goods.login');
    }
     
}
