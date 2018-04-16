@extends('home.layout.index')

@section('content')
<div class="login">
        <div class="container">
            <h3 class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">欢迎登录最好商城</h3>
            <p class="est animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">轻轻松松 购 惊喜不断</p>
            <div class="login-form-grids animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <form  action="/home/login/dolog" method="get">
                    {{ csrf_field() }}
                    <input type="text" placeholder="请输入账户名" id="uname" name="uname">
                    <input type="password" placeholder="请输入密码" name="password" id="password">
                    <div class="forgot">
                        <a href="#">忘记密码?</a>
                    </div>
                    <input type="submit" value="登录">
                </form>
            </div>
            <h4 class="animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">新朋友</h4>
            <p class="animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;"><a href="register.html">在此注册</a> <a href="index.html">注册<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
@endsection