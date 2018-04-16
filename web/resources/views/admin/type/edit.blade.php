@extends('admin.layout.index')

@section('content')
<label>*父级分类</label>

<form action="/admin/type/{{ $type_data[0]->tid }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <select name="pid" id="" class="form-control">
        <option value="0">---请选择--</option>
        @foreach($type_data as $k=>$v)
        <option value="{{ $v->tid}}"  {{ $data->pid == $v->tid ? 'selected' : '' }}>{{$v->tname}}</option>
        @endforeach
    </select>
    <label for="">*子类</label>
    <input type="text" name="tname" value="{{ $data->tname }}" class="form-control" >
    <input type="submit" value="修改" class="btn btn-warning btn-primary btn-lg btn-block">
</form>
@endsection