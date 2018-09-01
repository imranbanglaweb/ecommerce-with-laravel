@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Product Details</h2>
<a class="pull-right btn btn-primary" href="{{ route('product.create')}}"><i class="fa fa-plus"></i>
Add Product</a>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
         
     
<form class="form-horizontal" method="POST">  
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Name
</label>
    <div class="col-md-6">
        <input type="text" class="form-control" value="{{$products->product_name }}" readonly="">
          
    </div>
</div>  
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Category
</label>
    <div class="col-md-6">
        <input type="text" class="form-control" value="{{$products->category_name }}" readonly="">
          
    </div>
</div>  
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Brand
</label>
    <div class="col-md-6">
        <input class="form-control" value="{{$products->brand_name }}" readonly="">
          
    </div>
</div>
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Price
</label>
    <div class="col-md-6">
        <input type="text" class="form-control" value="{{$products->product_price }}" readonly="">
          
    </div>
</div>
  
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Quantity
</label>
    <div class="col-md-6">
        <input type="text" class="form-control" value="{{$products->product_quantity }}" readonly="">
          
    </div>
</div>
  
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Short Discription
</label>
    <div class="col-md-6">
       
        <textarea   class="form-control" name="editor1">
            {{$products->product_shortdis }}
        </textarea>
      
          
    </div>
</div>
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Long Discription
</label>
    <div class="col-md-6">
        
        <textarea  class="form-control" name="editor1">
            {{$products->product_longdis }}
        </textarea>
          
    </div>
</div>
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Status
</label>
    <div class="col-md-6">
         @if($products->product_status == 1)
              <button class="btn-sm btn-info">
             Published
              </button>
             @else
              <button class="btn-sm btn-danger">
              Un Published
              </button>
              @endif
          
    </div>
</div>
<div class="form-group">
<label for="" class="col-md-4 control-label">
Product Image
</label>
    <div class="col-md-8">
		@foreach($productImage as $productImg)
		
			<img class="pull-left" src="{{ asset($productImg->image_option)}}" width="50" height="50">	
				
   @endforeach
          
    </div>
</div>

<br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <a href="{{ route('product.index') }}" class="btn btn-primary">
           <i class="fa fa-plus"></i> 
           Back Products List
        </a>
    </div>
</div>
</form>
      </div>
  </div>
</div>
</div>
</div>
@show