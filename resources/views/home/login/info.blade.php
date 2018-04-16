@extends('admin.layout.index')
<script src="{{url()}}/sweetalert-master/docs/assets/sweetalert/sweetalert.min.js"></script> 
@section('content')


         <!-- 读取模版的提示信息 -->       
        @if(session('error'))
            <script>
                  sweetAlert("{{session('error')}}");
            </script>     
        @endif
    
@endsection