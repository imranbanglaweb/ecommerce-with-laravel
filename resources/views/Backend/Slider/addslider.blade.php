@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Add Slider</h2>
<div class="blankpage-main">
	<div class="container">
 
  	 {!! Form::open(['route' => 'slider.store','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
      <label class="control-label col-sm-2" for="slider_title">Slider Title:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="slider_title" placeholder="Enter Slider Title" name="slider_title" {{ old('slider_title') }}>
        @if ($errors->has('slider_title'))
            <span class="help-block">
                <strong>{{ $errors->first('slider_title') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slider_caption">Slider Caption:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="slider_caption" placeholder="Enter Slider Caption" name="slider_caption">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Slider Link:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="slider_link" placeholder="Enter Slider Link" name="slider_link">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Slider Content:</label>
      <div class="col-sm-6">          
        <textarea class="form-control" name="slider_content" id="slider_content" cols="45" rows="5">
          
        </textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Slider Status:</label>
      <div class="col-sm-6">          
        <select name="slider_status" class="form-control">
          <option value="1">Published</option>
          <option value="0">Un Published</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="slug">Slider Image:</label>
      <div class="col-sm-6">          
        <input type="file" class="form-control" id="slider_image" name="slider_image">
      </div>
    </div>

    <div class="form-group">        
      <div class=" col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-primary">
        	<i class="fa fa-plus"></i>
        Add Slider</button>
      </div>
    </div>
  {!! Form::close() !!}
</div>
</div>
</div>
</div>
@show