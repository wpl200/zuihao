<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsAddRequest;
use App\Models\shopGoods;
use SESSION;
use Hash;
use DB;

class GoodsController extends Controller
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
        $status = $request -> input('search2','');//接收邮箱
        $page_count = $request -> input('page_count',5);
        $goods = DB::table('shop_goods');  //创建数据对象
        if(isset($search) && !empty($search)){
            $goods -> where('gname','like','%'.$search.'%');
        }
        if(isset($status) && !empty($status)){
            $goods -> where('status','like','%'.$status.'%');
        }
        $data = $goods->paginate($page_count);//获取数据并且分页
        return view('admin.goods.index',['top'=>'商品列表','data'=>$data,'search'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //添加
         //用来遍历下拉框
        $data = new shopGoods;
        $type_data = $data->getType();
        return view('admin.goods.create',['title'=>'添加商品','top'=>'添加商品','type_data'=>$type_data]);   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsAddRequest $request)
    {
         $data = $request -> except('_token');;
         //实例化模型
        $goods = new shopGoods;
        $goods -> gname = $data['gname'];
        $goods -> price = $data['price'];
        $goods -> status = $data['status'];
        $goods -> stock = $data['stock'];
        $goods -> gdesc = $data['gdesc'];
        $goods -> tid = $data['tid'];
        $file =  $request -> file('gpic');//创建文件上传对象
        $temp_name = time()+rand(10000,99999);
        $hz = $file -> getClientOriginalExtension();
        $filename = $temp_name.'.'.$hz;
        $gpic = $file -> move('./Uploads/'.date('Ymd',time()),$filename);//执行上传
        $goods -> gpic = $gpic;
        //将数据存到数据库
        $res = $goods -> save();
        if($res){
            return redirect('admin/goods')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //商品详情
        $res = DB::table('shop_goods')
            ->join('shop_type', 'shop_goods.tid', '=', 'shop_type.tid')
            ->select('shop_goods.*','shop_goods.gid','shop_goods.gname','shop_type.tname','shop_goods.price','shop_goods.stock','shop_goods.salecnt','shop_goods.gpic','shop_goods.gdesc','shop_goods.status','shop_goods.created_at')->where('gid',$id)->get();
        return view('admin.goods.show',['title'=>'商品详情','res'=>$res,'top'=>'商品详情']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改用户页面
        $res = DB::table('shop_goods')->where('gid',$id)->get();
        return view('admin.goods.edit',['title'=>'修改商品','res'=>$res,'top'=>'修改商品']);
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
         //修改用户
        $data = $request -> input();/*
        Album::where('gid', '=', $id) ->update(['gname' => $data[gname]);*/
        $res = DB::table('shop_goods')->where('gid',$id)->update(['gname'=>$data['gname'],'stock'=>$data['stock'],'status'=>$data['status']]);
        if ($res) {
            return redirect('/admin/goods');
        }else{
            return back();
        }
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
        DB::table('shop_goods')->where('gid',$id)->delete();
        return back()->with('error','删除成功');
    }
}
