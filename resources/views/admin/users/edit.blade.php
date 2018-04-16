@extends('admin.layout.index')

@section('content')
    <ol class="breadcrumb">
      <li class="active">用户修改</li>
    </ol>
    @foreach ($res as $value)
    <form action="/admin/users/{{ $value->uid }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    <div class="form-group">
        <label>用&nbsp; 户&nbsp;名</label>
        <input class="form-control" type="text" name="uname" value="{{ $value->uname }}"  ><br><br>
        <label>邮　　箱</label>
        <input class="form-control" type="text" name="email" value="{{$value->email}}"  ><br><br>

        <label>权　　限</label>
        <input class="form-control" type="text" name="auth" value="{{$value->auth}}"  ><br><br>
        <input type="submit" value="修改用户" class="btn btn-info btn-lg"/>
    </div>
    </form>
@endforeach
@endsection