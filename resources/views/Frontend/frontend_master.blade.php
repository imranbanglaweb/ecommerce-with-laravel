@include('Frontend.includes.header')
@include('Frontend.includes.header_bottom')
<!-- banner -->
<div class="ban-top">
<div class="container">
	@yield('header_menu')
	{{-- Header menu --}}


<div class="clearfix"></div>
</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body modal-body-sub_agile">
<div class="col-md-8 modal_body_left modal_body_left1">
<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>

{!! Form::open(['url' => '/user_admin', 'method'=>'post']) !!}

<div class="styled-input">
<input type="email" name="email" id="email" required=""> 
<label>Email</label>
<span></span>
 @if ($errors->has('email'))
    <span class="help-block alert-warning">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
</div> 
<div class="styled-input">
<input type="password" name="password" id="password" required=""> 
<label>Password</label>
<span></span>
</div> 
<input type="submit" value="Sign In">
</form>

	<div class="clearfix"></div>
	<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

</div>
<div class="col-md-4 modal_body_right modal_body_right1">
		@php     

		$logos  =DB::table('tbl_logo')->latest()->first();

	 @endphp
<img src="{{ asset($logos->logo_image)}}" alt=" "/>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-- //Modal content-->
</div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body modal-body-sub_agile">
<div class="col-md-8 modal_body_left modal_body_left1">
<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
<form action="#" method="post">
<div class="styled-input agile-styled-input-top">
<input type="text" name="Name" required="">
<label>Name</label>
<span></span>
</div>
<div class="styled-input">
<input type="email" name="Email" required=""> 
<label>Email</label>
<span></span>
</div> 
<div class="styled-input">
<input type="password" name="password" required=""> 
<label>Password</label>
<span></span>
</div> 
<div class="styled-input">
<input type="password" name="Confirm Password" required=""> 
<label>Confirm Password</label>
<span></span>
</div> 
<input type="submit" value="Sign Up">
{!! Form::close() !!}
	<div class="clearfix"></div>
	<p><a href="#">By clicking register, I agree to your terms</a></p>

</div>
<div class="col-md-4 modal_body_right modal_body_right1">
<img src="{{ asset($logos->logo_image)}}" alt=" "/>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-- //Modal content-->
</div>
</div>
<!-- //Modal2 -->

<!-- banner -->
{{-- @yield('slider') --}}
<!-- //banner -->
<div class="banner_bottom_agile_info">
<div class="container">
 		<div class="row">
 			
 			<div class="col-md-3">
		 	@yield('categories')
		 	
		 	@yield('brand')
		 	</div>
		 	@yield('pageDisplay')
		 	@yield('productView')
		 	@yield('product_details')
		 	@yield('shipping')
		 	@yield('billing')
		 	@yield('order_complete')
		 	@yield('payment')
		 	@yield('user_login')
		 	@yield('checkout')
		 	<div class="clearfix"></div>
		 	@yield('card')
		 	<div class="clearfix"></div>
		 	@yield('new_arivals')
		 	{{-- @include('Frontend.categoryWiseProduct'); --}}
 		
 			{{-- end category Wise Products --}}
 		</div>
 		{{-- end categories --}}
		
 	{{-- end Brand --}}
 </div>
</div> 
</div>
<!-- schedule-bottom -->
<div class="schedule-bottom">

<div class="clearfix"> </div>
</div>

<br>
<!--/grids-->
						
<!--/grids-->
<!-- /new_arrivals --> 
@yield('new_arrivals') 
<!-- /we-offer -->
@yield('we_offer')
<!-- //we-offer -->

@yield('coupons')
@yield('footer_bottom')