@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Update Menufecture</h2>
<div class="blankpage-main">
	<div class="container">


     <form class="form-horizontal" method="POST" action="{{ route('menufecture.update', $menufectureByid->id) }}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="brand_name">Brand Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="brand_name" value="{{ $menufectureByid->brand_name}}" name="brand_name">

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">Status:</label>
      <div class="col-sm-6">
      <select name="status" class="form-control">
        @if($menufectureByid->status ==1)
        <option value="{{ $menufectureByid->id}}" selected="selected">Published</option>
        @else
        <option value="{{ $menufectureByid->id}}" selected="selected">Un Published</option>
        @endif
      </select>          
         
      </div>
    </div>

    <div class="form-group">        
      <div class=" col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-plus"></i>
        Update Menufecture</button>
        <a class="btn btn-danger" href="{{ url('menufecture')}}">
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