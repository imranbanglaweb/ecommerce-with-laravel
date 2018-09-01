@extends('Frontend.frontend_master')
@section('product_details')
<style>
  .badge-notify{
    background:red;
    position:relative;
    top: 20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
    left: 960px
  }

</style>
<!--/single_page-->
<!-- /banner_bottom_agile_info -->
<div class="">
<div class="container">
<!--/w3_short-->

<div class="agile_inner_breadcrumb">

<ul class="w3_short">
<li><a href="index.html">Home</a><i>|</i></li>
<li style="color: red">Product Details</li>
</ul>
</div>

<!--//w3_short-->
</div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
<div class="container">
<div class="col-md-4 single-right-left ">
<div class="grid images_3_of_2">
<div class="flexslider">

<ul class="slides">
	@foreach($allproductsImage as $key => $allproductsImg)
<li data-thumb="{{ asset($allproductsImg->image_option)}}">
<div class="thumb-image"> <img src="{{ asset($allproductsImg->image_option)}}" data-imagezoom="true" class="img-responsive"> </div>
</li>

@endforeach
</ul>
<div class="clearfix"></div>
</div>	
</div>
</div>
<div class="col-md-8 single-right-left simpleCart_shelfItem">
<h3>{{$data->product_name}}</h3>
<p><span class="item_price">${{$data->product_price}}</span> <del>- $900</del></p>
<div class="rating1">
<span class="starRating">
<input id="rating5" type="radio" name="rating" value="5">
<label for="rating5">5</label>
<input id="rating4" type="radio" name="rating" value="4">
<label for="rating4">4</label>
<input id="rating3" type="radio" name="rating" value="3" checked="">
<label for="rating3">3</label>
<input id="rating2" type="radio" name="rating" value="2">
<label for="rating2">2</label>
<input id="rating1" type="radio" name="rating" value="1">
<label for="rating1">1</label>
</span>
</div>
<div class="description">
<h5>{{$data->product_name}}</h5>

</div>
<div class="color-quality">
<div class="color-quality-right">
<h5>Quality :</h5>
<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
<option value="null">5 Qty</option>
<option value="null">6 Qty</option> 
<option value="null">7 Qty</option>					
<option value="null">10 Qty</option>								
</select>
</div>
</div>
<br>
	<button id="prdId{{$data->product_id}}" class="btn btn-success my-cart-btn" data-id="prdId{{$data->product_id}}" data-name="{{$data->product_name}}" data-summary="{{$data->product_shortdis}}" data-price="{{$data->product_price}}" data-quantity="1" data-image="{{ asset($data->image_option)}}" value="{{$data->product_id}}">Add to Cart</button>
<div style="clear: both;"></div>
<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
   <li class="share">Share On : </li>
	<li><a href="#" class="facebook">
		  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
		  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
	<li><a href="#" class="twitter"> 
		  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
		  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
</ul>

</div>
<div class="clearfix"> </div>
<!-- /new_arrivals --> 
<div class="responsive_tabs_agileits"> 
<div id="horizontalTab">
<ul class="resp-tabs-list">
<li>Description</li>
<li>Reviews</li>
<li>Information</li>
</ul>
<div class="resp-tabs-container">
<!--/tab_one-->
<div class="tab1">

<div class="single_page_agile_its_w3ls">
<h6>{{$data->product_name}}</h6>
<p>{{$data->product_longdis}}</p>
</div>
</div>
<!--//tab_one-->
<div class="tab2">

<div class="single_page_agile_its_w3ls">
<div class="bootstrap-tab-text-grids">
<div class="bootstrap-tab-text-grid">
<div class="bootstrap-tab-text-grid-left">
<img src="{{ asset('public/Frontend/')}}/images/t1.jpg" alt=" " class="img-responsive">
</div>
<div class="bootstrap-tab-text-grid-right">
<ul>
<li><a href="#">Admin</a></li>
<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
</ul>
<p>{{$data->product_shortdis}}</p>
</div>
<div class="clearfix"> </div>
</div>
<div class="add-review">
<h4>add a review</h4>
<form action="#" method="post">
<input type="text" name="Name" required="Name">
<input type="email" name="Email" required="Email"> 
<textarea name="Message" required=""></textarea>
<input type="submit" value="SEND">
</form>
</div>
</div>

</div>
</div>
<div class="tab3">

<div class="single_page_agile_its_w3ls">
<h6>{{$data->product_name}}</h6>
<p>{{$data->product_longdis}}/p>
</div>
</div>
</div>
</div>	
</div>
<!-- //new_arrivals --> 
<!--/slider_owl-->

<div class="w3_agile_latest_arrivals">
<h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
	@php 
  $products = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_image_id')
                  ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_product.*','tbl_product_image.*')
                // ->where('image_label',1)
                ->get();


	@endphp

	@foreach($products->chunk(4) as $chunk)
	<div class="row">
		
		 @foreach($chunk as $product)
		<div class="col-md-3  text-center">
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

		{{-- 	
			<div class="cat_item">

			
	
			</div> --}}



	
		@endforeach
		
		<br>
		</div>
		@endforeach
<div class="clearfix"> </div>
<!--//slider_owl-->
</div>
</div>
</div>
@endsection