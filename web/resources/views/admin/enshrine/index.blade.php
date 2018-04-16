@extends('admin.layout.index')
@section('content')
    

    <form action="/admin/enshrine" method="get">
            显示： 
                <select name="page_count">
                    <option value="5"  @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 5) selected @endif>5</option>
                    <option value="15" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 15) selected @endif>15</option>
                    <option value="25" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 25) selected @endif>25</option>
                    <option value="50" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 50) selected @endif>50</option>
                </select>条
            　　　
            用户： <input type="text" name="search" value="{{$search['search'] or ''}}">
            商品： <input type="text" name="search2" value="{{$search['search2'] or ''}}">
            <input type="submit" value="搜索"  class=" btn btn-success">
        </form>
    <table class="table table-bordered text-center table-hover">
        <tr>
            <td>收藏ID</td>
            <td>用户名称</td>
            <td>商品名称</td>
            <td>商品价格</td>
            <td>商品描述</td>
            <td>商品图片</td>
            <td>收藏时间</td>
            <td>操作</td>
        </tr>
         @foreach ($data as $key=>$value) 
         <tr>
            <td>{{ $value->eid }}</td>
            <td>{{ $value->uname }}</td>
            <td>{{ $value->gname }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->gdesc }}</td>
            
            <td>
                <img src="{{ URL::asset($value->gpic) }}" alt="无法加载" style="width:100px"/>
            </td>
            <td>{{ $value->created_at }}</td>
            <td>
            <form action="/admin/enshrine/{{ $value->eid }}" method="post" style="display: inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="删除" class="btn btn-danger btn-sm"/>
            </form>
            </td>
         </tr>   
         @endforeach 
    </table>

    <div id="pages">
        {!! $data->appends($search)->render() !!}
    </div>
@endsection
