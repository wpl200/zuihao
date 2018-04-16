@extends('admin.layout.index')

@section('content')

    <table class="table table-bordered text-center table-hover" >
        <tr>
            <td>ID</td>
            <td>分类名称</td>
            <td>所属分类</td>
            <td>分类路径</td>
            <td id="a">操作</td>
        </tr>   
         @foreach($type_data as $v)

         <tr >
            <td>{{ $v->tid }}</td>
            <td>{{ $v->tname }}</td>   
            <td>{{ $v->pid }}</td>
            <td>{{ $v->path }}</td>
            <td>
                <a href="/admin/type/{{ $v->tid }}/edit" class="btn btn-warning btn-sm" style="float:left;">修改</a>
                <form action="/admin/type/{{ $v->tid }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="删除" class="btn btn-danger btn-sm"/>
                </form>
            </td>
         </tr> 
         
         @endforeach  
         
    </table>
@endsection