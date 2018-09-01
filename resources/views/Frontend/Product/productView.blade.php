@section('productView')
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
<div class="col-md-9">
	<div class="product_home_view">

	<h3 style="text-align: center;padding: 10px"><i class="fa fa-list"></i> All Products</h3>
		 	<hr>

		@if(count($data) == 0)
		<h3 class="nocat_title">No Products Found Under This Category</h3>
		@else
			
		<div id="categoryWiseProduct">
			<h3 style="text-align: center;" class="text-info"><i class="fa fa-star"></i>&nbsp;Category Wise Products</h3>
			<hr>
		@foreach($data->chunk(4) as $chunk)
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

		@endif
		{{-- end categoryWiseProduct --}}
	</div>
	<hr>

</div>
</div>
<script>
$(document).ready(function(){
 @foreach($data as $product)
  $("#prdId{{$product->product_id}}").click(function(e){
  	e.preventDefault();
    // var prdId = $("#prdId{{$product->product_id}}").val();
   var prdId = $("#prdId{{$product->product_id}}").val();
    // alert(prdId);
    
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{ url('/ad_card/')}}' +'/'+ prdId,
      data: 'product_id=' + prdId,
       beforeSend: function(){
        // Show image container
        // $('#prd_id').val();
     
        
       },
      success:function(response){
        console.log(response);
        $("#cart").html(response);
        // $("#count_p").html(response);
        // $('#prdId{{$product->product_id}}').addClass('fa fa-check');

      },
      complete: function(){
            // $('#spinner').hide();
        },
    });
  });
    @endforeach
});
</script>
@endsection