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
<<<<<<< HEAD
					              <a class="level-top navigation_a" href="" data-toggle="modal" data-target="#myModal">
=======
								 <?php if(count(Session::get('users')) == '0'){ ?>
					              <a class="level-top navigation_a" href="$">
>>>>>>> af6868d600bd644ade628b266725a3b87a5c58a0
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
		<style type="text/css">
			/*=======login and sigup toggle css start=======*/
    .login-page {width: 360px;margin: auto;}
    .form {position: relative;z-index: 1;background: #FFFFFF;max-width: 360px;padding: 45px;text-align: center;}
    .form input {font-family: "Roboto", sans-serif;outline: 0;background: #f2f2f2;width: 100%;border: 0;margin: 0 0 15px;
      padding: 15px;box-sizing: border-box;font-size: 14px;}
    .form button {font-family: "Roboto", sans-serif;text-transform: uppercase;outline: 0; background: #4CAF50;width: 100%;border: 0;padding: 15px;color: #FFFFFF;font-size: 14px;-webkit-transition: all 0.3 ease;transition: all 0.3 ease;
      cursor: pointer;}
    .form button:hover,.form button:active,.form button:focus {background: #43A047;}
    .form .message {margin: 15px 0 0;color: #b3b3b3;font-size: 12px;}
    .form .message a {color: #4CAF50;text-decoration: none;}
    .form .register-form {display: none;}
    .containerlogin {position: relative;z-index: 1;max-width: 300px;margin: 0 auto;}
    .containerlogin:before, .containerlogin:after {content: "";display: block;clear: both;}
    .containerlogin .info {margin: 50px auto;text-align: center;}
    .containerlogin .info h1 {margin: 0 0 15px;padding: 0;font-size: 36px;font-weight: 300;color: #1a1a1a;}
    .containerlogin .info span {color: #4d4d4d;font-size: 12px;}
    .containerlogin .info span a {color: #000000;text-decoration: none;}
    .containerlogin .info span .fa {color: #EF3B3A;}
    .addresmodel_address_div{border: 1px dashed #000;margin-top: 72px;margin-left: 00px;    margin-bottom: 50px;background: #fff;box-shadow: 0px 0px 15px;}
    .addresmodel_address_div i{font-size: 25px;float: left;position: relative;bottom: 14px;}
    .addresmodel_address_div p{color: #000;font-size: 15px;letter-spacing: 1px;font-family: sans-serif;line-height: 28px;padding: 40px 10px;}
    .new_address_btn{background: transparent;color: #000;padding-left: 30px;padding-right: 30px;}
    .delivery_address_map{width: 100%;height: 300px;margin-top: 20px;}
    /*=======login and sigup toggle css end=======*/
		</style>
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <!--login signup code start-->
          <div class="login-page">
            <div class="form">
              <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form>
              <form class="login-form">
                <input type="text" placeholder="username"/>
                <input type="password" placeholder="password"/>
                <button id="">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
              </form>
            </div>
          </div>
          <!--login sign up code end-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--login sign up script start-->
  <script type="text/javascript">
    $('.message a').click(function(){
       $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
  </script>
<!--login soign up script end-->