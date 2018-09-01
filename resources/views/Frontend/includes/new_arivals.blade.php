@section('new_arivals')
<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
<div class="container">
<h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
<div id="horizontalTab">
<ul class="resp-tabs-list">
	@foreach($menu as $category)
		<li> {{$category->category_name}}</li>
	@endforeach
</ul>
<div class="resp-tabs-container">
<!--/tab_one-->
<div class="tab1">
@foreach($data as $product)
@php
	// $catId = DB::table('tbl_category')->pluck('id');
@endphp
@if($product->category_id == 1)
<div class="col-md-4  product-men">
<div class="men-pro-item">
<div class="men-thumb-item">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-front img-responsive">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-back  img-responsive">
<div class="men-cart-pro">
<div class="inner-men-cart-pro">
<a href="{{url('/product_details/'.$product->product_id)}}" class="link-product-add-cart">Quick View</a>
</div>
<hr>
<br>
</div>
<span class="product-new-top">{{$product->brand_name}}</span>

</div>
<div class="item-info-product ">

<div class="info-product-price">
<span class="item_price">${{$product->product_price}}</span>
<del>$69.71</del>

</div>
	<button id="prdId{{$product->product_id}}" class="btn btn-success my-cart-btn" data-id="prdId{{$product->product_id}}" data-name="{{$product->product_name}}" data-summary="{{$product->product_shortdis}}" data-price="{{$product->product_price}}" data-quantity="1" data-image="{{ asset($product->image_option)}}" value="{{$product->product_id}}">Add to Cart</button>				
</div>
</div>
</div>

@endif
@endforeach

<div class="clearfix"></div>
</div>
<!--//tab_one-->
<!--/tab_two-->
<div class="tab2">
@foreach($data as $product)	
@if($product->category_id == 5)
<div class="col-md-4  product-men">
<div class="men-pro-item">
<div class="men-thumb-item">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-front img-responsive">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-back  img-responsive">
<div class="men-cart-pro">
<div class="inner-men-cart-pro">
<a href="{{url('/product_details/'.$product->product_id)}}" class="link-product-add-cart">Quick View</a>
</div>
<hr>
<br>
</div>
<span class="product-new-top">{{$product->brand_name}}</span>

</div>
<div class="item-info-product ">

<div class="info-product-price">
<span class="item_price">${{$product->product_price}}</span>
<del>$69.71</del>

</div>
	<button id="prdId{{$product->product_id}}" class="btn btn-success my-cart-btn" data-id="prdId{{$product->product_id}}" data-name="{{$product->product_name}}" data-summary="{{$product->product_shortdis}}" data-price="{{$product->product_price}}" data-quantity="1" data-image="{{ asset($product->image_option)}}" value="{{$product->product_id}}">Add to Cart</button>				
</div>
</div>
</div>
@endif
@endforeach

<div class="clearfix"></div>
</div>
<!--//tab_two-->
<div class="tab3">
@foreach($data as $product)
@if($product->category_id == 6)	
<div class="col-md-4 product-men">
<div class="men-pro-item simpleCart_shelfItem">
<div class="men-thumb-item">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-front">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-back">
<div class="men-cart-pro">
<div class="inner-men-cart-pro">
<a href="single.html" class="link-product-add-cart">Quick View</a>
</div>
</div>
<span class="product-new-top">New</span>

</div>
<div class="item-info-product ">
<h4><a href="single.html">{{$product->product_price}}</a></h4>
<div class="info-product-price">
<span class="item_price">${{$product->product_price}}</span>
<del>$69.71</del>
</div>
<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
	<form action="#" method="post">
		<fieldset>
			<input type="hidden" name="cmd" value="_cart" />
			<input type="hidden" name="add" value="1" />
			<input type="hidden" name="business" value=" " />
			<input type="hidden" name="item_name" value="Sweatshirt" />
			<input type="hidden" name="amount" value="30.99" />
			<input type="hidden" name="discount_amount" value="1.00" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="return" value=" " />
			<input type="hidden" name="cancel_return" value=" " />
			<input type="submit" name="submit" value="Add to cart" class="button" />
		</fieldset>
	</form>
</div>
					
</div>
</div>
</div>
@endif
@endforeach

<div class="clearfix"></div>
</div>
{{-- end tab3 --}}
<div class="tab4">
@foreach($data as $product)	
@if($product->category_id == 13)
<div class="col-md-4  product-men">
<div class="men-pro-item">
<div class="men-thumb-item">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-front img-responsive">
<img src="{{ asset($product->image_option)}}" alt="" class="pro-image-back  img-responsive">
<div class="men-cart-pro">
<div class="inner-men-cart-pro">
<a href="{{url('/product_details/'.$product->product_id)}}" class="link-product-add-cart">Quick View</a>
</div>
<hr>
<br>
</div>
<span class="product-new-top">{{$product->brand_name}}</span>

</div>
<div class="item-info-product ">

<div class="info-product-price">
<span class="item_price">${{$product->product_price}}</span>
<del>$69.71</del>

</div>
	<button id="prdId{{$product->product_id}}" class="btn btn-success my-cart-btn" data-id="prdId{{$product->product_id}}" data-name="{{$product->product_name}}" data-summary="{{$product->product_shortdis}}" data-price="{{$product->product_price}}" data-quantity="1" data-image="{{ asset($product->image_option)}}" value="{{$product->product_id}}">Add to Cart</button>				
</div>
</div>
</div>
@endif
@endforeach
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>	
<!-- //new_arrivals --> 
@endsection