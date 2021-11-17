<html lang="en">
<head>
<title>Đăng Nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />

<!-- css files -->
<link href="{{('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{('public/frontend/css/stylelogin.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}" type="text/css">
<!-- /css files -->


<body>
<div class="container demo-1">
	<div class="content">
        	<div id="large-header" class="large-header" style="
    color: aqua;
    font-size: 24px;

">

			<h1>Login</h1>
				<div class="main-agileits">
				<!--form-stars-here-->
						<div class="form-w3-agile">
							<h2>Đăng nhập ngay</h2>
							@if(session()->has('message'))
							<div class="alert alert-success">
								{!! session()->get('message') !!}
							</div>
							@elseif(session()->has('error'))
							<div class="alert alert-danger">
								{!! session()->get('error') !!}
							</div>
							@endif
							</br>
							<form action="{{URL::to('/login-customer')}}" method="POST">
								{{csrf_field()}}
								<div class="form-sub-w3">
									<input type="text" name="email_account" placeholder="Tài Khoản" required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password_account" placeholder="Mật Khẩu" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<p class="p-bottom-w3ls">Quên mật khẩu ?<a class href="{{URL::to('/quen-mat-khau')}}">  Nhấn vào đây</a></p>
								<p class="p-bottom-w3ls1">Tài khoản mới?<a class href="{{URL::to('/resigter-checkout')}}">  Đăng kí</a></p>
								<div class="clear"></div>
								<div class="submit-w3l">
									
									<input type="submit" value="Đăng Nhập">
								</div>
							</form>
							<div class="social w3layouts">
								<div class="heading">
									<h5>Đăng nhập với</h5>
									<div class="clear"></div>
								</div>
								<div class="icons">
									<a href="{{url('login-facebook-customer')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="{{url('login-customer-google')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
				<!--//form-ends-here-->
				</div><!-- copyright -->
					<div class="copyright w3-agile">
						<p> Namkdshop <a href="{{URL::to('/trang-chu')}}" target="_blank"> </a> </p>
					</div>
				
        </div>
	</div>
</div>	

</body>
</html>