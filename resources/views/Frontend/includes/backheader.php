<!DOCTYPE html>
<html>
<head>
<title>B Shop / Simple Ecommerce Website</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ecommerce With Laravel" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="{{ asset('public/Frontend/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('public/Frontend/')}}/css/magnifier.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('public/Frontend/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('public/Frontend/')}}/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="{{ asset('public/Frontend/')}}/css/flexslider.css" type="text/css" media="screen" />
<link href="{{ asset('public/Frontend/')}}/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
@include('Frontend.includes.favicon')
</head>
<body>
<!-- header -->
<div class="header" id="home">
<div class="container">
<ul>
	@php
		$id =Session::get('customer_id');
		$name =Session::get('customer_name');
	 @endphp
	 @php 

	 if($id == null){
	 	return redirect('/');
	 }

	 else{
	 	true;
	 }

	 @endphp
	@if($id)
<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
@else
<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
@endif

<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>

@if($id)
    <li><a href="">{{$name}}</a></li>
    <li><i class="fa fa-sign-out" aria-hidden="true"></i>
 <a href="{{URL::to('/logout')}}">Sign Out</a>
</li>
@endif
</ul>
</div>
</div>
<!-- //header -->
