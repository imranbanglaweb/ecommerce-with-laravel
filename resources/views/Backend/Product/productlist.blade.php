@extends('Backend.admin_master')
@section('main_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-block">
<div class="blank">
<h2>Product List</h2>
<a class="pull-right btn btn-primary" href="{{ route('product.create')}}"><i class="fa fa-plus"></i>
Add Product</a>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
         <table class="display table">
        <thead class="text-primary bg-success">
          <tr>
            <th width="4%">SL</th>
            <th width="40%">Name</th>
            <th width="15%">Price</th>
            <th width="15%">Quantity</th>
            <th width="15%">Status</th>
            <th>Image</th>
            <th>View</th>
            <th width="3%">Edit</th>
            <th width="4%">Delete</th>
          </tr>
         </thead>
         <tbody>
         <?php $i=1; ?>
           @foreach ($allproducts as $product)
            <tr>

             
             <td style="color: green">{{$i++}}</td>
             <td>{{$product->product_name}}</td>
             <td>
             {{$product->product_price}}
             </td>
            <td>{{$product->product_quantity}}</td>
             <td>
              
             @if($product->product_status == '1') 
              <button id="statusPubished" type="submit" class="id btn-sm btn-success"" data-toggle="tooltip" data-placement="right" title="Published Product!" data-id="{{$product->product_id}}">
                Published
                 
              </button>
              @else
              
             <button type="submit" id="unproduct_status"  class="btn-sm btn-danger" data-id="{{$product->product_id}}">
                Unpublished
                
              </button>
              @endif
             
             </td>
    
             <td>
               <img src="{{ asset($product->image_option)}}" width="50" height="50">
             </td>
             <td>
                <a href="{{ route('product.show',$product->product_id)}}" class="btn  btn-primary">
                <i class="fa fa-eye"></i>&nbsp;
              Details
                </a>
              </td>
              <td>
               

 <a data-toggle="tooltip" data-placement="top" title="Edit Product!" class="btn btn-info" href="{{route('product.update',$product->product_id)}}">
            <i class="fa fa-edit"></i>&nbsp;   
              </a>
              </td>
              <td>
 <form method="POST" action="{{ route('product.destroy', $product->product_id) }}">
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
      {!! Toastr::message() !!}
     

      </div>
  </div>
</div>
</div>
</div>

  <script type="text/javascript">
$('#statusPubished').click(function(){
 

    var dataId = $('#statusPubished').attr('data-id');
         // alert(JSON.stringify(dataId));
    $.ajax({
        type: 'post',
        // url: 'sitting/update',
        url: '{{ url('/product_status') }}' + '/' + dataId,
        data:{
          '_token':$('input[name=_token').val(),
              'dataId':$('#statusPubished').val(),
               
        },
        // dataType: 'json',
        success: function( data ){
          // $('#update').text("Updated"),
toastr.warning('Product Un Published Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
        },
        error: function( data ){
            // Handle error
        }
    });
});
 // unproduct_status
$('#unproduct_status').click(function(){
 var dataId = $('#unproduct_status').attr('data-id');
   // alert(JSON.stringify(id));
    $.ajax({
        type: 'post',
         url:'{{ url('/unproduct_status') }}' + '/' + dataId,
        data:{
          '_token':$('input[name=_token').val(),
              'dataId':$('#unproduct_status').val(),
               
        },
        // dataType: 'json',
        success: function( data ){
          // $('#update').text("Updated"),
toastr.success('Product Published Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
        },
        error: function( data ){
            // Handle error
        }
    });
});


  </script>

@show