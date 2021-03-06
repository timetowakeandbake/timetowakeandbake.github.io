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
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading" style="
    text-align: center;
    color: chocolate;
    font-size: x-large;
    font-weight: bolder;
">
     Xem chi ti???t ????n h??ng ???? ?????t {{$order_code}}
   </div>
   
   <div class="table-responsive">
    <?php
    $message = Session::get('message');
    if($message){
      echo '<span class="text-alert">'.$message.'</span>';
      Session::put('message',null);
    }
    ?>
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
         
          <th>T??n kh??ch h??ng</th>
          <th>S??? ??i???n tho???i</th>
          <th>Email</th>
          
          
          <th style="width:30px;"></th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td>{{$customer->customer_name}}</td>
          <td>{{$customer->customer_phone}}</td>
          <td>{{$customer->customer_email}}</td>

        </tr>
        
      </tbody>
    </table>

  </div>
  
</div>
</div>
<br>
<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading" style="
    text-align: center;
    color: cornflowerblue;
    font-size: large;
    font-weight: 600;
">
     Th??ng tin v???n chuy???n h??ng
   </div>
   </div>
   
   
   <div class="table-responsive">
    <?php
    $message = Session::get('message');
    if($message){
      echo '<span class="text-alert">'.$message.'</span>';
      Session::put('message',null);
    }
    ?>
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
         
          <th>T??n ng?????i v???n chuy???n</th>
          <th>?????a ch???</th>
          <th>S??? ??i???n tho???i</th>
          <th>Email</th>
          <th>Ghi ch??</th>
          <th>H??nh th???c thanh to??n</th>
          
          
          <th style="width:30px;"></th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
         
          <td>{{$shipping->shipping_name}}</td>
          <td>{{$shipping->shipping_address}}</td>
          <td>{{$shipping->shipping_phone}}</td>
          <td>{{$shipping->shipping_email}}</td>
          <td>{{$shipping->shipping_notes}}</td>
          <td>@if($shipping->shipping_method==0) Chuy???n kho???n @else Ti???n m???t @endif</td>
          
          
        </tr>
        
      </tbody>
    </table>

  </div>
  
</div>
</div>
<br><br>

<div class="table-agile-info">
  
  <div class="panel panel-default">
   <div class="panel-heading" style="
    text-align: center;
    color: cornflowerblue;
    font-size: large;
    font-weight: 600;
">
    Li???t k?? chi ti???t ????n h??ng
   </div>
    </div>
    
    <div class="table-responsive">
      <?php
      $message = Session::get('message');
      if($message){
        echo '<span class="text-alert">'.$message.'</span>';
        Session::put('message',null);
      }
      ?>
      
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Th??? t???</th>
            <th>T??n s???n ph???m</th>
            <th>S??? l?????ng kho c??n</th>
            <th>M?? gi???m gi??</th>
            <th>Ph?? ship h??ng</th>
            <th>S??? l?????ng</th>
            <th>Gi?? b??n</th>
            <th>T???ng ti???n</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php 
          $i = 0;
          $total = 0;
          @endphp
          @foreach($order_details as $key => $details)

          @php 
          $i++;
          $subtotal = $details->product_price*$details->product_sales_quantity;
          $total+=$subtotal;
          @endphp
          <tr class="color_qty_{{$details->product_id}}">
           
            <td><i>{{$i}}</i></td>
            <td>{{$details->product_name}}</td>
            <td>{{$details->product->product_quantity}}</td>
            <td>@if($details->product_coupon!='no')
              {{$details->product_coupon}}
              @else 
              Kh??ng m??
              @endif
            </td>
            <td>{{number_format($details->product_feeship ,0,',','.')}}??</td>
            <td>

              <input type="number" min="1" readonly {{$order_status==2 ? 'disabled' : ''}} class="order_qty_{{$details->product_id}}" value="{{$details->product_sales_quantity}}" name="product_sales_quantity">

              <input type="hidden" name="order_qty_storage" class="order_qty_storage_{{$details->product_id}}" value="{{$details->product->product_quantity}}">

              <input type="hidden" name="order_code" class="order_code" value="{{$details->order_code}}">

              <input type="hidden" name="order_product_id" class="order_product_id" value="{{$details->product_id}}">

            

            </td>
            <td>{{number_format($details->product_price ,0,',','.')}}??</td>
            <td>{{number_format($subtotal ,0,',','.')}}??</td>
          </tr>
          @endforeach
          <tr>
            <td colspan="2" style="
    font-size: x-large;
    font-style: italic;
    font-weight: 500;
    color: darkmagenta;
">  
              @php 
              $total_coupon = 0;
              @endphp
              @if($coupon_condition==1)
              @php
              $total_after_coupon = ($total*$coupon_number)/100;
              echo 'T???ng gi???m :'.number_format($total_after_coupon,0,',','.').'</br>';
              $total_coupon = $total + $details->product_feeship - $total_after_coupon ;
              @endphp
              @else 
              @php
              echo 'T???ng gi???m :'.number_format($coupon_number,0,',','.').'k'.'</br>';
              $total_coupon = $total + $details->product_feeship - $coupon_number ;

              @endphp
              @endif

              Ph?? ship : {{number_format($details->product_feeship,0,',','.')}}??</br> 
              Thanh to??n: {{number_format($total_coupon,0,',','.')}}?? 
          
            </td>
          </tr>
          
      </tbody>
    </table>
    <a target="_blank" href="{{url('/print-order/'.$details->order_code)}}">In ????n h??ng</a>


  </div>
  
</div>
</div>
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

</body>

</html>