@extends('admin.layout.index')
@section('content')
    <!-- 搜索条件 -->
        <form action="/admin/goods" method="get">
            显示： 
                <select name="page_count">
                    <option value="5"  @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 5) selected @endif>5</option>
                    <option value="15" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 15) selected @endif>15</option>
                    <option value="25" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 25) selected @endif>25</option>
                    <option value="50" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 50) selected @endif>50</option>
                </select>条
            　　　
            商品： <input type="text" name="search" value="{{$search['search'] or ''}}">
            状态： <input type="text" name="search2" value="{{$search['search2'] or ''}}">
            <input type="submit" value="搜索"  class=" btn btn-success">
        </form>
    <table class="table table-bordered text-center table-hover">
        <tr>
            <td>ID</td>
            <td>商品名</td>
            <td>库存</td>
            <td>销量</td>
            <td>价格</td>
            <td>状态</td>
            <td>图片</td>
            <td>操作</td>
        </tr>
         @foreach ($data as $key=>$value) 
         <tr>
            <td>{{ $value->gid }}</td>
            <td>{{ $value->gname }}</td>
            <td>{{ $value->stock }}</td>
            <td>{{ $value->salecnt }}</td>
            <td>{{ $value->price }}</td>
            <td>
                @if($value->status == 0)
                    上架
                @elseif($value->status == 1)
                    下架
                @endif
            </td>
            <td>
                <img src="{{ URL::asset($value->gpic) }}" alt="无法加载" style="width:100px"/>
            </td>
            <td>
                <a href="/admin/goods/{{ $value->gid }}/edit" class="btn btn-warning btn-sm" style="float:left;">修改</a>

                <form action="/admin/goods/{{ $value->gid }}" method="post" style="display: inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="删除" class="btn btn-danger btn-sm"/>
                </form>
                 <a href="/admin/goods/{{ $value->gid }}" class="btn btn-warning btn-sm" style="float:left;">详情</a>
            </td>
         </tr>   
         @endforeach 
    </table>

    <div id="pages">
        {!! $data->appends($search)->render() !!}
    </div>

@endsection
