<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class EnshrineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 接受搜索关键字
        $search = $request -> input('search','');//接受的用户名
        $gname = $request -> input('search2','');//接收邮箱
        $page_count = $request -> input('page_count',5);


        //用户收藏
        $res = DB::table('shop_users')
            ->join('shop_enshrine', 'shop_users.uid', '=', 'shop_enshrine.uid')
            ->join('shop_goods', 'shop_enshrine.gid', '=', 'shop_goods.gid')
            ->select('shop_users.*', 'shop_enshrine.eid','shop_users.uname','shop_goods.gname','shop_goods.gname','shop_goods.price','shop_goods.gdesc','shop_goods.gpic','shop_goods.created_at');
        if(isset($search) && !empty($search)){
            $res -> where('uname','like','%'.$search.'%');
        }
        if(isset($gname) && !empty($gname)){
            $res -> where('gname','like','%'.$gname.'%');
        }
        $data = $res->paginate($page_count);//获取数据并且分
        return view('admin.enshrine.index',['top'=>'用户收藏','data'=>$data,'search'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
