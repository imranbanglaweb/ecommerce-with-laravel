@section('payment')
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
				<p>Payment To</p>
				<hr>
				<div class="form-one">
			{!! Form::open(['url' => '/place-order','method' => 'post']) !!}
			
				Cash On delivery
				<input type="radio" name="payment_type" value="Cash_On_delivery">
			
				SSL Commerse
				<input type="radio" name="payment_type" value="SSL_Commerze">
			
				Paypal
				<input type="radio" name="payment_type" value="Paypal">
		
					<hr>
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
