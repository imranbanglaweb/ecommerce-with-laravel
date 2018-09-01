@section('main_content')
<div class="inner-block" style="min-height: 1000px">
<!--market updates updates-->

<div class="clearfix"> </div>
<div class="row">
  <div class="col-md-4">
  <a href="{{ url('/category')}}">
      <div class="single-item bg bg-primary">
      <h4>Total Categories</h4>
      <br>
      @php 

      $categoris = DB::table('tbl_category')->count('id'); 
      @endphp
      <span class="badge badge-primary" text-primary">{{$categoris}}</span>
      <br>
    </div>
  </a>

  </div>
  <div class="col-md-4">
      <a href="{{url('/product')}}">
        
    <div class="single-item bg bg-info">
      <h4>Total Products</h4>
      <br>
      @php 

      $product = DB::table('tbl_product')->count('product_id'); 
      @endphp
      <span class=" text-primary">{{$product}}</span>
      <br>
    </div>
      </a>
  </div>
  <div class="col-md-4">
    <a href="{{ url('/menufecture')}}">
    <div class="single-item bg bg-success">
      <h4>Total Brand</h4>
      <br>
      @php 

      $brand = DB::table('tbl_menufecture')->count('id'); 
      @endphp
      <span class=" text-primary">{{$brand}}</span>
      <br>
    </div>
    </a>
  </div>
  
</div>
<hr>
<br>

<div class="row">
  <div class="col-md-4">
    <a href="{{ url('/manage-order')}}">
    <div class="single-item bg bg-secondary">
      <h4>Total Order</h4>
      <br>
      @php 

      $oders = DB::table('tbl_order')->count('order_id'); 
      @endphp
      <span class=" text-primary">{{$oders}}</span>
      <br>
    </div>
  </a>

  </div>
  <div class="col-md-4">
    <a href="{{ url('/user')}}">
    <div class="single-item bg-danger">
      <h4>Total Users</h4>
      <br>
      @php 

      $user = DB::table('users')->count('id'); 
      @endphp
      <span class=" text-primary">{{$user}}</span>
      <br>
    </div>
  </a>
  </div>
  <div class="col-md-4">
    <a href="{{ url('/social')}}">
    <div class="single-item bg bg-info">
      <h4>Social Profiles</h4>
      <br>
      @php 

      $profiles = DB::table('tbl_social')->count('id'); 
      @endphp
      <span class=" text-primary">{{$profiles}}</span>
      <br>
    </div>
    </a>
  </div>
 
</div>
 <br><hr>
<div class="row">
  <div class="col-md-4">
    <a href="{{ url('/page')}}">
    <div class="single-item bg bg-success">
      <h4>Total Pages</h4>
      <br>
      @php 

      $page = DB::table('tbl_page')->count('id'); 
      @endphp
      <span class=" text-primary">{{$page}}</span>
      <br>
    </div>
  </a>

  </div>
  <div class="col-md-4">
    <a href="{{ url('/logo')}}">
    <div class="single-item bg-secondary">
      <h4>Theme Logo</h4>
      <br>
      @php 

      $logo = DB::table('tbl_logo')->latest()->first(); 
      @endphp
     <img src="{{ asset($logo->logo_image)}}" alt="" class="text-center img-responsive" width="100" height="100">

    </div>
  </a>
  </div>
  <div class="col-md-4">
    <a href="{{ url('/sitting/index')}}">
    <div class="single-item bg-info">
      <h4>Theme Sitting</h4>
      <br>
      @php 

      $profiles = DB::table('tbl_social')->count('id'); 
      @endphp
      <span class=" text-primary">{{$profiles}}</span>
      <br>
    </div>
    </a>
  </div>
  
</div>
<div class="clearfix"> </div>
<!--climate start here-->

<!--climate end here-->

</div>
<!--inner block end here-->
<div class="clearfix"> </div>
@show