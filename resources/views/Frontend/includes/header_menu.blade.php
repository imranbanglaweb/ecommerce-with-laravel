@section('header_menu')
<div class="top_nav_left">
	
			
<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav menu__list">
	
<li class="{{Request::is('/') ? 'active menu__item menu__item--current' : ''}}"><a class="menu__link" href="{{ url('/')}}"><i class="fa fa-home"></i>&nbsp;Home </a></li>
<li class="pull-right search-menu">
  <form action="#" method="post">
<input type="search" name="search" value="" id="search" placeholder="Search..." required="">
<span style="color: white;padding: 5px"><i class="fa fa-search"></i></span>
{{-- <input type="submit" value="Search" class="btn-info"> --}}
</form></li>
    @php 
        $pages = DB::table('tbl_page')->latest()->orderBy('id','asc')->get();
    @endphp

        @foreach ($pages as $key => $page) 
         <li class="{{Request::is('page/details/'.$page->page_slug) ? 'active menu__item menu__item--current' : ''}}">
          <a class="menu__link" href="{{ url('/page/details/'.$page->page_slug)}}"><i class="fa fa-bars"></i>&nbsp;{{$page->page_title}}
          </a></li>
        @endforeach
  

</ul>
</div>
</div>
</nav>	

	
</div>
<div class="top_nav_right">
<div class="wthreecartaits wthreecartaits2 cart"> 
{{--  <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart"><span class="badge badge-notify my-cart-badge"></span></span>
      </div> --}}
      <a href="{{ url('/show_cart')}}">
        <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge">
        {{ Cart::count()}}</span></span>
      </div>
      </a>


       
  </div>
</div>
</div>
{{-- Search --}}
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
 
$('#search').on('keyup',function(){
 $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
$value=$(this).val();
// alert($value);
 // $('#status').fadeOut(); // will first fade out the loading animation 
$.ajax({
 
type : 'get',
 
url : '{{URL::to('search')}}',
 
data:{'search':$value},
  beforeSend: function(){
        // Show image container
        $('#preloader').fadeOut('slow');
       
        
       },
success:function(data){
  // $('#preloader').delay(3500).fadeOut('slow');
 console.log(data);
 $("#categoryWiseProduct").html(data);

 
},
complete: function(){
          $('#preloader').delay(350).fadeOut('slow');
      }
 
});
 
 
 
})
 
</script>
 
{{-- 
<script>
  $(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})
</script> --}}

@show