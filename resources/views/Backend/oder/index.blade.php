@extends('Backend.admin_master')

@section('oder')
  <!--content-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<div class="inner-block">
<div class="blank">
 <div class="blankpage-main">
  <div class="container">
      <div class="col-md-8">
        <table class="display table">
        <thead class="text-primary bg-success">
          <tr>
            <th width="3%">Sl</th>
            <th width="25%">Customer name</th>
            <th  width="20%">Order Total</th>
            <th  width="20%">Order Status</th>
            <th width="15%">*</th>
            <th width="18%">Actions</th>
          </tr>
         </thead>
         <tbody>
            <?php $i=1;?>
           @foreach ($order_info as $order)
            <tr>
             <td style="color: blue">{{$i++}}</td>
             <td>{{$order->customer_name}}</td>
             <td>{{$order->order_total}}</td>
             <td>{{$order->order_status}}</td>
             <td>
            <a class="btn btn-primary" href="{{ url('/invoice/'.$order->order_id) }}">
 <i class="fa fa-eye"></i>&nbsp;
  Invoice
</a>
</td>
    <td>         
 <form method="POST" action="">
 <input type="hidden" name="_token" value="{{ Session::token() }}">
{{ method_field('DELETE') }}
 <button type="submit" class="btn btn-danger">
 <i class="fa fa-remove"></i>
  Delete
 </button>

</form>﻿

            
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
</div>
</div>
</div>
</div>
@endsection