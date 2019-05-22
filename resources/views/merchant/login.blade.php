<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="admintemplate/css/bootstrap.min.css" rel="stylesheet">
    <link href="admintemplate/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="admintemplate/css/animate.css" rel="stylesheet">
    <link href="admintemplate/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

            <!--  <center>  <h1 class="logo-name">RABZO</h1></center>-->

            </div>
            <h3>Merchant Login</h3>
          
           <!-- <form class="m-t" id="frm" role="form" action="{{url('submit_login')}}"> -->
           <form class="m-t" id="frm" role="form" > 
		    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" id="token">
                <div class="form-group">
                    <input type="text" id="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" id="btnLogin1" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
              <!--  <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
            </form>
            <p class="m-t"> <small> &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="admintemplate/js/jquery-3.1.1.min.js"></script>
    <script src="admintemplate/js/bootstrap.min.js"></script>

</body>

</html>
<script>

$("#frm").submit(function(e){

	e.preventDefault();
	
	var username =$("#username").val();
	var password =$("#password").val();
	
	$.ajax({
        		  type: "POST",
                  url: "{{url('merchant_authenticate')}}",        
				  //dataType:"json",
        		  data: ({"username":username,"password":password , "_token": $('#token').val()}),
        		  success: function(data)          
        			  {
                        //alert(data)
						 if(data.ResponseCode == '200')
						  {
							   window.location.href ="{{url('merchant_home')}}";
							 
						  }else if(data.ResponseCode == '400'){
							 alert('invalid login')
						  }
						 // alert(data)
						  console.log(data)
                        
			         }
            });
})
</script>