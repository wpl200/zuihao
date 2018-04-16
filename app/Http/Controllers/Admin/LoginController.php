<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\shopUsers;
use SESSION;
use Hash;
use DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {   
        /*session_start();*/
        //dump($_SESSION);
        return view('admin.login.index');
    }
    public function getInfo()
    {
        return view('admin.login.info',['top'=>'欢迎进入后台']);
    }
    public function getDolog(Request $request)
    {
        
        $data = $request -> except('_token','button');
        // dump($data);
        //用户名密码判断
        $userinfo = DB::table('shop_users')->where('uname',$data['uname'])->first();
        // dump($temp_arr);
        if (empty($userinfo)) {
            return back()->with('error','用户名或密码错误');
        }
        //判断密码是否正确
       // dump($userinfo);
        if (Hash::check($data['password'], $userinfo->password)) {
            return back()->with('error','用户名或密码错误');
        }
       //验证权限
        if ($userinfo->auth != 1) {
            return back()->with('error','权限不够');
        } else {
        //获取表单提交的数据
       
        session(['login'=>$userinfo ]);//dump($userinfo->uname);
       return redirect('/admin/users')->with('success',session('login')->uname);//加载欢迎模板

        }

    }
    
    public function getOutlog(Request $request)
    {
        //判断session里面是否有值(用户是否登陆)
         session(['login'=>null ]);
        return redirect('/admin/login');
    }

}
