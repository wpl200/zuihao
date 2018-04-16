<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
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
        $page_count = $request -> input('page_count',5);
        //用户订单
        $res = DB::table('shop_users')
            ->join('shop_orders', 'shop_users.uid', '=', 'shop_orders.uid')
            ->select('shop_users.*', 'shop_orders.oid','shop_users.uname','shop_orders.ormb','shop_orders.status','shop_orders.orderid','shop_orders.created_at');

        if(isset($search) && !empty($search)){
            $res -> where('uname','like','%'.$search.'%');
        }
        $data = $res->paginate($page_count);//获取数据并且分
        
        return view('admin.order.index',['top'=>'订单管理','data'=>$data,'search'=>$request->all()]);
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
        //
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
         //执行删除
        DB::table('shop_orders')->where('oid',$id)->delete();
        return back()->with('error','删除成功');
    }
}
