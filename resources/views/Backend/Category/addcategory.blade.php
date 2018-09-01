@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Add Category</h2>
<div class="blankpage-main">
	<div class="container">
 
  	 {!! Form::open(['route' => 'category.store','class'=>'form-horizontal']) !!}
    <div class="form-group">
      <label class="control-label col-sm-2" for="cname">Category Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="cname" placeholder="Enter Category" name="cname" {{ old('cname') }}>
        @if ($errors->has('cname'))
            <span class="help-block">
                <strong>{{ $errors->first('cname') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cdis">Category Disc:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="cdis" placeholder="Enter Category Discription" name="cdis">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Category Slug:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="slug" placeholder="Enter Category Slug" name="slug">
      </div>
    </div>

    <div class="form-group">        
      <div class=" col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-primary">
        	<i class="fa fa-plus"></i>
        Add Category</button>
      </div>
    </div>
  {!! Form::close() !!}
</div>
</div>
</div>
</div>
@show