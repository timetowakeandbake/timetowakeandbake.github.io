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
							@php 
						$token = $_GET['token'];
						$email = $_GET['email'];
					@endphp
										<h2 style="
					    text-align: center;
					    color: aqua;
					    font-size: revert;
					">Điền mật khẩu mới</h2>
							<form action="{{url('/reset-new-pass')}}" method="POST">
						@csrf
						<div class="form-sub-w3">
						<input type="hidden" name="email" value="{{$email}}"/>
						<input type="hidden"name="token" value="{{$token}}"/>
						<input type="text" name="password_account" placeholder="Nhập mật khẩu mới..." />
						<button type="submit" class="btn btn-default">Gửi</button></div>
					</form>
						</div>
				<!--//form-ends-here-->
				</div>
        </div>
	</div>
</div>	

</body>
</html>