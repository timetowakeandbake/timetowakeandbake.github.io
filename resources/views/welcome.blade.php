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
                             <a href="{{URL::to('/logout-checkout')}}">????ng Xu???t</a> 
                            <?php
                        }else{
                            ?>
                            <a href="{{URL::to('/login-checkout')}}">????ng Nh???p</a>
                            <a href="{{URL::to('/resigter-checkout')}}">????ng k??</a>
                        
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
                            <li class="active"><a href="{{URL::to('/trang-chu')}}">Trang Ch???</a></li>
                          
                            <li><a href="{{URL::to('/gio-hang')}}">Gi??? H??ng</a></li>
                            <li><a href="{{URL::to('/checkout')}}">Thanh To??n</a></li>

                          
                            <li><a>Tin T???c</a>
                                <ul class="dropdown">
                                    @foreach($category_post as $key => $danhmucbaiviet)
                                    <li><a href="{{URL::to('/danh-muc-bai-viet/'.$danhmucbaiviet->cate_post_slug)}}">{{$danhmucbaiviet->cate_post_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{URL::to('/lien-he')}}">Li??n H???</a></li>
                            <li><a href="{{URL::to('/history')}}">Lich S??? Mua H??ng</a></li>
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
                             <a href="{{URL::to('/logout-checkout')}}">????ng Xu???t</a>      
                            <?php
                        }else{
                            ?>
                            <a href="{{URL::to('/login-checkout')}}">????ng Nh???p</a>
                            <a href="{{URL::to('/resigter-checkout')}}">????ng k??</a>
                        
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


    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="{{asset('public/frontend/images/category1.jpg')}}">
                    <div class="categories__text">
                        <h1>Fazion</h1>
                        <p>Th???i trang d??nh cho nh???ng qu?? c??, sang ch???nh, hi???n ?????i, v?? kh??ng k??m ph???n xinh ?????p.</p>            
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    @foreach($category as $key =>$cate)
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        
                        <div class="categories__item set-bg" data-setbg="{{URL::to('public/upload/product/'.$cate->category_img)}}">
                            <div class="categories__text">
                                <h4>{{$cate->category_name}}</h4>
                                <p></p>
                                <a href="{{URL::to('/danh-muc-san-pham2/'.$cate->category_id)}}">Kh??m ph?? ngay</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="product spad">
     @yield('content')
</section>
@php
    $i= 0;
@endphp
@foreach($slider as $key =>$slide)
@php
    $i++;
@endphp
{{-- <img src="public/uploads/slider/{{ $slide->slider_image }}" height="120" width="500"> --}}
<section class= "banner set-bg" data-setbg="{{asset('public/uploads/slider/'.$slide->slider_image)}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel" {{$i==1 ? 'active' : ''}}>
                    <div class="banner__item">
                        <div class="banner__text">
       
                            <h2>{{$slide->slider_desc}}</h2>
                            <a href="#">Kh??m ph?? ngay</a>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endforeach

</section>

<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Mi???n ph?? giao h??ng</h6>
                    <p>Cho ????n tr??n 500.000 VN??</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Tr??? l???i ti???n</h6>
                    <p>N???u s???n ph???m c?? v???n ?????</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>H??? tr??? 24/7</h6>
                    <p>H??? tr??? t???n t??m</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Thanh to??n</h6>
                    <p>100% an to??n</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <p>Lu??n ?????ng h??nh c??ng b???n</p>
                    <div class="footer__payment">
                        <a ><img src="{{asset('public/frontend/images/payment-1.png')}}" alt=""></a>
                        <a ><img src="{{asset('public/frontend/images/payment-2.png')}}" alt=""></a>
                        <a ><img src="{{asset('public/frontend/images/payment-3.png')}}" alt=""></a>
                        <a ><img src="{{asset('public/frontend/images/payment-4.png')}}" alt=""></a>
                        <a ><img src="{{asset('public/frontend/images/payment-5.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Li??n k???t nhanh</h6>
                    <ul>
                        <li><a href="{{URL::to('/lien-he')}}">V??? ch??ng t??i</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="{{URL::to('/lien-he')}}">Li??n H???</a></li>
                        <li><a >C??u h???i</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>T??i kho???n</h6>
                    <ul>
                        <li><a href="#">T??i kho???n c???a t??i</a></li>
                        <li><a href="{{URL::to('/gio-hang')}}">Theo d??i ????n h??ng</a></li>
                        <li><a href="{{URL::to('/checkout')}}">Thanh To??n</a></li>
                        <li><a href="{{URL::to('/gio-hang')}}">Gi??? h??ng</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>Th?? m???i</h6>
                    <form action="Thank_you.html">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">G???i</button>
                    </form>
                    <div class="footer__social">
                        <a target="_blank" href="https://www.facebook.com/Nam.khodo/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/Namkhodo"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCUwg5Rhz88VY1nV5biJ_1Pg"><i class="fa fa-youtube-play"></i></a>
                        <a target="_blank" href="https://www.instagram.com/nam_kd/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://www.pinterest.com/znamkhodoz/_saved/"><i class="fa fa-pinterest"></i></a>
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
        <form action= "{{URL::to('/tim-kiem')}}" class="search-model-form" method="post">
            {{csrf_field()}}
            <input type="text" name ="keywords_submit" id="search-input" placeholder="T??m ki???m ??? ????y">
            <input type="submit" class="btn btn-success" value="T??m ki???m" name="search_iteam">
            
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
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
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




</body>

</html>