<div class="header-bot">
<div class="header-bot_inner_wthreeinfo_header_mid">

<!-- header-bot -->
<div class="col-md-4 logo_agile">
	@php     

		$logos  =DB::table('tbl_logo')->latest()->first();

	 @endphp
<h1><a href="{{url('/')}}"><img src="{{ asset($logos->logo_image)}}" alt="" width="150" height="150"></a></h1>
</div>
<div class="col-md-offset-4"></div>
<!-- header-bot -->
<div class="col-md-4 agileits-social top_content">
<ul class="social-nav model-3d-0 footer-social w3_agile_social">
<li class="share">Share On : </li>
<li><a href="#" class="facebook">
	  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
	  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
<li><a href="#" class="twitter"> 
	  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
	  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
<li><a href="#" class="instagram">
	  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
	  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
<li><a href="#" class="pinterest">
	  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
	  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>
			{{-- <div id="preloader">
			  <div id="status">&nbsp;</div>
			</div> --}}
