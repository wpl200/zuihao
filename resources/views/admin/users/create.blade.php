@extends('admin.layout.index')

@section('content')
    
    <form action="/admin/users" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="form-group" style="width:1000px">
        <label>用&nbsp; 户&nbsp;名</label>
        <input class="form-control" placeholder="例如：zhangsan" type="text" name="uname" value=""  ><br><br>
        <label>性　　别</label>
        <input class="form-control" placeholder="例如：保密" type="text" name="sex" value=""  ><br><br>
        <label>密　　码</label>
        <input class="form-control" placeholder="请输入密码" type="password" name="password" value=""  ><br><br>
        <label>确认密码</label>
        <input class="form-control" placeholder="请确认密码" type="password" name="repassword" value=""  ><br><br>
        <label>邮　　箱</label>
        <input class="form-control" placeholder="1183@qq.com" type="text" name="email" value=""  ><br><br>
        <label>手　　机</label>
        <input class="form-control" placeholder="183... 134..." type="text" name="tel" value=""  ><br><br>
         <label>头　　像</label>
        <input class="form-control" type="file" name="uface" value=""  ><br><br>
        <input type="submit" value="添加用户" class="btn btn-info btn-lg"/>
    </div>
    </form>
@endsection