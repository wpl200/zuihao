@extends('admin.layout.index')

@section('content')
    
    <form action="/admin/goods" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="form-group" style="width:1000px">
         <label>分类添加</label>
        <select name="cid"  class="form-control">
            <option value="0" >--请选择--</option>
            @foreach ($type_data as $k=>$v)
            <option value="{{ $v->tid }}" >{{ $v->tname }}</option>
           @endforeach
        </select>
        <label>商&nbsp; 品&nbsp;名</label>
        <input class="form-control" placeholder="请输入商品名称" type="text" name="gname" value=""  ><br><br>
        <label>价　　格</label>
        <input class="form-control" placeholder="请输入商品价格" type="text" name="price" value=""  ><br><br>
        <label>状　　态</label>
        <input class="form-control" placeholder="请输入商品状态" type="text" name="status" value=""  ><br><br>
        <label>商品库存</label>
        <input class="form-control" placeholder="请输入库存" type="text" name="stock" value=""  ><br><br>
        <label>商品图片</label>
        <input class="form-control" type="file" name="gpic" value=""  ><br><br>
        <label>商品描述</label>
        <textarea class="form-control" name="gdesc" rows="3"></textarea><br><br>
        <input type="submit" value="添加商品" class="btn btn-info btn-lg"/>
    </div>
    </form>
@endsection