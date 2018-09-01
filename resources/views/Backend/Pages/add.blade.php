@extends('Backend.admin_master')
@section('main_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-block">
<div class="blank">
<h2>Add Page</h2>
<div class="blankpage-main">
	<div class="container">
 
  	 {!! Form::open(['url' => '','class'=>'form-horizontal','novalidate','id'=>'form']) !!}
    <div class="form-group">
      <label class="control-label col-sm-2" for="cname">Page Title:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="page_title" placeholder="Enter Page title" name="page_title" {{ old('page_title') }}>
        @if ($errors->has('page_title'))
            <span class="help-block">
                <strong>{{ $errors->first('page_title') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cdis">Page Disc:</label>
      <div class="col-sm-6">          

<textarea class="tinymce" name="page_dis" id="page_dis"></textarea>

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="page_slug">Page Slug:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="page_slug" placeholder="Enter Page Slug" name="page_slug">
      </div>
    </div>

    <div class="form-group">        
      <div class=" col-sm-offset-2 col-sm-8">
        <button id="add" type="submit" class="btn btn-primary">
        	<i class="fa fa-plus"></i>
        Add Pages</button>
      </div>
    </div>
  {!! Form::close() !!}
</div>
</div>
</div>
</div>
@include('Backend.Includes.tinymc')

<script type="text/javascript">

$('form').on('submit', function(form){
    // save TinyMCE instances before serialize
    tinyMCE.triggerSave();

    var data = $(this).serialize();
    $.ajax({
        type:       'POST',
        cache:      false,
        url:"{{ url('/page/store') }}",
        data:       data,
        success:    function(){
            $('#add').text("Added Page"),
          $('#add').addClass("fa fa-check"),
toastr.success('Added Page Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 5000);
        },
        error: function( data ){
            // Handle error
        }
    });
    return false;
});


  </script>

@show