@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Add Logo</h2>
<div class="blankpage-main">
	<div class="container">
 
  	 {!! Form::open(['url' => 'logo/store','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
      <label class="control-label col-sm-2" for="cname">Logo Title:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="cname" placeholder="Enter Logo Name" name="logo_title" {{ old('logo_title') }}>
        @if ($errors->has('logo_title'))
            <span class="help-block alert-warning">
                <strong>{{ $errors->first('logo_title') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="logo_link">Logo Link:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="logo_link" placeholder="Enter Logo Link" name="logo_link">
          @if ($errors->has('logo_title'))
            <span class="help-block alert-warning">
                <strong>{{ $errors->first('logo_link') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Logo Image:</label>
      <div class="col-sm-6">          
        <input type="file" class="form-control" name="logo_image">
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