@section('footer_bottom')
<!-- footer -->
<div class="footer">
<div class="footer_agile_inner_info_w3l">
<div class="col-md-3 footer-left">
<h2><a href="index.html"><span>B</span>Shop</a></h2>
<p>This is Simple ecommerce website where you can buy anything</p>
<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
				<li><a href="#" class="facebook">
					  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
				<li><a href="#" class="twitter"> 
					  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
				<li><a href="#" class="instagram">
					  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
				<li><a href="#" class="pinterest">
					  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
			</ul>
</div>
<div class="col-md-9 footer-right">
<div class="sign-grds">
<div class="col-md-4 sign-gd">
<h4>Our <span>Category</span> </h4>
<ul>
	<li><a href="{{url('/')}}">Home</a></li>
	@foreach($menu as $footer_menu)

<li><a href="{{ url('/mens')}}">
	{{ $footer_menu->category_name }}
	</a>
</li>
@endforeach
</ul>
</div>

<div class="col-md-5 sign-gd-two">
<h4>Store <span>Information</span></h4>
<div class="w3-address">
<div class="w3-address-grid">
<div class="w3-address-left">
<i class="fa fa-phone" aria-hidden="true"></i>
</div>
<div class="w3-address-right">
<h6>Phone Number</h6>
<p>+1 234 567 8901</p>
</div>
<div class="clearfix"> </div>
</div>
<div class="w3-address-grid">
<div class="w3-address-left">
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
<div class="w3-address-right">
<h6>Email Address</h6>
<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
</div>
<div class="clearfix"> </div>
</div>
<div class="w3-address-grid">
<div class="w3-address-left">
<i class="fa fa-map-marker" aria-hidden="true"></i>
</div>
<div class="w3-address-right">
<h6>Location</h6>
<p>Broome St, NY 10002,California, USA. 

</p>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
<div class="col-md-3 sign-gd flickr-post">
<h4>Flickr <span>Posts</span></h4>
<ul>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t1.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t2.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t3.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t4.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t1.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t2.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t3.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t2.jpg" alt=" " class="img-responsive" /></a></li>
<li><a href="single.html"><img src="{{ asset('public/Frontend/images/')}}/t4.jpg" alt=" " class="img-responsive" /></a></li>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
<div class="agile_newsletter_footer">
<div class="col-sm-6 newsleft">
<h3>SIGN UP FOR NEWSLETTER !</h3>
</div>
<div class="col-sm-6 newsright">
<form action="#" method="post">
<input type="email" placeholder="Enter your email..." name="email" required="">
<input type="submit" value="Submit">
</form>
</div>

<div class="clearfix"></div>
</div>
<p class="copy-right">&copy <?php echo date('Y');?> B Shop. All rights reserved | Design by <a href="https://imranweb-bd.com/" target="blank">imranweb</a></p>
</div>
</div>
<!-- //footer -->

<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content modal-info">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
</div>
<div class="modal-body modal-spa">
<div class="login-grids">
<div class="login">
<div class="login-bottom">
<h3>Sign up for free</h3>
<form>
<div class="sign-up">
	<h4>Email :</h4>
	<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
</div>
<div class="sign-up">
	<h4>Password :</h4>
	<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
	
</div>
<div class="sign-up">
	<h4>Re-type Password :</h4>
	<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
	
</div>
<div class="sign-up">
	<input type="submit" value="REGISTER NOW" >
</div>

</form>
</div>
<div class="login-right">
<h3>Sign in with your account</h3>
<form>
<div class="sign-in">
	<h4>Email :</h4>
	<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
</div>
<div class="sign-in">
	<h4>Password :</h4>
	<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
	<a href="#">Forgot password?</a>
</div>
<div class="single-bottom">
	<input type="checkbox"  id="brand" value="">
	<label for="brand"><span></span>Remember Me.</label>
</div>
<div class="sign-in">
	<input type="submit" value="SIGNIN" >
</div>
</form>
</div>
<div class="clearfix"></div>
</div>
<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
</div>
</div>
</div>
</div>
</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
{{-- <link rel="stylesheet" href="{{ asset('public/Frontend/css/')}}/bootstrap.min.css"> --}}
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/jquery-2.1.4.min.js"></script>
@include('Frontend.Cart.cartJs')
@include('Backend.Includes.tinymc')
<!--scrolling js-->
<script src="{{ asset('public/Frontend/')}}/js/jquery.nicescroll.js"></script>
<script>
  $("body").niceScroll({
cursorcolor:"skyblue",
cursorwidth:"7px",
cursorborder:"1px solid aquamarine",
cursorborderradius:2
});
</script>
<script src="{{ asset('public/Frontend/')}}/js/imagezoom.js"></script>				
<!-- FlexSlider -->
<script src="{{ asset('public/Frontend/')}}/js/jquery.flexslider.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
$('.flexslider').flexslider({
animation: "slide",
controlNav: "thumbnails"
});
});
</script>
<!-- //js -->
<script src="{{ asset('public/Frontend/')}}/js/modernizr.custom.js"></script>



<!-- Custom-JavaScript-File-Links --> 
<!-- cart-js -->
<script src="{{ asset('public/Frontend/')}}/js/minicart.min.js"></script>
<script>
// Mini Cart
paypal.minicart.render({
action: '#'
});

if (~window.location.search.indexOf('reset=true')) {
paypal.minicart.reset();
}
</script>

<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="{{ asset('public/Frontend/')}}/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
<script src="{{ asset('public/Frontend/')}}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('public/Frontend/')}}/js/jquery.countup.js"></script>
<script>
$('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/jquery.easing.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){		
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
*/

$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/bootstrap.js"></script>
</body>
</html>
@show
