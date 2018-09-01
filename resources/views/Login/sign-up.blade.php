<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{ asset('public/Backend/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{ asset('public/Backend/')}}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{ asset('public/Backend/')}}/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="{{ asset('public/Backend/')}}/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Register Now</h1>
			</div>
			<div class="login-block">
				<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
					<input type="text" name="email" placeholder="Email" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					   @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    	@endif
					<input type="password" name="password" class="lock" placeholder="Password">
					 @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    	@endif
					<input type="password" name="password_confirmation" class="lock" placeholder="Confirm Password">
					<input type="text" name="mobile" class="lock" placeholder="Mobile Number">

 						@if ($errors->has('mobile'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                    	@endif

					<input type="submit" name="Sign In" value="Register">	
					
					<h2>or login with</h2>
					<div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
						</ul>
					</div>
				</form>
				<h5><a href="{{ url('/login') }}">Already Register</a>Go Back To login</h5>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 Shoppy. All Rights Reserved | Design by  <a href="https:imranweb-bd.com" target="_blank">imranweb-bd.com</a> </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="{{ asset('public/Backend/')}}/js/jquery.nicescroll.js"></script>
		<script src="{{ asset('public/Backend/')}}/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="{{ asset('public/Backend/')}}/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
