@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Slider List</h2>
<a class="pull-right btn btn-primary" href="{{ route('slider.create')}}"><i class="fa fa-plus"></i>
Add Slider</a>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
         <table class="display table">
        <thead class="text-primary bg-success">
          <tr>
            <th width="4%">SL</th>
            <th width="40%">Title</th>
            <th width="15%">Caption</th>
            <th width="15%">Image</th>
            <th width="15%">Status</th>
            <th width="3%">Edit</th>
            <th width="4%">Delete</th>
          </tr>
         </thead>
         <tbody>
         <?php $i=1; ?>
           @foreach ($sliders as $slider)
            <tr>
             <td style="color: green">{{$i++}}</td>
             <td>{{$slider->slider_title}}</td>
             <td>
             {{$slider->slider_caption}} Taka
             </td>
              <td>
<img src="{{ asset($slider->slider_image)}}" width="50" height="50">
              </td>
             <td>
             @if($slider->slider_status == 1)
              <button id="statusPubished" type="submit" class="id btn-sm btn-success"" data-toggle="tooltip" data-placement="right" title="Published Product!" data-id="{{$slider->id}}">
                Published
                 
              </button>
              @else
              
             <button type="submit" id="unslider_status"  class="btn-sm btn-danger" data-id="{{$slider->id}}">
                Unpublished
                
              </button>
              @endif
             </td>
              <td>

 <a data-toggle="tooltip" data-placement="top" title="Edit Product!" class="btn btn-info" href="{{route('slider.edit',$slider->id)}}">
            <i class="fa fa-edit"></i>&nbsp;   
              </a>
              </td>
              <td>
 <form method="POST" action="{{ route('slider.destroy', $slider->id) }}">
   <button data-toggle="tooltip" data-placement="top" title="Delete Product!" class="btn btn-danger" type="submit" name="" value="Delete">
     <span class="glyphicon glyphicon-remove">
     </span>
   </button>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
   {{ method_field('DELETE') }}
</form>﻿
            
              </td>
              
            </tr>
            @endforeach
        </tbody>

        </table> 
        {{-- <span>{{ $sliders->links() }}</span> --}}
      {!! Toastr::message() !!}
     

      </div>
  </div>
</div>
</div>
</div>

{{-- slider status --}}
<script type="text/javascript">
$('#statusPubished').click(function(){
 

    var dataId = $('#statusPubished').attr('data-id');
         // alert(JSON.stringify(dataId));
    $.ajax({
        type: 'post',
        // url: 'sitting/update',
        url: '{{ url('/slider_status') }}' + '/' + dataId,
        data:{
          '_token':$('input[name=_token').val(),
              'dataId':$('#statusPubished').val(),
               
        },
        // dataType: 'json',
        success: function( data ){
          $('#statusPubished').text("..Inactive.."),
          $('#statusPubished').addClass("fa fa-remove"),
toastr.warning('Slider Un Published Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
        },
        error: function( data ){
            // Handle error
        }
    });
});
 // unslider_status
$('#unslider_status').click(function(){
 var dataId = $('#unslider_status').attr('data-id');
   // alert(JSON.stringify(id));
    $.ajax({
        type: 'post',
         url:'{{ url('/unslider_status') }}' + '/' + dataId,
        data:{
          '_token':$('input[name=_token').val(),
              'dataId':$('#unslider_status').val(),
               
        },
        // dataType: 'json',
        success: function( data ){
           $('#unslider_status').text(" ..Active.."),
          $('#unslider_status').addClass("fa fa-check"),
toastr.success('Slider Published Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
        },
        error: function( data ){
            // Handle error
        }
    });
});


  </script>
@show