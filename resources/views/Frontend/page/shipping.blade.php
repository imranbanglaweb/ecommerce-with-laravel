@section('shipping')
<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
	<ol class="breadcrumb">
	  <li><a href="#">Home</a></li>
	  <li class="active">Check out</li>
	</ol>
</div><!--/breadcrums-->



<div class="register-req">
	<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
</div><!--/register-req-->

<div class="shopper-informations">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 clearfix">
			<div class="bill-to">
				<p>Shipp To</p>
				<div class="form-one">
			{!! Form::open(['url' => '/save-shipping','method' => 'post']) !!}
			<input type="text" name="shipping_name" placeholder="Enter Shipping Name">
			
			<input type="text" name="company_name" placeholder="Enter Company Name">
			<input type="email" name="email" placeholder="Enter Email">
			<input type="text" name="mobile" placeholder="Enter mobile No">
			<input type="text" name="address" placeholder="Enter Address" >

			<select name="country" class="form-control">
				<option>-- State / Province / Region --</option>
				<option value="un">United States</option>
				<option value="bn">Bangladesh</option>
				<option value="uk">UK</option>
				<option value="in">India</option>
				<option value="pk">Pakistan</option>
				<option value="uc">Ucrane</option>
				<option value="cn">Canada</option>
				<option value="db">Dubai</option>
			</select>
			<br>

			<select name="city"  class="form-control">
				<option value="0">Dhaka</option>
				<option value="1">Dilhi</option>
				<option value="2">Dubai</option>
				<option value="3">Tokio</option>
			</select>
			<br>
			<input type="text" name="zip_code" placeholder="Customer Zip Code" >
			<input type="text" name="phone_number" placeholder="Customer Fax Number" >
					
			<button class="btn btn-info" type="submit" class="btn btn-default">
				Save $ Next
			</button>
			{!! Form::close() !!}
		</div>

			</div>
		</div>
					
	</div>
</div>
<br>
</section> <!--/#cart_items-->
@endsection
