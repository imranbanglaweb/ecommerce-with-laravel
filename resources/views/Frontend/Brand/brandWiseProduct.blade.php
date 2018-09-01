<div class="col-md-9">
	
		 <div id='spinner' style='display: none;text-align: center;'>
		   <img id="spinner" src="{{asset('public/Backend/images/loader.gif')}}" alt="" class="align-center"> 
		</div>
		@if(count($data) == 0)
		<h3 class="nocat_title">No Products Found Under This Brand</h3>
		@else
			
		<div id="categoryWiseProduct">
		@if($brandId)
	
			<h4 style="text-align: center;display: block;" class="text-info">
			----&nbsp;&nbsp;
				<i class="fa fa-search"></i>&nbsp; <span style="font-size: 23px" class="text-warning">{{$brandId->brand_name}}</span> Brand Products ----&nbsp;&nbsp;</h4>

		@endif
			
		<br>
		@foreach($data->chunk(4) as $chunk)
	<div class="row">
		
		 @foreach($chunk as $product)
					<div class="col-md-4  text-center">
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

		@endforeach
		
		<br>
		</div>
		@endforeach

		@endif
		{{-- end categoryWiseProduct --}}
	</div>
</div>
<div style="clear: both"></div>