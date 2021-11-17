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
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{URL::to('/trang-chu')}}"><i class="fa fa-home"></i> Trang Chủ</a>
                        <span>Thanh Toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <h5>Làm ơn điền thông tin dưới đây</h5>
           
            </div>
        </br>

           <form method="POST">
                            @csrf
                            <input type="text"  name="shipping_email" class="shipping_email form-control" placeholder="Điền email">
                            <input type="text" name="shipping_name" class="shipping_name form-control" placeholder="Họ và tên người gửi">
                            <input type="text" name="shipping_address" class="shipping_address form-control" placeholder="Địa chỉ gửi hàng">
                            <input type="text" name="shipping_phone" class="shipping_phone form-control" placeholder="Số điện thoại">
                            <textarea name="shipping_notes" class="shipping_notes form-control" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>

                            @if(Session::get('fee'))
                            <input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
                            @else 
                            <input type="hidden" name="order_fee" class="order_fee" value="10000">
                            @endif

                            @if(Session::get('coupon'))
                            @foreach(Session::get('coupon') as $key => $cou)
                            <input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
                            @endforeach
                            @else 
                            <input type="hidden" name="order_coupon" class="order_coupon" value="no">
                            @endif



                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn hình thức thanh toán</label>
                                    <select name="payment_select"  class="form-control input-sm m-bot15 payment_select">
                                        <option value="0">Qua chuyển khoản</option>
                                        <option value="1">Tiền mặt</option>   
                                    </select>
                                </div>
                            </div>
                            <input type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
                        </form>

                       <form>
                            @csrf 

                            <div class="form-group">
                                <label for="exampleInputPassword1">Chọn thành phố</label>
                                <select name="city" id="city" class="form-control input-sm m-bot15 choose city">

                                    <option value="">--Chọn tỉnh thành phố--</option>
                                    @foreach($city as $key => $ci)
                                    <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chọn quận huyện</label>
                                <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                    <option value="">--Chọn quận huyện--</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chọn xã phường</label>
                                <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                    <option value="">--Chọn xã phường--</option>   
                                </select>
                            </div>


                            <input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm calculate_delivery">
                        </form>
                        
                            
            
 <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        @if(session()->has('message'))
                    <div class="alert alert-success">
                        {!! session()->get('message') !!}
                    </div>
                @elseif(session()->has('error'))
                     <div class="alert alert-danger">
                        {!! session()->get('error') !!}
                    </div>
                @endif
                        <form action="{{URL::to('update-cart')}}" method="post">
                              {{csrf_field()}}
                        <table>

                            <thead>
                                <tr>
                                    <th >Sản phẩm</th>
                                    <th >Giá</th>
                                    <th >Số lượng</th>
                                    <th >Tổng tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                                  
                            <tbody>
                                <tr>

                                        @if(Session::get('cart')==true)
                                        @php
                                         $total = 0;
                                        @endphp
                                        @foreach(Session::get('cart') as $key => $cart)
                                        @php
                                            $subtotal = $cart['product_price']*$cart['product_qty'];
                                            $total+=$subtotal;
                                        @endphp
                                         
                          
                                    <td class="cart__product__item">
                                        <img src="{{asset('public/upload/product/'.$cart['product_image'])}}" width="90" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$cart['product_name']}}</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{number_format($cart['product_price'],0,',','.')}}đ</td>
                                    
                                       
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input name="cart_qty[{{$cart['session_id']}}]" min="1" value="{{$cart['product_qty']}}">                                         
                                        </div>
                                      
                                          
                              
                                    </td>
                                    <td class="cart__total">
                                        {{number_format($subtotal,0,',','.')}}đ
                                    </td> 
                                      <td class="cart__close">
                                        <a href="{{URL::to('/del-product/'.$cart['session_id'])}}"><span class="icon_close"></span>      
                                   </a>

                                     </td>            
                                    </td>                        
                                </tr>
                            </tbody>

                            @endforeach
                <div class="row">
                <div class="col-lg-6">
                 <tr>
                            <td>
                                <div class="cart__product__item__title">
                                            <h6>Tổng <span >{{number_format($total,0,',','.')}}đ</span></h6>  
                                        </div>
</br>                     
                            @if(Session::get('coupon'))
                            <li>
                                            
                                            @foreach(Session::get('coupon') as $key => $cou)
                                            @if($cou['coupon_condition']==1)
                                            Mã giảm : {{$cou['coupon_number']}} %

                                            <p>
                                                @php 
                                                $total_coupon = ($total*$cou['coupon_number'])/100;

                                                @endphp
                                            </p>
                                            <p>
                                                @php 
                                                $total_after_coupon = $total-$total_coupon;
                                                @endphp
                                            </p>
                                            @elseif($cou['coupon_condition']==2)
                                            Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k

                                            <p>
                                                @php 
                                                $total_coupon = $total - $cou['coupon_number'];

                                                @endphp
                                            </p>
                                            @php 
                                            $total_after_coupon = $total_coupon;
                                            @endphp
                                            @endif
                                            @endforeach
                                        </li>
                            @endif
                            @if(Session::get('fee'))

                            <li>

                                Phí vận chuyển :   <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span>
                                <a href="{{URL::to('/del-fee')}}">Xóa<span></span></a>

                            </li>
                            <?php $total_after_fee = $total + Session::get('fee'); ?>
                            @endif
                        </br>
                        <div class="cart__product__item__title">
                                            <h3>Tổng hàng: <span >
                                                
                                                @php 
                                                if(Session::get('fee') && !Session::get('coupon')){
                                                    $total_after = $total_after_fee;
                                                    echo number_format($total_after,0,',','.').'đ';

                                                }elseif(!Session::get('fee') && Session::get('coupon')){
                                                    $total_after = $total_after_coupon;
                                                    echo number_format($total_after,0,',','.').'đ';
                                                }elseif(Session::get('fee') && Session::get('coupon')){
                                                    $total_after = $total_after_coupon;
                                                    $total_after = $total_after + Session::get('fee');
                                                    echo number_format($total_after,0,',','.').'đ';
                                                }elseif(!Session::get('fee') && !Session::get('coupon')){
                                                    $total_after = $total;
                                                    echo number_format($total_after,0,',','.').'đ';
                                                }

                                                @endphp

                                            </span></h3>  
                                       
                                                
                        </div>
                    

                        </td>
                 </tr>      
                            

                             <td><div class="cart__btn"><a  href="{{URL::to('/del-all-product')}}">Xóa tất cả giỏ</a></div></td>
                            <td>
                                @if(Session::get('coupon'))
                                <div class="cart__btn"><a  href="{{URL::to('/unset-coupon')}}">Xóa mã </a></div>
                                @endif
                            </td>
                             @else
                             <td>
                              @php
                            
                              echo 'Làm ơn thêm sản phẩm vào giỏ hàng'
                        
                              @endphp
                          </td>
                        @endif

              </form>
                         </table>
                    </div>
                </div>
            </div>
            
        
            @if(Session::get('cart'))
            <div class="discount__content">
                        <h6>Mã giảm giá</h6>
                        <form action="{{URL('/check-coupon')}}" method="post">
                             {{csrf_field()}}
                            <input type="text" placeholder="Nhập mã" name="coupon">
                            <button type="submit" name="check_coupon" class="site-btn check_coupon">Áp dụng</button>
                        </form>
                    </div>
                </div>
            @endif    

        </section>
    </div>
        </div>
        <!-- Checkout Section End -->

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
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        }); 
    });
     
</script>
 <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
    </script>

  <script type="text/javascript">
            $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "Xác nhận đơn hàng",
                  text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn, Mua hàng",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                      
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });
                        window.setTimeout(function(){ 
                             window.location.href = "{{url('/history')}}";
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                      }           
                });  
            });
        });

    </script>
</body>

    </html>