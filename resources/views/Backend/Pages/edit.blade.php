@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Update Category</h2>
<div class="blankpage-main">
	<div class="container">


     <form class="form-horizontal" method="POST" action="{{ route('category.update', $catbyid->id) }}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="cname">Category Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="category_name" value="{{ $catbyid->category_name}}" name="category_name">

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cdis">Category Disc:</label>
      <div class="col-sm-6">          
         <input type="text" class="form-control" id="cdis" value="{{ $catbyid->category_dis}}" name="category_dis">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Category Slug:</label>
      <div class="col-sm-6">          
         <input type="text" class="form-control" id="slug" value="{{ $catbyid->category_slug}}" name="category_slug">
      </div>
    </div>

    <div class="form-group">        
      <div class=" col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-plus"></i>
        Update Category</button>
        <a class="btn btn-danger" href="{{ url('category')}}">
        	<i class="fa fa-minus"></i>
        Back to Edit Page</a>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
@show