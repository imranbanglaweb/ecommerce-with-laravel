@extends('Backend.admin_master')
@section('main_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-block">
<div class="blank">
<h2>Change Theme</h2>
<div class="blankpage-main">
	<div class="container">
 
  	 
   <table>
     <tr>
      <input type="hidden" name="id" value="{{
       $theme_change->id}}" id="id">
       <td>  <label class="control-label col-sm-2" for="theme_name">Theme Name:</label>
      
       </td>
       <td> <input type="text" class="form-control" id="theme_name" value="{{
       $theme_change->theme_name}}" name="theme_name" >
        @if ($errors->has('theme_name'))
            <span class="help-block">
                <strong>{{ $errors->first('theme_name') }}</strong>
            </span>
        @endif</td>
     </tr>
     <tr>
       <td> <label class="control-label col-sm-2" for="theme_dis">Theme Disc:</label></td>
       <td> 
        <textarea name="theme_dis" class="form-control" cols="30" rows="10" id="theme_dis">
          {{$theme_change->theme_dis}}
        </textarea></td>
     </tr>
     <tr>
       <td> <label class="control-label col-sm-2" for="slug">Theme Author:</label></td>
       <td> <input type="text" class="form-control" id="theme_author" value="{{
       $theme_change->theme_author}}" name="theme_author"></td>
     </tr>
     <tr>
       <td> <label class="control-label col-sm-2" for="slug">Footer Text :</label></td>
       <td> <input type="text" class="form-control" id="footer_text" value="{{
       $theme_change->footer_text}}" name="footer_text"></td>
     </tr>
     <tr>
       <td><label class="control-label col-sm-2" for="slug">Theme Color :</label></td>
       <td> <input type="color" class="form-control" id="theme_color" value="{{
       $theme_change->theme_color}}" name="theme_color"></td>
      
     </tr>
     <tr>
       <td></td>
       <td>
          {{ csrf_field() }} <!-- this is important for generate token -->
        <button type="submit" id="update" class="btn btn-primary update">
          <i class="fa fa-plus"></i>
        Update Theme </button>
      </td>
     </tr>
   </table>
      

  <script type="text/javascript">
$('#update').click(function(){
  
    $.ajax({
        type: 'post',
        // url: 'sitting/update',
        url:"{{ url('/sitting/update/{id}') }}",
        data:{
          '_token':$('input[name=_token').val(),
              'id':$('#id').val(),
              'theme_name':$('#theme_name').val(),
              'theme_dis':$('#theme_dis').val(),
              'theme_author':$('#theme_author').val(),
              'theme_color':$('#theme_color').val(),
              'footer_text':$('#footer_text').val(),
               
        },
        // dataType: 'json',
        success: function( data ){
          $('#update').text("Updated"),
toastr.success('Theme Updated Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 5000);
        },
        error: function( data ){
            // Handle error
        }
    });
});


  </script>

</div>
</div>
</div>
</div>
@show