@extends('admin.layout.index')
<script src="{{url()}}/sweetalert-master/docs/assets/sweetalert/sweetalert.min.js"></script> 

@section('content')
    <!-- 搜索条件 -->
        <form action="/admin/users" method="get">
            显示： 
                <select name="page_count">
                    <option value="5"  @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 5) selected @endif>5</option>
                    <option value="15" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 15) selected @endif>15</option>
                    <option value="25" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 25) selected @endif>25</option>
                    <option value="50" @if(isset($search['page_count']) && !empty($search['page_count']) && $search['page_count'] == 50) selected @endif>50</option>
                </select>条
            　　　
            用户： <input type="text" name="search" value="{{$search['search'] or ''}}">
            邮箱： <input type="text" name="search2" value="{{$search['search2'] or ''}}">
            <input type="submit" value="搜索"  class=" btn btn-success">
        </form>
    <table class="table table-bordered text-center table-hover">
        <tr>
            <td>ID</td>
            <td>用户名</td>
            <td>性别</td>
            <td>电话</td>
            <td>邮箱</td>
            <td>权限</td>
            <td>头像</td>
            <td>操作</td>
        </tr>
         @foreach ($data as $key=>$value) 
         <tr>
            <td>{{ $value->uid }}</td>
            <td>{{ $value->uname }}</td>
            <td>{{ $value->sex }}</td>
            <td>{{ $value->tel }}</td>
            <td>{{ $value->email }}</td>
            <td>
                @if($value->auth == 1)
                    管理员
                @elseif($value->auth == 0)
                    普通会员
                @endif
            </td>
            <td>
                <img src="{{ URL::asset($value->uface) }}" alt="无法加载" style="width:100px"/>
            </td>
            <td>
                <a href="/admin/users/{{ $value->uid }}/edit" class="btn btn-warning btn-sm" style="float:left;">修改</a>

                <form action="/admin/users/{{ $value->uid }}" method="post" style="display: inline;">
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
      <!-- 读取模版的提示信息 -->
       @if(session('success'))
        <script>
            sweetAlert("欢迎{{session('success')}}登录后台");
        </script>
        @endif        
        @if(session('error'))
            <script>
                  sweetAlert("{{session('error')}}");
            </script>     
        @endif
@endsection
