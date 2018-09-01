@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Add Product</h2>
<div class="blankpage-main">
	<div class="container">
 
  	 <form class="form-horizontal"  method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_name">Product Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name" {{ old('product_name') }}>
        @if ($errors->has('product_name'))
            <span class="help-block">
                <strong>{{ $errors->first('product_name') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="category_id">Category:</label>
      <div class="col-sm-6">          

        <select name="category_id" class=" form-control">
          @foreach($categories as $category)
          <option value="{{ $category->id}}">
            {{ $category->category_name}}
          </option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="menufecture_id">Brand :</label>
      <div class="col-sm-6">          
     
        <select name="menufecture_id" class="form-control">
          @foreach($menufectures as $menufecture)
            <option value="{{$menufecture->id}}">
              {{ $menufecture->brand_name}}
            </option>
           @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_price">Price :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price" name="product_price">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_quantity">Quantity :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="product_quantity" placeholder="Enter Product Quantity" name="product_quantity">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_shortdis">Shortdisc :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="product_shortdis" placeholder="Enter Product Shortdisc" name="product_shortdis">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_longdis">Longdisc :</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="product_longdis" placeholder="Enter Product Long disc" name="product_longdis">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_status">Status :</label>
      <div class="col-sm-6">          
       <select name="product_status" id="product_status" class="form-control">
         <option value="1">Active</option>
         <option value="0">Inactive</option>
       </select>
      </div>
    </div>
    <div class="form-group{{ $errors->has(' product_image') ? ' has-error' : '' }}">
    <label for="product_image" class="col-md-2 control-label">
    Product Image</label>

              
        <div class="col-md-6">      
        <div class="fallback">
    <input name="product_image[]" type="file" multiple / value="You Can Upload Multiple Image">
      </div>
      </div>

    </div>
    <div class="form-group">        
      <div class=" col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-primary">
        	<i class="fa fa-plus"></i>
        Add Product</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
@show