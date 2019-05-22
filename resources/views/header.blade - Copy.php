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


<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
<style type="text/css">
  #thm-slideshow{margin-top: 0px;}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<style type="text/css">
		* {
		  box-sizing: border-box;
		}

		body {
		  margin: 0;
		}

		.wrap {
		  width: 100%;
		  /*border: 1px solid #ccc;*/
		  height: 579px;
		  overflow: auto;
		  position: relative;
		      margin-top: 77px;
		}

		.top-header {
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 60px;
		}
		.top-header .menu-icon {
		  position: absolute;
		  top: 0;
		  right: 0;
		  padding: 18px 20px;
		}
		.fix-search .top-header {
		  background: #eee;
		}

		.search {
		  /*position: absolute;
		  top: 155px;
		  left: 20px;
		  right: 20px;*/
		      position: absolute;
		    top: 188px;
		    left: 0px;
		    right: 214px;
		    margin: 0 auto;
		    width: 583px;
		    /*border: 1px solid;*/
		}
		.search input {
		  width: 100%;
		  border: 1px solid #ccc;
		  padding: 8px;
		  font-size: 15px;
		  transition: width 0.2s;
		  -webkit-appearance: none;
		      height: 38px;
		}
		.fix-search .search {
		  position: fixed;
		  top: 0px;
		  width: 50%;
		  margin: 0 auto;
		}
		.fix-search .search input {
		  /*width: 250px;*/
		  /*width: 450px;*/
	    position: relative;
	    /*left: 110px;*/
		}

		.top {
		  height: 250px;
		  /*padding-top: 40px;*/
		}

		.hero {
		  width: 200px;
		  height: 100px;
		  background: #ccc;
		  margin: 0 auto;
		}

		main {
		  padding: 0 20px;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		}
		main div {
		  width: 125px;
		  height: 80px;
		  background: #ccc;
		  margin: 0 0 20px 0;
		}
		.clear{clear: both;}
		.cuisine_ul{padding: 0;}
    .cuisine_ul li{list-style-type: none;padding: 6px 11px;border: 1px solid #d8d6d670;background: #cccccc42;}
    .cuisine_ul li a{color: #000;}
	</style>


<body class="cms-index-index cms-home-page">
<div class="wrap" id="wrap"> 
  <!-- Header -->
  <header>
  
  <nav>
    <div class="">
      <div class="mm-toggle-wrap">
        <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
      </div>
      <div class="nav-inner"> 
        <!-- BEGIN NAV -->
        <ul id="nav" class="hidden-xs">
         
          <li class="mega-menu" style="float: left;"> 
            <a class="level-top" href="#" style="padding: 0px 0px 0px 0px;">
              <span>
<?php if(!empty($website_logo[0])){ ?>
<img src="{{ asset('public/uploadimages/').'/'.$website_logo[0] }}" style="width: 205px;"> <?php } ?>
</span>
            </a> 
          </li>

          <li class="mega-menu" style="position: relative;left: 400px;"> 
            <a class="level-top navigation_a" href="{{url('restaurant')}}">
              <span>Restaurant</span>
            </a> 
          </li>
          
          <li class="mega-menu" style="float: right;"> 
            <a class="level-top navigation_a" href="$">
              <span>Login & Signup</span>
            </a> 
          </li>
          
         
        </ul>
       
      </div>
    </div>
  </nav>
  <!-- end nav --> 
    </header>
	