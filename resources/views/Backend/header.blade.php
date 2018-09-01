<!DOCTYPE HTML>
<html>
<head>
<title>B Shop / Simple Ecommerce Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{ asset('public/Backend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">

<!-- Custom Theme files -->
<link href="{{asset('public/Backend/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
@php

$theme_changes = DB::table('tbl_sitting')
                ->where('id',1)
                ->first()
@endphp
<style>
	.sidebar-menu {

  background-color:{{$theme_changes->theme_color}};
  color: #aaabae;
}
</style>




<!--js-->
<script src="{{ asset('public/Backend/js/jquery-2.1.1.min.js')}}"></script> 
<!--icons-css-->
<link href="{{ asset('public/Backend/')}}/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="{{ asset('public/Backend/')}}/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
<script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script>window.modernizr || document.write('<script src="{{ asset('public/Backend/')}}/lib/modernizr/modernizr-custom.js"><\/script>')</script>
<!--<script src="lib/html5shiv/html5shiv.js"></script>-->
<!-- Chartinator  -->
<script src="{{ asset('public/Backend/')}}/js/chartinator.js" ></script>
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 {{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}

<script type="text/javascript">
jQuery(function ($) {

var chart3 = $('#geoChart').chartinator({
tableSel: '.geoChart',

columns: [{role: 'tooltip', type: 'string'}],

colIndexes: [2],

rows: [
['China - 2015'],
['Colombia - 2015'],
['France - 2015'],
['Italy - 2015'],
['Japan - 2015'],
['Kazakhstan - 2015'],
['Mexico - 2015'],
['Poland - 2015'],
['Russia - 2015'],
['Spain - 2015'],
['Tanzania - 2015'],
['Turkey - 2015']],

ignoreCol: [2],

chartType: 'GeoChart',

chartAspectRatio: 1.5,

chartZoom: 1.75,

chartOffset: [-12,0],

chartOptions: {

width: null,

backgroundColor: '#fff',

datalessRegionColor: '#F5F5F5',

region: 'world',

resolution: 'countries',

legend: 'none',

colorAxis: {

colors: ['#679CCA', '#337AB7']
},
tooltip: {

trigger: 'focus',

isHtml: true
}
}


});                       
});
</script>
<!--geo chart-->

<!--skycons-icons-->
<script src="{{ asset('public/Backend/')}}/js/skycons.js"></script>
<!--//skycons-icons-->
<style>
	.loader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 3;
  background: url('public/Backend/images/3.gif') 50% 50% no-repeat rgba(0, 0, 0, 0.5);

  /*background:url('../images/3.gif');*/
}
</style>
</head>