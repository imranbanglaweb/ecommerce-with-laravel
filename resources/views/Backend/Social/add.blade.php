@extends('Backend.admin_master')
@section('main_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-block">
<div class="blank">
<h2>Add Social Profiles</h2>
<div class="blankpage-main">
	<div class="container">
{{--  <img id="loader" src="{{asset('public/Backend/images/loader.gif')}}" alt="" class="align-center" style="display: none">  --}}
  	 <form class="form-horizontal"  method="" enctype="multipart/form-data" action="">
            {{ csrf_field() }}

            <div class="alert alert-danger" style="display:none">
            </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="product_name"> Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter Social Name" name="name" {{ old('name') }}>
        @if ($errors->has('name'))
            <span class="help-block btn-danger">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="category_id">Title:</label>
     <div class="col-sm-6">
        <input type="text" class="form-control" id="title" placeholder="Enter Social Title" name="title" {{ old('title') }}>
        @if ($errors->has('title'))
            <span class="help-block  btn-danger">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="link">Link :</label>          
      <div class="col-sm-6">
        <input type="text" class="form-control" id="link" placeholder="Enter Social Link" name="link" {{ old('link') }}>
        @if ($errors->has('link'))
            <span class="help-block btn-danger">
                <strong>{{ $errors->first('link') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="form-group">
    <label for="image" class="col-sm-2 control-label">
    Social Image</label>

              
        <div class="col-md-6">      

          <input type="file" id="image" class="form-control" name="image">
        </div>      
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button id="addSocial" type="submit" class="btn btn-primary">
        	<i class="fa fa-plus"></i>
        Add Social Connection</button>
      </div>
    </div>
<p class="error text-center alert alert-danger hidden"></p
  </form>
</div>
</div>
</div>
</div>
 <script type="text/javascript">
$('#addSocial').click(function(e){
 e.preventDefault();

 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
   // var link = $('#link').val();
   //       alert(JSON.stringify(link));
        var name = $('#name').val();
        var link = $('#link').val();
        var title = $('#title').val();
        var image = $('#image')[0].files[0];
        var form = new FormData($('form')[0]);
        form.append('name', name);
        form.append('title', title);
        form.append('link', link);
        form.append('image',image);

    $.ajax({
        type: 'post',
        url:"{{ url('social/store') }}",
        cache: false,
        // async: true,
        contentType: false,
        processData: false,
        data:form,
          // '_token':$('input[name=_token').val(),

    
        dataType: 'json',
        success: function(data){
         

          $('#addSocial').addClass('fa fa-check'),
          $('#addSocial').text("..Saved..."),
toastr.success('Social Profiles Added Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 5000);

        },

        error: function(data){
           $.each(data.error, function(key, value){
                $('.alert-danger').show();
                $('.alert-danger').append('<p>'+value+'</p>');
              });

        }
    });
});
</script>
@show