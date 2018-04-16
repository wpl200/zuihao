<?php

namespace App\Http\Controllers\Home;

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
        $type_data = $this->getTypePid();
         return view('home.login.index',['type_data'=>$type_data]);
    }
    public function getDolog(Request $request)
    {
        
        $data = $request -> except('_token');
        // dd($data);
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
        if ($userinfo->auth != 0 && $userinfo != 1) {
            return back()->with('error','权限不够');
        } else {
        //获取表单提交的数据
       
        session(['log'=>$userinfo ]);//dump($userinfo->uname);
       return redirect('/home/index');//加载欢迎模板

        }

    }
    
    public function getOutlog(Request $request)
    {
        //判断session里面是否有值(用户是否登陆)
         session(['log'=>null ]);
        return redirect('/home/login');
    }
}
