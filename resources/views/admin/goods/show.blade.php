@extends('admin.layout.index')
@section('content')
    
    @foreach($res as $key => $value)
        <label>商 品 ID</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->gid }}" disabled>
       <label>商&nbsp; 品&nbsp;名</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->gname }}" disabled>
       <label>所属商品</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->tname }}" disabled>
       <label>商品价格</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->price }}" disabled>
       <label>商品库存</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->stock }}" disabled>
       <label>商品销量</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->salecnt }}" disabled>
       <label>商品图片</label><br>
       <img src="{{ URL::asset($value->gpic) }}" alt="无法加载" style="width:100px"/><br><br>
       <label>商品描述</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->gdesc }}" disabled>
       <label>商品状态</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->status }}" disabled>
       <label>上架时间</label>
       <input class="form-control" id="disabledInput" type="text" placeholder="{{ $value->created_at }}" disabled>

    @endforeach

@endsection
