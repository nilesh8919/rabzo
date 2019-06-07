	@include('header')
	<style type="text/css">
    .step_first_no{float:left;background: #ccc;width: 50px;text-align: center;height: 50px;font-family: sans-serif;padding-top: 6px;}
    .dahed_vertical_line{float:left;border: 1px dashed #ccc;float: left;width: 84%;position: relative;top: 44px;}
    .checkout_login_btn{background: #078222;border: 0;padding: 15px 100px;font-size: 18px;position: relative;left: 130px;border-radius: 60px;color: #fff;}
    .checkout_signup_btn{background: #bf3106;border: 0;padding: 15px 100px;font-size: 18px;position: relative;border-radius: 60px;color: #fff;}

    /*========slide code css start======*/
    .slide_div {margin: 0;border: 0;padding: 0;width: 100%;height: 400px;}
    .container1 {position: absolute;top: 0;left: 0;margin: 0;border: 0 none;padding: 0;width: 100%;height: 100%;background: #BAEFBA;overflow: hidden;text-align: center;}
    .container1:before {display: inline-block;content: '';height: 100%;margin-right: -0.25rem;vertical-align: middle;}
    .container1 h2 {display: inline-block;color: #fff;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 50px;font-weight: 100;line-height: 1em;margin-left: 50px;vertical-align: middle;}
    .container1 .page_slide {-moz-transition: visibility linear, -moz-transform 0.8s ease-out;-o-transition:visibility linear, -o-transform 0.8s ease-out;-webkit-transition: visibility linear, -webkit-transform 0.8s ease-out;transition: visibility linear, transform 0.8s ease-out;-moz-box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.35);-webkit-box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.35);box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.35);-moz-transform: translateX(0);-ms-transform: translateX(0);-webkit-transform: translateX(0);transform: translateX(0);position: absolute;top: 0;left: 0;width: 100%;height: 100%;visibility: visible;text-align: center;}
    .container1 .page_slide:before {display: inline-block;content: '';height: 100%;margin-right: -0.25rem;vertical-align: middle;}
    .container1 .page_slide.hidden1 {-moz-transition: visibility 0.8s linear, -moz-transform 0.8s ease-in;-o-transition: visibility 0.8s linear, -o-transform 0.8s ease-in;-webkit-transition: visibility 0.8s linear, -webkit-transform 0.8s ease-in;transition: visibility 0.8s linear, transform 0.8s ease-in;-moz-transform: translateX(100%);-ms-transform: translateX(100%); -webkit-transform: translateX(100%);transform: translateX(100%);visibility: hidden;}
    .container1 .page_slide#page1 {background: url(images/back1.jpg);background-position: center;}
    .container1 .page_slide#page2 {background-color: #fff;}
    .container1 .page_slide#page3 {background-color: #DDBEF8;}
    .container1 .page_slide#page4 {background-color: #5C14BC;}
    .change-page {position: absolute;display: inline-block;right: 0;left: 0;margin: 0 auto;border: 0 none;padding: 0;text-align: center;list-style: none;}
    .change-page li {display: inline-block;}
    .change-page li:first-child {margin-right: 20px;}
    .change-page li a {display: block;padding: 15px;font-family: Helvetica, Arial, sans-serif;font-size: 11px;line-height: 1em;color: #fff;text-decoration: none;text-transform: uppercase;background: black;}
    .change-page li a:hover {color: black;background: darkgray;}

    /*========new address slide down panel========*/
    #panel, #flip {padding: 5px;text-align: center; /* background-color: #e5eecc;border: solid 1px #c3c3c3;*/}
    #panel {/*padding: 50px;*/display: none;}

  </style>
	

		
  <div class="col-lg-12 col-md-12" style="background: #e9ecee;">
    <div class="container">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-8 col-md-8" style="margin: 40px 0px 20px;">
          <!--login div start-->
          <div class="col-lg-12 col-md-12" style="padding:0;background: url(images/back1.jpg);background-position: center;background-size: contain;padding: 0px 0px 48px;">
              <center><img src="images/rabzo_logo_circle.png" style="width: 200px;"></center>
              <!-- <div class="col-lg-3 col-md-3"></div> -->
			  <?php if(count(Session::get('users')) == '0'){ ?>
              <div class="col-lg-6 col-md-6" style="padding: 0;position: relative;top: 16px;">
                <button class="btn btn-default checkout_login_btn" data-toggle="modal" data-target="#loginsignup">Login</button>
              </div> 
              <div class="col-lg-6 col-md-6" style="padding: 0;position: relative;top: 16px;">
                
                <button class="btn btn-default checkout_signup_btn">Signup</button>
              </div> 
			  <?php }else{ ?>
			
			   <?php } ?>
          </div>
          <!--login div end-->

          <!--address div start-->

          <!--address div end-->
        </div>
        <div class="col-lg-4 col-md-4" style="background: #fff;margin: 40px 0px;">
          <div class="col-lg-12 col-md-12" style="padding: 0;">
            <div class="col-lg-4 col-md-4" style="padding: 0;">
              <img src="images/food.jpg" style="width: 100px;margin-top: 13px;">
            </div>
            <div class="col-lg-8 col-md-8" style="padding: 0;">
              <h3>Haldiram</h3>
              <p>Wardha Road</p>
            </div>
          </div>
          <table class="table">
             <thead>
			                    <tr>
			                      <td>Name</td>
			                      <td>Qty</td>
			                 <td>Size</td>
			                      <td>Price</td>
			                      <td></td>
			                    </tr>
			                  </thead>
			                  <tbody id="orderedProductsTblBody">
			                  </tbody>
			                  <tfoot>
			                    <tr>
			                      <td colspan="4" align="right" id="cart_total">
			                      </td>
								  <td></td>
			                    </tr>
			                  </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
		<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

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
</style>
	
			
	@include('footer')
 
	<script type="text/javascript">
	function getCheckout()
	{
		window.location.href="{{ url('checkout') }}";
	}
	$(document).ready(function(){
		var wrap = $("#wrap");

		wrap.on("scroll", function(e) {
		    
		  if (this.scrollTop > 147) {
		    wrap.addClass("fix-search");
		  } else {
		    wrap.removeClass("fix-search");
		  }
		  
		});
		//getItems()
	})
		
	</script>

 <!-- Modal -->
  <div class="modal fade" id="loginsignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title" id="myModalLabel">Modal 1</h4>
        </div>
        
        <div class="modal-body">
          <!--login signup code start-->
          <div class="login-page">
            <div class="form">
              <form class="register-form" id="register-form" method="post">
                <input type="text" placeholder="name" name="name" />
				 <input type="text" placeholder="email address" name="email_address" />
                <input type="password" placeholder="password" name="password" />
               
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form>
              <form class="login-form" id="login-form" method="post">
                <input type="text" placeholder="username" name="email_address" />
                <input type="password" placeholder="password" name="password" />
                <button id="">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
              </form>
            </div>
          </div>
          <!--login sign up code end-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="addressmodelbtn">Sign In Now</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      
      </div>
    </div>
  </div>
    
    <!--Address Modal -->
  <div class="modal fade" id="AddressModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title" id="myModalLabel">Modal 2</h4>
        </div>
        
        <div class="modal-body">
          <!--address code start-->
          <div class="col-lg-12 col-md-12">
            <div class="col-lg-6 col-md-6 addresmodel_address_div"><i class="fa fa-home" aria-hidden="true"></i>
              <p style="">Plot no 36, Jaibadrinath Society, Near Bhende Layout, Khamla Road, Nagpur - 440025</p>
            </div>
            <div class="col-lg-5 col-md-5" style="margin-top: 90px;margin-left: 30px;">
              <button class="btn btn-default new_address_btn" id="flip"><i class="fa fa-plus" aria-hidden="true"></i> Add New Address</button>
              <div id="panel">
                <textarea class="form-control" placeholder="Enter Your New Address" rows="6" style="border: 1px dashed #000;"></textarea>
              </div>
            </div>
          </div>
          <!--address up code end-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="paymentmodelbtn">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
          </form>
      </div>
    </div>
  </div>

  <!--payment model-->
  <div class="modal fade" id="PaymentModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title" id="myModalLabel">Modal 2</h4>
        </div>
        
        <div class="modal-body">
          <h3>Payment Model</h3>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-primary" id="paymentmodelbtn">Sign In Now</button> -->
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
          </form>
      </div>
    </div>
  </div>
<!--model script-->
  <script type="text/javascript">
    //set button id on click to hide first modal
    $("#addressmodelbtn").on( "click", function() {
            $('#loginsignup').modal('hide');  
    });
    //trigger next modal
    $("#addressmodelbtn").on( "click", function() {
            $('#AddressModel').modal('show');  
    });

    $("#paymentmodelbtn").on( "click", function() {
            $('#AddressModel').modal('hide');  
    });
    //trigger next modal
    $("#paymentmodelbtn").on( "click", function() {
            $('#PaymentModel').modal('show');  
    });
  </script>



<!--login sign up script start-->
  <script type="text/javascript">
    $('.message a').click(function(){
       $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
  </script>
<!--login soign up script end-->
<script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideDown("slow");
      });
    });
	
		    var shoppingCart = [];
displayShoppingCart();
	    //this function manipulates DOM and displays content of our shopping cart
	    function displayShoppingCart(){
	        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
	        //ensure we delete all previously added rows from ordered products table
	        while(orderedProductsTblBody.rows.length>0) {
	            orderedProductsTblBody.deleteRow(0);
	        }
 
		   $.ajax({
				type:"get",
				url:"{{url('get_cart')}}",
			  data:{'shoppingCart':shoppingCart},
			  dataType:'json',
			  success:function(res){
				 var shoppingCart = res;
				 console.log(res);
	        //variable to hold total price of shopping cart
						var cart_total_price=0;
						//iterate over array of objects
						for(var product in shoppingCart){
							//add new row      
							var row=orderedProductsTblBody.insertRow();
							//create three cells for product properties 
							var cellName = row.insertCell(0);
							var cellQty = row.insertCell(1);
							var cellSize = row.insertCell(2);
							var cellPrice = row.insertCell(3);
							var cellRemove = row.insertCell(4);
							// cellPrice.align="right";
							//fill cells with values from current product object of our array
							cellName.innerHTML = shoppingCart[product].Name;
							cellQty.innerHTML = shoppingCart[product].Qty;
							cellSize.innerHTML = shoppingCart[product].size;
							cellPrice.innerHTML = '<span style="text-align:right">'+shoppingCart[product].Price+'</span>';
							cellRemove.innerHTML = '<a href="#"><i class="fa fa-times"></i></a>';
							cart_total_price+=parseFloat(shoppingCart[product].Price);
						}
						//fill total cost of our shopping cart 
						document.getElementById("cart_total").innerHTML=cart_total_price;
				 
			  }
			})
		   
	    }
		
		
  $("#register-form").submit(function(e){

     e.preventDefault();
       var form=$("#register-form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("create_register")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.ResponseCode== '200')
                           {
 
                             window.location ='{{url("checkout")}}' ;
                           }else 
                           {
                             alert("Unable to add");
                           }
            },
             });       
 });
 $("#login-form").submit(function(e){

     e.preventDefault();
       var form=$("#login-form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("create_login")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,
            success:function(response){
               if(response.ResponseCode== '200')
                           {
                             
                             window.location ='{{url("checkout")}}' ;
                           }else 
                           {
                             alert("Unable to add");
                           }
            },
             });       
 });
  </script>
  <?php if(count(Session::get('users')) > '0'){ ?>
   
     <script>
			  $(document).ready(function(){
				//  alert('hi')
				  $("#AddressModel").modal('show');
			  })
			  
			  </script>
   <?php  } ?>