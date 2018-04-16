@extends('admin.layout.index')
@section('content')
       <label>用&nbsp; 户&nbsp;名</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ session('login')->uname }}" disabled>
       <label>性　　别</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ session('login')->sex }}" disabled>

       <label>电　　话</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ session('login')->tel }}" disabled>
       <label>邮　　箱</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ session('login')->email }}" disabled>
       <a href="/admin/person/create" class="btn btn-primary btn-lg btn-block" style="float:left;">修改信息</a>

@endsection

