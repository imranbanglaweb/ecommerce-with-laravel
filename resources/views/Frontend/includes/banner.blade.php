@section('slider')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1" class=""></li>
<li data-target="#myCarousel" data-slide-to="2" class=""></li>
<li data-target="#myCarousel" data-slide-to="3" class=""></li>
<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
</ol>
<div class="carousel-inner" role="listbox">
	
<div class="item active"> 
<div class="container">
<div class="carousel-caption">
<h3>The Biggest <span>Sale</span></h3>
<p>Special for today</p>
<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
</div>
</div>
</div>


@foreach($hslider as $slider)
<div class="item item2" style="background-image: url('{{ $slider->slider_image}}')"> 
<div class="container">
<div class="carousel-caption">
<h3>{{$slider->slider_title}} <span>Collection</span></h3>
<p>{{$slider->slider_caption}}</p>
<a class="hvr-outline-out button2" href="{{url('/mens')}}">Shop Now </a>
</div>
</div>
</div>
@endforeach
 
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
<!-- The Modal -->
</div> 
@show