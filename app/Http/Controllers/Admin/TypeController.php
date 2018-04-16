<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TypeAddRequest;
use App\Http\Controllers\Controller;
use App\Models\shopType;
use DB;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $res = new shopType;
         $type_data = $res->getType();
        //调用shopType里处理好的数据 
        return view('admin.type.index',['top'=>'分类列表','type_data'=>$type_data]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取处理好的数据
        $data = new shopType; 
        $type_data = $data -> getType();
        return view('admin.type.create',['top'=>'分类添加','type_data'=>$type_data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        
        if(empty($data['tname'])){
            return redirect('admin/type/create')->with('error','添加失败');
        }
        $shoptype = new shopType;
         //处理数据 path
        //最大的父类 path为0
        if($data['pid'] == 0){
            $data['path'] = 0;
        } else {
            //查询数据并且拼接path
            $pdata = $shoptype::find($data['pid']);

            $data['path'] = $pdata['path'].','.$pdata['tid'];
            //插入数据 这个要一条一条的插入呀
            
         } 
         $shoptype-> tname = $data['tname'];
        $shoptype-> pid = $data['pid'];
        $shoptype-> path = $data['path'];
        $res = $shoptype ->save();
        if($res){
            return redirect('admin/type')->with('success','添加成功');
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
         //获取处理好的数据
        $type = new shopType; 
        $type_data = $type -> getType();
        // dd($type_data);
        $data = DB::table('shop_type')->where('tid',$id)->first();
        // dd($data);
        return view('admin.type.edit',['top'=>'分类修改','type_data'=>$type_data,'data'=>$data]);
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
         //修改分类
        $type = new shopType;
        $data = $request -> except('_token','_method');
        // dd($data);
        if ($data['pid'] == '0') {
            $data['path'] = 0;
        } else {
            $parent_data =$type::find($data['pid']);
            $data['path'] = $parent_data['path'] .','. $parent_data['tid'];
        }

        $child_data =DB::table('shop_type') ->where('pid','=',$id)->first();
        //判断当前分类下是否有子分类
        if (!empty($child_data)) {
           return back()->with('error','分类下面有子类');
        }
       $res = DB::table('shop_type')->where('tid',$id)->update(['tname'=>$data['tname']]);
        if ($res) {
            return redirect('/admin/type');
        }else{
            return back()->with('error','修改失败');
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
        $data = DB::table('shop_type')->where('pid','=',$id)->first();
        // dd($data);
        //判断当前分类下是否有子分类
        if (!empty($data)) {
            return redirect('admin/type')->with('error','删除失败');
        }
        //执行删除操作
        $res = DB::table('shop_type')->where('tid',$id)->delete();
        // dd($res);
        if ($res > 0) {
            return redirect('admin/type')->with('success','删除成功');
        } else {
            return redirect('admin/type')->with('error','删除失败');
        }
    }
}
