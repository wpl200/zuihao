@extends('admin.layout.index')

@section('content')

<label>*父级分类</label>

<form action="/admin/type" method="post">
	{{ csrf_field() }}
	<select name="pid" id="" class="form-control">
		<option value="0">--请选择--</option>
		@foreach($type_data as $k=>$v)
		<option value="{{ $v->tid }}">{{ $v->tname }}</option>
		@endforeach
	</select>
	<label for="">*子类</label>
	<input type="text" name="tname" class="form-control" >
	<input type="submit" class="btn btn-info btn-primary btn-lg btn-block">
</form>

@endsection