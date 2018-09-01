@extends('Backend.admin_master')

@section('invoice')
{{--    <link type="text/css" rel="stylesheet" href="{{ asset('public/Admin/css/font-awesome.min.css')}}" media="all" />
<style type="text/css">
  .list-item li {
    border-bottom: 1px solid #ddd;
    padding: 6px
  }
</style> --}}
  <!--content-->
<div class="inner-block">
<div class="blank">
 <div class="blankpage-main">
  <div class="container">
    <a class="btn btn-primary" href="">
    <i class="fa fa-plus"></i> 
      Invoice
    </a>
    <hr>
        <div class="row">
          <div class="col-md-5">
            E-Bazar
          </div>    
          <div class="col-md-5">
            <ul>
              <li>Invoice # /
              000{{$customer_info->order_id}}
              </li>
              <li>Order Date # /
            {{$customer_info->created_at}}
              </li>
              <li>Due Date /
               {{$customer_info->created_at}}</li>
              <li>Payment /
                
      <?php
        $payment = $payment->payment_type;
         explode('_',$payment);
      ?>
      {{$payment}}
            
                

                
               
              </li>
              <li>Shipping/My Carrier</li>
            </ul>
          </div>    
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <h3>Bill To </h3>
            <ul>
              <li>
              {{$customer_info->customer_name}}
              </li>
              <li>
              {{$customer_info->customer_address}}
              </li>
              <li>
              {{$customer_info->mobile}}
              </li>
              <li>
              {{$customer_info->zip_code}}
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Ship To </h3>
            <ul>
              <li>
                {{$shipping_info->shipping_name}}
              </li>
              <li>
                {{$shipping_info->company_name}}
              </li>
              <li>
                {{$shipping_info->address}}
              </li>
              <li>
                {{$shipping_info->phone_number}}
              </li>
             
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Terms & Notes </h3>
          <p>
            Thank You for Continued Support & Business
          </p>
          </div>
        </div>
        <br>
        <hr>
        <div class="row">
          <div class="col-md-8">
            <table class="table table-responsive">
              <tr>
                <th>SL</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Item Total</th>
                <th></th>
              </tr>
              <br>
              <hr>
              <?php $i=1; ?>
              @foreach ($product_info as $product)
             
              <tr>
                <tbody>
                  <td>{{$i++}}</td>
                  <td>
                <img src="{{ asset($product->image_option)}}" width="50" height="50">
                </td>
                  <td>
                    {{$product->product_name}}
                  </td>
                  <td>
                    {{$product->product_quantity}}
                  </td>
                  <td> 
                  {{$product->product_price}}
                  </td>
                  <td>
                    <?php 
                    $itemtoal =$product->product_quantity * $product->product_price;
                    ?>
                    
                  {{   $itemtoal}}
                  </td>
                </tbody>
              </tr>
               @endforeach
            </table>
            <hr>
    
            <div class="col-md-4 col-md-offset-4">
            <ul class="list-item">
              <li>Sub Total : </li>
              <li>Shipping & Handling : </li>
              <li>Tax : </li>
              <li>Grand Total : </li>
            </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-item">
              <li>
                {{$customer_info->order_total}}
              </li>
              <li>$7 </li>
              <li>$0 </li>
              <li>
                {{$customer_info->order_total}}
               </li>
            </ul>
<hr>
 <input type="hidden" name="_token" value="{{ Session::token() }}">

      <a class="btn btn-info pull-left" href="{{ url('/pdfview/'.$customer_info->order_id) }}">
            <span class="glyphicon glyphicon-download-alt"></span>

              Download PDF
      </a>
   
            </div>
             <a class="pull-left btn btn-primary" href="{{ url('/manage-order')}}">Back To Invoice List</a>  
          </div>
        </div>
</div>
</div>
</div>
</div>
@endsection