@section('card')
<meta name="csrf-token" content="{{ csrf_token() }}">
<section id="cart_items">
<section id="cart">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead class="bg-info">
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="text-center">Product Name</td>
						<td class="price">
						Price
						</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
			@if(is_null(Cart::content()))
				 <p>
				 	Sorry No Cart To Show Added Cart
				 </p>
				@else
				@foreach(Cart::content() as $cart) 

					<tr>
						<td class="cart_product">
							<a href="">
		<img src="{{ asset($cart->options->image) }}" alt="" width="80" height="50px">
		</a>
						</td>
						<td class="cart_description">
							<h4><a href="">
							{{$cart->name}}
							</a></h4>
							
						</td>
						<td class="cart_price">
							<p>
							BD {{$cart->price}}
							</p>
						</td>
						<td class="cart_quantity">
					<div class="cart_quantity_button">
		{{ Form::open(array('url' => 'cart_update')) }}
	{{-- 	<input type="text" name="qty" id="qty" value="{{$cart->qty}}"> --}}
		<input type="hidden" id="rowId" name="rowId" value="{{$cart->rowId}}">
	<select class="cart_quantity_input"  name="qty" id="qty">
		<option value="{{$cart->qty}}">{{$cart->qty}}</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	</select>
	<button class="btn-info" type="submit" id=""><i class="fa fa-edit"></i></button>
	{{ Form::close() }}
					</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">
							BD {{$cart->subtotal}}</p>
						</td>
						<td class="cart_delete">
		<a class="cart_quantity_delete" href="{{ url('/delete-cart/'.$cart->rowId) }}">
			<i class="fa fa-times"></i>
		</a>
						</td>
					
					</tr>
					
				@endforeach
				@endif

				</tbody>
			</table>
			<span class="pull-right btn btn-warning"><strong><i class="fa fa-money"></i>  Total</strong> :
			 @php
			 $total =Cart::subtotal();
		 		Session::put('total',$total);
		 		echo $total;
			@endphp
		</span>
			
		</div>
		<hr>
		<div class="row">
				<div class="col-md-3 col-md-offset-3">
					<a class="btn btn-info">Continue Shopping</a>
				</div>
				<div class="col-md-6">
					<a class="btn btn-primary" href="{{ url('/user-login')}}">Proceed To Checkout</a>
				</div>
			</div>
	</div>
</section> <!--/#cart_items-->
</section> <!--/#cart_items-->
@endsection
{{-- @include('Frontend.productView') --}}

