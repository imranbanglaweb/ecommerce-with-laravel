@include('Backend.header')
<body>

<div class="loader"></div>
<div class="outer-box"></div>	
<div class="page-container">	
<div class="left-content">
<div class="mother-grid-inner">
<!--header start here-->
@include('Backend.top_header')
<!--heder end here-->
<!-- script-for sticky-nav -->
<script>
$(document).ready(function() {
var navoffeset=$(".header-main").offset().top;
$(window).scroll(function(){
var scrollpos=$(window).scrollTop(); 
if(scrollpos >=navoffeset){
$(".header-main").addClass("fixed");
}else{
$(".header-main").removeClass("fixed");
}
});

});
</script>
<!-- /script-for sticky-nav -->
<!--inner block start here-->
@yield('main_content')
@yield('oder')
@yield('invoice')
@yield('page')
<!--copy rights start here-->
@include('Backend.copyright')
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
@include('Backend.sidebar')
<!--slide bar menu end here-->

{{-- footer                    --}}
@include('Backend.footer')