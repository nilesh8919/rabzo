<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">


<title><?php echo $website_title[0]; ?></title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/bootstrap.min.css')}} ">

<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/simple-line-icons.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/jquery.mobile-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/style.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/revslider.css')}}">
<script src="{{URL::asset('public/js/jquery.min.js')}}"></script> 
<script src="{{URL::asset('public/js/bootstrap.min.js')}}"></script> 
<script src="{{URL::asset('public/js/revslider.js')}}"></script> 
<script src="{{URL::asset('public/js/common.js')}}"></script> 
<script src="{{URL::asset('public/js/owl.carousel.min.js')}}"></script> 
<script src="{{URL::asset('public/js/jquery.mobile-menu.min.js')}}"></script> 
<script src="{{URL::asset('public/js/countdown.js')}}"></script> 
<script src="{{URL::asset('public/plugins/EasyAutocomplete/jquery.easy-autocomplete.js')}}"></script> 

<script src="{{URL::asset('public/plugins/EasyAutocomplete/easy-autocomplete.css')}}"></script> 
<script src="{{URL::asset('public/plugins/EasyAutocomplete/easy-autocomplete.themes.css')}}"></script> 


<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
<style type="text/css">
  #thm-slideshow{margin-top: 0px;}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
</head>



<body class="cms-index-index cms-home-page">
<div class="wrap" id="wrap"> 
  <!-- Header -->
<header class="top-header">
			    	<nav>
					    <div class="">
					        <div class="mm-toggle-wrap">
					          <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
					        </div>
					        <div class="nav-inner"> 
					          <!-- BEGIN NAV -->
					          <ul id="nav" class="hidden-xs">
					            <li class="mega-menu" style="float: left;"> 
					              <a class="level-top" href="{{url('/')}}" style="padding: 0px 0px 0px 0px;">
					                    <span>
<?php if(!empty($website_logo[0])){ ?>
<img src="{{ asset('public/uploadimages/').'/'.$website_logo[0] }}" style="width: 205px;"> <?php } ?>
</span>
					              </a> 
					            </li>

					            <li class="mega-menu" style="position: relative;left: 411px;"> 
					              <a class="level-top navigation_a" href="{{url('restaurant')}}">
					                <span>Restaurant</span>
					              </a> 
					            </li>
					            
					            <li class="mega-menu" style="float: right;"> 
								 <?php if(count(Session::get('users')) == '0'){ ?>
					              <a class="level-top navigation_a" href="$">
					                <span>Login & Signup</span>
					              </a> 
								 <?php }else{ ?>
								 <a class="level-top navigation_a" href="{{url('client_logout')}}">
					                <span>Logout</span>
					              </a> 
								 
								 <?php }?>
					            </li>
					          </ul>
					        </div>
					    </div>
					</nav>
			  	</header>
	