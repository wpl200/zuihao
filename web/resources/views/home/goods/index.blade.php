@extends('home.layout.index')

@section('content')
    <!-- banner -->
    <div id="banner_tabs" class="flexslider">
    <ul class="slides">
        <li style="position: absolute; left: 0px; top: 0px; display: list-item;">
            <a title="" target="_blank" href="#">
                <img width="1920" height="482" alt="" style="background: url(../images/banner1.jpg) no-repeat center;" src="{{ url() }}/images/alpha.png">
            </a>
        </li>
        <li style="position: absolute; left: 0px; top: 0px; display: none;">
            <a title="" href="#">
                <img width="1920" height="482" alt="" style="background: url(../images/banner2.jpg) no-repeat center;" src="{{ url() }}/images/alpha.png">
            </a>
        </li>
        <li style="position: absolute; left: 0px; top: 0px; display: none;">
            <a title="" href="#">
                <img width="1920" height="482" alt="" style="background: url(../images/banner3.jpg) no-repeat center;" src="{{ url() }}/images/alpha.png">
            </a>
        </li>
    </ul>
    <ul class="flex-direction-nav">
        <li><a class="flex-prev" href="javascript:;">Previous</a></li>
        <li><a class="flex-next" href="javascript:;">Next</a></li>
    </ul>
    <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
        <li class="active"><a>1</a></li>
        <li class=""><a>2</a></li>
        <li class=""><a>2</a></li>
    </ol>
</div>

<!-- //banner -->
<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container"> 
            <div class="banner-bottom-grids">
                <div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-julia">
                            <img src="{{ url() }}/images/4.jpg" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3>Best <span>Store</span><i> in online shopping</i></h3>
                                <div>
                                    <p>Cupidatat non proident, sunt</p>
                                    <p>Officia deserunt mollit anim</p>
                                    <p>Laboris nisi ut aliquip consequat</p>
                                </div>
                            </figcaption>           
                        </figure>
                    </div>
                </div>
                <div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
                        <div class="banner-bottom-grid-left-grid1">
                            <img src="{{ url() }}/images/1.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="banner-bottom-grid-left1-pos">
                            <p>Discount 45%</p>
                        </div>
                    </div>
                    <div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
                        <div class="banner-bottom-grid-left-grid1">
                            <img src="{{ url() }}/images/2.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="banner-bottom-grid-left1-position">
                            <div class="banner-bottom-grid-left1-pos1">
                                <p>Latest New Collections</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <div class="banner-bottom-grid-left-grid grid-left-grid1">
                        <div class="banner-bottom-grid-left-grid1">
                            <img src="{{ url() }}/images/3.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="grid-left-grid1-pos">
                            <p>top and classic designs <span>2016 Collection</span></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
$(function() {
    var bannerSlider = new Slider($('#banner_tabs'), {
        time: 5000,
        delay: 400,
        event: 'hover',
        auto: true,
        mode: 'fade',
        controller: $('#bannerCtrl'),
        activeControllerCls: 'active'
    });
    $('#banner_tabs .flex-prev').click(function() {
        bannerSlider.prev()
    });
    $('#banner_tabs .flex-next').click(function() {
        bannerSlider.next()
    });
})
</script>
<!-- //banner-bottom -->
<!-- collections -->
    <div class="new-collections">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">新上架</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">每一件商品都给你带来惊喜</p>
            <div class="new-collections-grids">
                <div class="col-md-3 new-collections-grid">
                    <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img src="{{ url() }}/images/7.jpg" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="single.html">快速浏览</a>
                            </div>
                            <div class="new-collections-grid1-right">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="single.html">正式衬衫</a></h4>
                        <p>放松心情，从我做起</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$325</i> <span class="item_price">￥250</span><a class="item_add" href="#">添加到购物车</a></p>
                        </div>
                    </div>
                    <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img src="{{ url() }}/images/8.jpg" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="single.html">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="single.html">Running Shoes</a></h4>
                        <p>Vel illum qui dolorem eum fugiat.</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 new-collections-grid">
                    <div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img src="{{ url() }}/images/5.jpg" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
                                <a href="single.html">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right new-collections-grid1-right-rate">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="new-one">
                                <p>New</p>
                            </div>
                        </div>
                        <h4><a href="single.html">Dining Table</a></h4>
                        <p>Vel illum qui dolorem eum fugiat.</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$580</i> <span class="item_price">$550</span><a class="item_add" href="#">add to cart </a></p>
                        </div>
                    </div>
                    <div class="new-collections-grid-sub-grids">
                        <div class="new-collections-grid1-sub">
                            <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                                <div class="new-collections-grid1-image">
                                    <a href="single.html" class="product-image"><img src="{{ url() }}/images/6.jpg" alt=" " class="img-responsive" /></a>
                                    <div class="new-collections-grid1-image-pos">
                                        <a href="single.html">Quick View</a>
                                    </div>
                                    <div class="new-collections-grid1-right">
                                        <div class="rating">
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="single.html">Wall Lamp</a></h4>
                                <p>Vel illum qui dolorem eum fugiat.</p>
                                <div class="new-collections-grid1-left simpleCart_shelfItem">
                                    <p><i>$480</i> <span class="item_price">$400</span><a class="item_add" href="#">add to cart </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="new-collections-grid1-sub">
                            <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                                <div class="new-collections-grid1-image">
                                    <a href="single.html" class="product-image"><img src="{{ url() }}/images/9.jpg" alt=" " class="img-responsive" /></a>
                                    <div class="new-collections-grid1-image-pos">
                                        <a href="single.html">Quick View</a>
                                    </div>
                                    <div class="new-collections-grid1-right">
                                        <div class="rating">
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="single.html">Wall Lamp</a></h4>
                                <p>Vel illum qui dolorem eum fugiat.</p>
                                <div class="new-collections-grid1-left simpleCart_shelfItem">
                                    <p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 new-collections-grid">
                    <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img src="{{ url() }}/images/10.jpg" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="single.html">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="single.html">Pearl & Stone Anklet</a></h4>
                        <p>Vel illum qui dolorem eum fugiat.</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$180</i> <span class="item_price">$120</span><a class="item_add" href="#">add to cart </a></p>
                        </div>
                    </div>
                    <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                        <div class="new-collections-grid1-image">
                            <a href="single.html" class="product-image"><img src="{{ url() }}/images/11.jpg" alt=" " class="img-responsive" /></a>
                            <div class="new-collections-grid1-image-pos">
                                <a href="single.html">Quick View</a>
                            </div>
                            <div class="new-collections-grid1-right">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <h4><a href="single.html">Stones Bangles</a></h4>
                        <p>Vel illum qui dolorem eum fugiat.</p>
                        <div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i>$340</i> <span class="item_price">$257</span><a class="item_add" href="#">add to cart </a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //collections -->
<!-- new-timer -->
    <div class="timer">
        <div class="container">
            <div class="timer-grids">
                <div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <h3><a href="products.html">限时抢购</a></h3>
                    <div class="rating">
                        <div class="rating-left">
                            <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="rating-left">
                            <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="rating-left">
                            <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="rating-left">
                            <img src="{{ url() }}/images/2.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="rating-left">
                            <img src="{{ url() }}/images/1.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
                        <p><i>￥580</i> <span class="item_price">￥550</span></p>
                        <h4>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                            nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                            qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui 
                            dolorem eum fugiat quo voluptas nulla pariatur.</h4>
                        <p><a class="item_add timer_add" href="#">添加到购物车</a></p>
                    </div>
                    <div id="counter"> </div>
                    <script src="js/jquery.countdown.js"></script>
                    <script src="js/script.js"></script>
                </div>
                <div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <div class="timer-grid-right1">
                        <img src="{{ url() }}/images/17.jpg" alt=" " class="img-responsive" />
                        <div class="timer-grid-right-pos">
                            <h4>特价</h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
