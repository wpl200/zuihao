@extends('admin.layout.index')
@section('content')
    

    <form action="/admin/order" method="get">
            显示： 
                <select name="page_count">
                    <option value="5"  @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 5) selected @endif>5</option>
                    <option value="15" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 15) selected @endif>15</option>
                    <option value="25" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 25) selected @endif>25</option>
                    <option value="50" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 50) selected @endif>50</option>
                </select>条
            　　　
            下单用户： <input type="text" name="search" value="{{$search['search'] or ''}}">
            <input type="submit" value="搜索"  class=" btn btn-success">
        </form>
    <table class="table table-bordered text-center table-hover">
        <tr>
            <td>收藏ID</td>
            <td>下单用户</td>
            <td>订单价格</td>
            <td>订单状态</td>
            <td>订单ID</td>
            <td>下单时间</td>
            <td>操作</td>
        </tr>
         @foreach ($data as $key=>$value) 
         <tr>
            <td>{{ $value->oid }}</td>
            <td>{{ $value->uname }}</td>
            <td>{{ $value->ormb }}</td> 
            <td>
                @if($value->status == 1)
                    下单未出货
                @elseif($value->status == 2)
                    已出库
                @elseif($value->status == 3)
                    已收货
                @else
                    订单完成
                @endif
            </td>
            <td>{{ $value->orderid }}</td>
            <td>{{ $value->created_at }}</td>
            <td>
            <form action="/admin/order/{{ $value->oid }}" method="post" style="display: inline;">
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
