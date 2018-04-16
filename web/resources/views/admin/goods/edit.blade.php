@extends('admin.layout.index')

@section('content')
    @foreach ($res as $value)
    <form action="/admin/goods/{{ $value->gid }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    <div class="form-group">
        <label>商&nbsp; 品&nbsp;名</label>
        <input class="form-control" type="text" name="gname" value="{{ $value->gname }}"  ><br><br>
        <label>库　　存</label>
        <input class="form-control" type="text" name="stock" value="{{$value->stock}}"  ><br><br>

        <label>状　　态</label>
        <input class="form-control" type="text" name="status" value="{{$value->status}}"  ><br><br>
        <input type="submit" value="修改用户" class="btn btn-info btn-lg"/>
    </div>
    </form>
@endforeach
@endsection