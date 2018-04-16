<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Http\Middleware\LoginMiddleware;
use App\Models\shopUsers;
use SESSION;
use Hash;
use DB;
class UsersController extends Controller
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
        $email = $request -> input('search2','');//接收邮箱
        $page_count = $request -> input('page_count',5);
        $user = DB::table('shop_users');  //创建数据对象
        if(isset($search) && !empty($search)){
            $user -> where('uname','like','%'.$search.'%');
        }
        if(isset($email) && !empty($email)){
            $user -> where('email','like','%'.$email.'%');
        }
        $data = $user->paginate($page_count);//获取数据并且分页

        // $data = shopUsers::get();
        return view('admin.users.index',['title'=>'最好商城后台','top'=>'用户列表','data'=>$data,'search'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //修改
        return view('admin.users.create',['title'=>'添加用户','top'=>'添加用户']);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAddRequest $request)
    {
       // 获取用户输入的信息
        $data = $request -> except('_token','repassword');
        $data['password'] = Hash::make($data['password']);
        //实例化模型
        $users = new shopUsers;
        $users -> uname = $data['uname'];
        $users -> sex = $data['sex'];
        $users -> password = $data['password'];
        $users -> email = $data['email'];
        $users -> tel = $data['tel'];
        $file =  $request -> file('uface');//创建文件上传对象
        $temp_name = time()+rand(10000,99999);
        $hz = $file -> getClientOriginalExtension();
        $filename = $temp_name.'.'.$hz;
        $uface = $file -> move('./Uploads/'.date('Ymd',time()),$filename);//执行上传
        $users -> uface = $uface;
        
        //将数据存到数据库
        $res = $users -> save();
        if($res){
            return redirect('admin/users')->with('success','添加成功');
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
        //修改用户页面
        $res = DB::table('shop_users')->where('uid',$id)->get();
        return view('admin.users.edit',['title'=>'修改用户','top'=>'修改用户']);
        
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
        Album::where('artist', '=', 'Matt Nathanson') ->update(['artist' => 'Dayle Rees']);*/
        $res = DB::table('shop_users')->where('uid',$id)->update(['uname'=>$data['uname'],'email'=>$data['email'],'auth'=>$data['auth']]);
        if ($res) {
            return redirect('/admin/users');
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
        DB::table('shop_users')->where('uid',$id)->delete();
        return redirect('/admin/users');
    }
}
