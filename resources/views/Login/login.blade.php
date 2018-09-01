<!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive" />
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
				<h1>Login</h1>
			</div>
			<div class="login-block">
			 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
					<input type="text" name="email" placeholder="Email"  class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					<input type="password" name="password" class="lock" placeholder="Password"  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}  id="brand1">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Login">	
					<h3>
						Not a member?
					<a href="{{ route('register') }}"> 
						Sign up now</a>
					</h3>				
					<h2>or login with</h2>
					<div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
						</ul>
					</div>
				</form>
				<h5><a href="{{ url('/') }}">Go Back to Home</a></h5>
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


                      
						
