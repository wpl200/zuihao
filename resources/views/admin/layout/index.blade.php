<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ Config::get('app.title') }}</title>
    <!-- 图标 -->
    <link rel="icon" type="image/x-icon" href="{{ Config::get('app.icon') }}"/>  
    <!-- Bootstrap Styles-->
    <link href="{{ url() }}/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ url() }}/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ url() }}/admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ url() }}/admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ url() }}/admin/assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.html"><strong>最　好　后　台</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/admin/person/{{ session('login')->uid }}"><i class="fa fa-user fa-fw"></i>个人资料</a>
                        <li class="divider"></li>
                        <li><a href="{{ url('/admin/login/outlog') }}"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i>首页</a>
                    </li>


                    <li>
                        <a href="#"><i class="glyphicon glyphicon-user"></i> 用户管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/users') }}">用户列表</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/users/create') }}">用户添加</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/enshrine') }}">用户收藏</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> 商品管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/goods') }}">商品列表</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/goods/create') }}">商品添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list"></i> 商品分类<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/type') }}">分类列表</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/type/create') }}">分类添加</a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="#"><i class="glyphicon glyphicon-tags"></i> 订单管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/order') }}">订单详情</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
        <div class="header">
        <!-- 显示自动验证的错误信息 -->
             
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close btn btn-warning" data-dismiss="alert" aria-label="Close">
                        
                            @foreach ($errors->all() as $error)
                                {{ $error }}，
                            @endforeach
                        
                     </button>
                    </div>
                @endif


                <!-- 读取模版的提示信息 -->
                @if(session('success'))
                <div class="alert alert-success" role="alert" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        {{  session('success') }}，
                    </button>
                </div>
                @endif        
                

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible" role="alert" >
                    <button type="button" class="close btn btn-warning" data-dismiss="alert" aria-label="Close">
                       {{  session('error') }}，
                   </button>
                </div>
                @endif 

        <ol class="breadcrumb" style="100%">
          <li class="active"><font class="page-header">{{ $top }}</font></li>
        </ol>
         
               

            @section('content')
                   
            @show   
        </div> 
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ url() }}/admin/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{ url() }}/admin/assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="{{ url() }}/admin/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{ url() }}/admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{ url() }}/admin/assets/js/morris/morris.js"></script>
    
    
    <script src="{{ url() }}/admin/assets/js/easypiechart.js"></script>
    <script src="{{ url() }}/admin/assets/js/easypiechart-data.js"></script>
    
     <script src="{{ url() }}/admin/assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="{{ url() }}/admin/assets/js/custom-scripts.js"></script>

      <script>
            
      </script>

</body>

</html>
