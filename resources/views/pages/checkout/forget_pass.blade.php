<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Xác thực Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />

<!-- css files -->
<link href="{{('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{('public/frontend/css/stylelogin.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}" type="text/css">
<!-- /css files -->


<body>
	
<div class="container demo-2">
	<div class="content">
        <div id="large-header" class="large-header" style="
    color: aqua;
">
			<h1>Typing Gmail</h1>
				<div class="main-agileits">
				@if(session()->has('message'))
				<div class="alert alert-success">
					{!! session()->get('message') !!}
				</div>
				@elseif(session()->has('error'))
				<div class="alert alert-danger">
					{!! session()->get('error') !!}
				</div>
				@endif
				<!--form-stars-here-->
						<div class="form-w3-agile1">
							<form action="{{url('/recover-pass')}}" method="POST">
								@csrf
								<div class="form-sub-w3">
									<input type="text" name="email_account" placeholder="Nhập email..." />
							
									<button type="submit" class="site-btn btn-default">Gửi mail</button>
						
								</div>
								</form>

				</br>
											<p style="
							    text-align: center;
							    font-size: 25px;
							    font-style: oblique;
							    color: antiquewhite;
							">Điền vào Email bị hoặc quên mật khẩu</p>
								</div>
								<div class="clear"></div>
													</div>
				<!--//form-ends-here-->
				</div>
        </div>
	</div>
</div>	

</body>
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
</html>