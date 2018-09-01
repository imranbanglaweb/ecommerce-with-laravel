@extends('Backend.admin_master')
@section('main_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-block">
<div class="blank">
<h2>Edit Social Profiles</h2>
<div class="blankpage-main">
	<div class="container">
    <div id='spinner' style='display: none;'>
   <img id="spinner" src="{{asset('public/Backend/images/loader.gif')}}" alt="" class="align-center"> 
</div>



     {!! Form::open(['url' => '','class'=>'form-horizontal','files' => true]) !!}
 <input type="hidden" id="id" name="id" value="{{$socialByid->id }}">
            <div class="alert alert-danger" style="display:none">
            </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="product_name"> Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" value="{{$socialByid->name}}" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="category_id">Title:</label>
     <div class="col-sm-6">
        <input type="text" class="form-control" id="title" value="{{$socialByid->title}}" name="title">
       
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="link">Link :</label>          
      <div class="col-sm-6">
        <input type="text" class="form-control" id="link"  value="{{$socialByid->link}}" name="link">
      </div>
    </div>
    <div class="form-group">
    <label for="image" class="col-sm-2 control-label">
    Social Image</label>

              
        <div class="col-md-6">      
 <img src="{{ asset($socialByid->image)}}" width="60" height="50" alt="">
          <input type="file" id="image" class="form-control" name="image">
           <input type="hidden" id="old_img_path" name="old_img_path" value="{{ $socialByid->image}}">
         
        </div>      
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button id="updateSocial" type="submit" class="btn btn-primary">
        	<i class="fa fa-plus"></i>
        Update Social Connection</button>
       
      </div>
    </div>
 {!! Form::close() !!}
</div>
</div>
</div>
</div>
 <script type="text/javascript">
$('#updateSocial').click(function(e){
 e.preventDefault();
// var image = $('#image').val();
//          alert(JSON.stringify(image));
 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        var id = $('#id').val();
        var image = $('#image')[0].files[0];
        var old_img_path = $('#old_img_path').val();
        var name = $('#name').val();
        var link = $('#link').val();
        var title = $('#title').val();
        var form = new FormData();
        form.append('id', id);
        form.append('old_img_path', old_img_path);
        form.append('name', name);
        form.append('title', title);
        form.append('link', link);
        form.append('image', image);
        // form.append('file', $('#image').get(0).files[0]);

    $.ajax({
        type: 'POST',
        url:"{{ url('/social/update/{id}') }}",
        cache: false,
        contentType: false,
        datatype: 'json',
        processData: false,
        data:form,
        beforeSend: function(){
        // Show image container
        $('#spinner').show();
       },
        success: function(data){
         

          $('#updateSocial').addClass('fa fa-check'),
          $('#updateSocial').text("..Saved..."),
toastr.success('Social Profiles Updated Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 5000);

        },
        complete: function(){
            $('#spinner').hide();
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