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
                            <span>{{Session::get('customer_name')}}</span>
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
                            <li><a href="{{URL::to('/danh-muc-san-pham2/8')}}">Phụ Nữ</a></li>
                            <li><a href="{{URL::to('/danh-muc-san-pham2/7')}}">Đàn Ông</a></li>
                            <li><a href="{{URL::to('/danh-muc-san-pham2/7')}}">Cửa Hàng</a></li>
                            <li><a href="#">Trang</a>
                                <ul class="dropdown">
                                    <li><a href="{{URL::to('/chi-tiet-san-pham/14')}}">Chi tiết sản phẩm</a></li>
                                    <li><a href="{{URL::to('/show_cart')}}">Giỏ hàng</a></li>
                                    <li><a href="{{URL::to('/checkout')}}">Thanh Toán</a></li>
                                    <li><a href="./blog-details.html">Chi tiết Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Liên Hệ</a></li>
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
                            <li><a href="product-details.html"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="shop-cart.html"><span class="icon_bag_alt"></span>
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
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{URL::to('/trang-chu')}}"><i class="fa fa-home"></i> Trang Chủ</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->

    <?php
    $content =Cart::content();
    ?>
   
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>

                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                                  
                            <tbody>
                                @foreach($content as $key =>$v_content)
                                  
                                
                                <tr>

                                      
                                    <td class="cart__product__item">
                                        <img src="{{URL::to('public/upload/product/'.$v_content->options->images)}}" width="50" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$v_content->name}}</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{number_format((float)$v_content->price).' '.'VND'}}</td>
                                    <form action="{{URL::to('update-cart-quantity')}}" method="post">
                                         {{csrf_field()}}
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input name="cart_quantity" value="{{$v_content->qty}}">                                         
                                        </div>
                                      
                                          <input type="submit" name="update_qty" value="Cập Nhật" class="site-btn2">
                                          <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                    </td>
                                    <td class="cart__total">
                                        <?php
                                         $subtotal = $v_content ->price * $v_content->qty;
                                         echo number_format((float)$subtotal).' '.'VND';
                                        ?>
                                    </td>
                                    <td class="cart__close">
                                         <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><span class="icon_close"></span>      
                                   </a>

                                          </form>
                                    </td>
                                     
                                </tr>
                             
                   
                            </tbody>
                         @endforeach 
                        </table>
                    </div>
                </div>
            </div>
            
               
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{URL::to('/danh-muc-san-pham2/7')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>

               {{--  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <input type="submit" name="update_qty" value="Cập Nhật" class="site-btn">
                        <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                   
                    </div>
                </div> --}}
            </div>

               
            <div class="row">
                <div class="col-lg-6">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {!! session()->get('message') !!}
                    </div>
                    @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                        {!! session()->get('error') !!}
                    </div>
                     @endif
                    <div class="discount__content">
                        <h6>Mã giảm giá</h6>
                        <form action="{{URL('/check-coupon')}}" method="post">
                             {{csrf_field()}}
                            <input type="text" placeholder="Nhập mã" name="coupon">
                            <button type="submit" name="check_coupon" class="site-btn">Áp dụng</button>
                        </form>
                    </div>
                </div>

         
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Tổng giỏ hàng</h6>
                        <ul>
                            <li>Tổng <span>{{Cart::priceTotal(0).' '.'VND'}}</span></li>
                            @if(Session::get('coupon'))
                            <li>
                                
                                   
                                    @foreach(Session::get('coupon') as $key => $cou)

                                        @if($cou['coupon_condition']==1)
                                            Mã giảm : {{$cou['coupon_number']}} %
                                            <p>
                                                @php 
                                                $total = Cart::total(0);
                                                $total_coupon = ($total*$cou['coupon_number'])/100;
                                                echo '<p><li>Tổng giảm:'.number_format($total_coupon,0,',','.').'đ</li></p>';
                                                @endphp
                                            </p>
                                            <p><li>Tổng đã giảm :{{number_format($total-$total_coupon,0,',','.')}}đ</li></p>
                                        @elseif($cou['coupon_condition']==2)
                                            Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
                                            <p>
                                                @php 
                                                $total = Cart::total(0);
                                                $total_coupon = $total - $cou['coupon_number'];
                                
                                                @endphp
                                            </p>
                                            <p><li>Tổng đã giảm :{{number_format($total_coupon,0,',','.')}}đ</li></p>
                                        @endif
                                    @endforeach


                             </li>
                             @endif 
              {{--               <li>Thuế <span>{{Cart::tax(0).' '.'VND'}}</span></li>
                            <li>Phí vận chuyển <span>Free</span></li> --}}
                           {{--  <li>Tiền sau khi giảm : </li>
                            <li>Thành tiền <span>{{Cart::total(0).' '.'VND'}}</span></li> --}}
                        </ul>
                        <?php
                         $customer_id = Session::get('customer_id');
                             if($customer_id !=NULL){
                           
                            ?>
                            <a href="{{URL::to('/checkout')}}" class="primary-btn">Thanh Toán</a>
                            
                      
                            <?php
                        }else{
                            ?>
                            <a href="{{URL::to('/login-checkout')}}"  class="primary-btn">Thanh Toán</a>
                        
                        <?php

                        }
                    ?>

                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Cart Section End -->



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
        </form>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>