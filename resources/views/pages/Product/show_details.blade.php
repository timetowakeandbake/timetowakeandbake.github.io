<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{$url_canonical}}" >
    <title>{{$meta_title}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <meta property="og:url"content="{{$url_canonical}}" />
    <meta property="og:type"content="articles" />
    <meta property="og:title"content="{{$meta_title}}" />
    <meta property="og:site_name" content="{{$meta_title}}"/>
    <meta property="og:description"content="{{$meta_desc}}" />
{{--     <meta property="og:image"content="{{$share_image}}" /> --}}

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}" type="text/css">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{asset('public/frontend/images/logo1.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <?php 
                             $customer_id = Session::get('customer_id');
                             if($customer_id !=NULL){
                            ?>
                             <span> {{Session::get('customer_name')}}</span>
                             <a href="{{URL::to('/logout-checkout')}}">Đăng Xuất</a> 
                            <?php
                        }else{
                            ?>
                            <a href="{{URL::to('/login-checkout')}}">Đăng Nhập</a>
                            <a href="{{URL::to('/resigter-checkout')}}">Đăng kí</a>
                        
                        <?php

                        }
                    ?>          
        </div>
    </div>

        <header class="header">
                  <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/logo1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{URL::to('/trang-chu')}}">Trang Chủ</a></li>
                          
                            <li><a href="{{URL::to('/gio-hang')}}">Giỏ Hàng</a></li>
                            <li><a href="{{URL::to('/checkout')}}">Thanh Toán</a></li>

                          
                            <li><a>Tin Tức</a>
                                <ul class="dropdown">
                                    @foreach($category_post as $key => $danhmucbaiviet)
                                    <li><a href="{{URL::to('/danh-muc-bai-viet/'.$danhmucbaiviet->cate_post_slug)}}">{{$danhmucbaiviet->cate_post_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{URL::to('/lien-he')}}">Liên Hệ</a></li>
                            <li><a href="{{URL::to('/history')}}">Lich Sử Mua Hàng</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
      
                             <?php 
                             $customer_id = Session::get('customer_id');
                             if($customer_id !=NULL){
                           
                            ?>
                             <span> {{Session::get('customer_name')}}</span>
                             <a href="{{URL::to('/logout-checkout')}}">Đăng Xuất</a>      
                            <?php
                        }else{
                            ?>
                            <a href="{{URL::to('/login-checkout')}}">Đăng Nhập</a>
                            <a href="{{URL::to('/resigter-checkout')}}">Đăng kí</a>
                        
                        <?php

                        }
                    ?>          
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="{{URL::to('/danh-muc-san-pham2/8')}}"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="{{URL::to('/gio-hang')}}"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>

    </header>

    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->

@foreach($product_details as $key => $value)

<form method="post">
                        @csrf 

                        <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                         <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                         <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                         <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                         <input type="hidden" value="1" class="cart_product_qty_{{$value->product_id}}">

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{URL::to('/trang-chu')}}"><i class="fa fa-home"></i> Trang Chủ</a>
                         <a href="#">{{$value ->category_name}} </a>
                        <span>{{$value->brand_name}}</span>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="{{URL::to('/public/upload/product/'.$value -> product_image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{$value->product_name}}<span>Thương Hiệu: {{$value->brand_name}}</span></h3>
                        
                          <div class="rating">
                                     <ul class="list-inline"  title="Average Rating">
                                                    @for($count=1; $count<=5; $count++)
                                                        @php
                                                            if($count<=$rating){
                                                                $color = 'color:#ffcc00;';
                                                            }
                                                            else {
                                                                $color = 'color:#ccc;';
                                                            }
                                                        
                                                        @endphp
                                                    
                                                    <i title="star_rating" id="{{$value->product_id}}-{{$count}}" data-index="{{$count}}"  data-product_id="{{$value->product_id}}" data-rating="{{$rating}}" class="rating" style="cursor:pointer; {{$color}} font-size:40px;">&#9733;</i>
                                                    @endfor

                                        </ul>
                                    </div>
                        <div class="product__details__price">{{number_format((float)$value->product_price).' '.'VND'}}<span>{{number_format((float)$value->product_price).' '.'VND'}}</span></div>
                        <p>{!!$value->product_desc !!}</p>



                        <div class="product__details__button">
                            {{-- <div class="quantity">
                                <span>Số lượng:</span>
                                <div class="pro-qty">
                                    <input name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}"  value="1" />
                                    <input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
                                </div>
                            </div> --}}
                           {{--  <button class="cart-btn ><span class="icon_bag_alt" type="submit"></span> Thêm vào giỏ</button> --}}

                             <button type="button" class="cart-btn add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">Thêm vào giỏ </button>

                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Số lượng:</span>
                                    <div class="stock__checkbox">
                                        <p>{{$value->product_quantity}} sản phẩm</p>
                                    </div>
                                </li>
                                <li>
                                    <span>Màu:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Size:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">
                                            xs
                                        </label>
                                        <label for="s-btn">
                                            <input type="radio" id="s-btn">
                                            s
                                        </label>
                                        <label for="m-btn">
                                            <input type="radio" id="m-btn">
                                            m
                                        </label>
                                        <label for="l-btn">
                                            <input type="radio" id="l-btn">
                                            l
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Khuyến mãi:</span>
                                    <p>Đang trong chương trình khuyến mãi</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
             <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
                           <div class="fb-share-button" data-href="http://localhost:8080/Namfashion" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
        

                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#tabs-1" role="tab">Mô tả chung</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Thông số chi tiết</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-3" role="tab">Đánh giá ( 2 )</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane " id="tabs-1" role="tabpanel">
                                <h6>Mô tả chung</h6>
                                <p>{!!$value->product_desc!!}</p>
                                <p></p>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <h6>Thông số chi tiết</h6>
                           <p>{!!$value->product_content !!}</p>
                            </div>
                            <div class="tab-pane active" id="tabs-3" role="tabpanel">

                                <h6>Đánh giá</h6>
                                <div class="col-sm-6">
                              {{--   <ul>
                                <li><a href="#" class="fa fa-user"></i>Admin</a></li>
                                <li><a href="#"class="fa fa-clock-o"></i>12:41 PM</a></li>
                                <li><a href="#"class="fa fa-calendar-o"></i>16.09.2021</a></li>
                                </ul> --}}
                                <style type="text/css">
                                        .style_comment {
                                            border: 1px solid #ddd;
                                            border-radius: 10px;
                                            background: #F0F0E9;
                                        }
                                </style>

                            <form>
                            @csrf
                          <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$value->product_id}}">
                            <div id="comment_show"></div>
                                    
                              
                                   
                              </form>
                              <p><b>Viết đánh giá của bạn</b></p>

                            <div class="blog__details__comment">
                                    <h5>Bình luận</h5>
                                    <a class="leave-btn">Để lại bình luận</a>


                            </div>

                            

                                    <form action="#">
                                        @csrf
                                        <span>
                                            <input style="width:30%;margin-left: 0" type="text" class="comment_name" placeholder="Tên bình luận"/>      
                                        </span>
                                        <textarea name="comment" class="comment_content" placeholder="Nội dung bình luận" cols="150" rows="5"></textarea>
                                        <div id="notify_comment"></div>
                                        
                                        <button type="button" class="site-btn send-comment">
                                            Gửi bình luận
                                        </button>

                                    </form>

                          {{--       <p><div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="5"></div></p> --}}
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                           



            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Sản Phẩm Liên Quan</h5>
                    </div>
                </div>
                @foreach($relate as $key =>$lienquan)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{URL::to('/public/upload/product/'. $lienquan ->product_image)}}">
                            <div class="label new">Mới</div>
                            
                        </div>
                        <div class="product__item__text">
                            <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}">{{$lienquan->product_name}}</a></h6>
                           
                            <div class="product__price">{{number_format((float)$lienquan->product_price).' '.'VND'}}</div>
                        </div>
                    </div>
                </div>
                @endforeach




         
               
    </section>
@endforeach
    <!-- Product Details Section End -->

    <!-- Instagram Begin -->
 <div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/frontend/images/insta-1.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/nam_kd/">@ nam_kd</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/frontend/images/insta-2.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/nam_kd/">@ nam_kd</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/frontend/images/insta-3.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/nam_kd/">@ nam_kd</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/frontend/images/insta-4.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/nam_kd/">@ nam_kd</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/frontend/images/insta-5.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/nam_kd/">@ nam_kd</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/frontend/images/insta-6.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/nam_kd/">@ nam_kd</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="{{asset('public/frontend/images/logo1.png')}}" alt=""></a>
                    </div>
                    <p>Luôn đồng hành cùng bạn</p>
                    <div class="footer__payment">
                        <a href="#"><img src="{{asset('public/frontend/images/payment-1.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('public/frontend/images/payment-2.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('public/frontend/images/payment-3.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('public/frontend/images/payment-4.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('public/frontend/images/payment-5.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Liên kết nhanh</h6>
                    <ul>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Câu hỏi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Tài khoản</h6>
                    <ul>
                        <li><a href="#">Tài khoản của tôi</a></li>
                        <li><a href="#">Theo dõi đơn hàng</a></li>
                        <li><a href="checkout.html">Thanh Toán</a></li>
                        <li><a href="shop-cart.html">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>Thư mới</h6>
                    <form action="Thank_you.html">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Gửi</button>
                    </form>
                    <div class="footer__social">
                        <a href="https://www.facebook.com/Nam.khodo/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">              
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="9wCKpeF3"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(){

                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                    }

                });
            });
        });
    </script>
{{-- comment --}}
<script type="text/javascript">
    $(document).ready(function(){
        
        load_comment();

        function load_comment(){
            var product_id = $('.comment_product_id').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:"{{url('/load-comment')}}",
              method:"POST",
              data:{product_id:product_id, _token:_token},
              success:function(data){
              
                $('#comment_show').html(data);
              }
            });
        }
        $('.send-comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:"{{url('/send-comment')}}",
              method:"POST",
              data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content, _token:_token},
              success:function(data){
                
                $('#notify_comment').html('<span class="text text-success">Thêm bình luận thành công, bình luận đang chờ duyệt</span>');
                load_comment();
                $('#notify_comment').fadeOut(9000);
                $('.comment_name').val('');
                $('.comment_content').val('');
              }
            });
        });
    });
</script>
{{-- đánh giá sao --}}
<script type="text/javascript">
    function remove_background(product_id)
     {
      for(var count = 1; count <= 5; count++)
      {
       $('#'+product_id+'-'+count).css('color', '#ccc');
      }
    }
    //hover chuột đánh giá sao
   $(document).on('mouseenter', '.rating', function(){
      var index = $(this).data("index");
      var product_id = $(this).data('product_id');
    // alert(index);
    // alert(product_id);
      remove_background(product_id);
      for(var count = 1; count<=index; count++)
      {
       $('#'+product_id+'-'+count).css('color', '#ffcc00');
      }
    });
   //nhả chuột ko đánh giá
   $(document).on('mouseleave', '.rating', function(){
      var index = $(this).data("index");
      var product_id = $(this).data('product_id');
      var rating = $(this).data("rating");
      remove_background(product_id);
      //alert(rating);
      for(var count = 1; count<=rating; count++)
      {
       $('#'+product_id+'-'+count).css('color', '#ffcc00');
      }
     });

    //click đánh giá sao
    $(document).on('click', '.rating', function(){
          var index = $(this).data("index");
          var product_id = $(this).data('product_id');
            var _token = $('input[name="_token"]').val();
          $.ajax({
           url:"{{url('insert-rating')}}",
           method:"POST",
           data:{index:index, product_id:product_id,_token:_token},
           success:function(data)
           {
            if(data == 'done')
            {
             alert("Bạn đã đánh giá "+index +" trên 5");
            }
            else
            {
             alert("Lỗi đánh giá");
            }
           }
    });
          
    });
</script>

</body>

</html>