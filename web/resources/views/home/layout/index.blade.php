<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ url() }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url() }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{ url() }}/js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="{{ url() }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ url() }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="{{ url() }}/css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="{{ url() }}/css/animate.min.css" rel="stylesheet"> 
<script src="{{ url() }}/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!-- 轮播图 -->
<style>
.flexslider {
    margin: 0px auto 20px;
    position: relative;
    width: 100%;
    height: 482px;
    overflow: hidden;
    zoom: 1;
}

.flexslider .slides li {
    width: 100%;
    height: 100%;
}

.flex-direction-nav a {
    width: 70px;
    height: 70px;
    line-height: 99em;
    overflow: hidden;
    margin: -35px 0 0;
    display: block;
    background: url(../images/ad_ctr.png) no-repeat;
    position: absolute;
    top: 50%;
    z-index: 10;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all .3s ease;
    border-radius: 35px;
}

.flex-direction-nav .flex-next {
    background-position: 0 -70px;
    right: 0;
}

.flex-direction-nav .flex-prev {
    left: 0;
}

.flexslider:hover .flex-next {
    opacity: 0.8;
    filter: alpha(opacity=25);
}

.flexslider:hover .flex-prev {
    opacity: 0.8;
    filter: alpha(opacity=25);
}

.flexslider:hover .flex-next:hover,
.flexslider:hover .flex-prev:hover {
    opacity: 1;
    filter: alpha(opacity=50);
}

.flex-control-nav {
    width: 100%;
    position: absolute;
    bottom: 10px;
    text-align: center;
}

.flex-control-nav li {
    margin: 0 2px;
    display: inline-block;
    zoom: 1;
    *display: inline;
}

.flex-control-paging li a {
    background: url(../images/dot.png) no-repeat 0 -16px;
    display: block;
    height: 16px;
    overflow: hidden;
    text-indent: -99em;
    width: 16px;
    cursor: pointer;
}

.flex-control-paging li a.flex-active,
.flex-control-paging li.active a {
    background-position: 0 0;
}

.flexslider .slides a img {
    width: 100%;
    height: 482px;
    display: block;
}
</style>
<!-- <script src="{{ url() }}/js/jquery-1.10.2.min.js"></script> -->
<script src="{{ url() }}/js/slider.js"></script>

<!-- //轮播图 -->
</head>
    
<body>
<!-- header -->
    <div class="header">
        <div class="container">
            <div class="header-grid">
                <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <ul>
                        
                        <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.html">登陆</a></li>
                        <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">注册</a></li>
                    </ul>
                </div>
                <div class="header-grid-right an    imated wow slideInRight" data-wow-delay=".5s">
                    <ul class="social-icons">
                        <li>欢迎您，　<a href="#">贝贝</a></li>
                        <li>&nbsp;</li>
                        <li><a href="">［退出］</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="logo-nav">
                <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                    <h1><a href="index.html">最好<span>都在这里</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html" class="act">首页</a></li> 
                            <!-- Mega Menu -->
                            @foreach($type_data as $k=>$v)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $v->tname }} <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        @foreach($v->sub as $kk=>$vv)
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>{{ $vv->tname }}</h6>
                                                @foreach($vv->sub as $kkk=>$vvv)
                                                <li>
                                                    <a href="products.html">{{$vvv->tname}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endforeach
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            @endforeach
                            <li><a href="short-codes.html">断码</a></li>
                            <li><a href="mail.html">邮件给我们</a></li>
                        </ul>
                    </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                        <!-- search-scripts -->
                        <script src="{{ url() }}/js/classie.js"></script>
                        <script src="{{ url() }}/js/uisearch.js"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                        <!-- //search-scripts -->
                </div>
                <div class="header-right">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> 件物品)</div>
                                <img src="{{ url() }}/images/bag.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">空购物车</a></p>
                        <div class="clearfix"> </div>
                    </div>  
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //header -->
@section('content');

<!-- //new-timer -->
<!-- collections-bottom -->
    
<!-- //collections-bottom -->
@show
<!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
                    <h3>关于我们</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit.</span></p>
                </div>
                <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
                    <h3>联系我们</h3>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
                    <h3>最好帖子</h3>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/13.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/14.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/15.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/16.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/13.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/14.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/15.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/16.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/13.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/14.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/15.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="footer-grid-left">
                        <a href="single.html"><img src="{{ url() }}/images/16.jpg" alt=" " class="img-responsive" /></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
                    <h3>博客文章</h3>
                    <div class="footer-grid-sub-grids">
                        <div class="footer-grid-sub-grid-left">
                            <a href="single.html"><img src="{{ url() }}/images/9.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-sub-grid-right">
                            <h4><a href="single.html">culpa qui officia deserunt</a></h4>
                            <p>Posted On 25/3/2016</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="footer-grid-sub-grids">
                        <div class="footer-grid-sub-grid-left">
                            <a href="single.html"><img src="{{ url() }}/images/10.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="footer-grid-sub-grid-right">
                            <h4><a href="single.html">Quis autem vel eum iure</a></h4>
                            <p>Posted On 25/3/2016</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
                <h2><a href="index.html">最佳 <span>shop anywhere</span></a></h2>
            </div>
            <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
                <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
            </div>
        </div>
    </div>
<!-- //footer -->
</body>
</html>
