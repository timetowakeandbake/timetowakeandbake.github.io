
<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng ký</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />

<!-- css files -->
<link href="{{('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{('public/frontend/css/stylelogin.css')}}" rel="stylesheet" type="text/css" media="all" />


	</head>

<body>
<div class="container demo-1">
	<div class="content">
        <div id="large-header" class="large-header" style="
    color: aqua;
">
			<h1>Đăng Kí </h1>
				<div class="main-agileits">
				<!--form-stars-here-->
						<div class="form-w3-agile">
							<h2>Đăng kí ngay</h2>
							<form action="{{URL::to('/add-customer')}}" method="POST">
								{{csrf_field()}}
								<div class="form-sub-w3">
									<input type="text" name="customer_name" placeholder="Họ và tên" required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								
								<div class="form-sub-w3">
									<input type="text" name="customer_email" placeholder="Địa chỉ email" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								
								<div class="form-sub-w3">
									<input type="password" name="customer_password" placeholder=" Mật khẩu" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								
								
								<div class="form-sub-w3">
									<input type="text" name="customer_phone" placeholder="Phone" required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<p class="p-bottom-w3ls1">Quay lại đăng nhập<a class href="{{URL::to('/login-checkout')}}">  Đăng<ng></ng> nhập đây</a></p>
								<div class="clear"></div>
								<div class="submit-w3l">
									<input type="submit" value="Đăng kí">
								</div>
							</form>
							<div class="social w3layouts">
								<div class="heading">
									<h5>Đăng nhập với</h5>
									<div class="clear"></div>
								</div>
								<div class="icons">
									<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
									<a href="https://www.linkedin.com/home"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
				<!--//form-ends-here-->
				</div><!-- copyright -->
					<div class="copyright w3-agile">
						<p> Namkdshop <a href="#" target="_blank"></a></p>
					</div>
					<!-- //copyright --> 
        </div>
	</div>
</div>	

</body>
</html>