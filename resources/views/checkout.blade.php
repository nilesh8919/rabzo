	@include('header')
	<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Monda);
    .clearfix:after, .checkout-step section:after {clear: both;content: ".";display: block;height: 0;visibility: hidden;}

    .clearfix, .checkout-step section {display: inline-block;}

    .clearfix, .checkout-step section {display: block;}

    

    iframe {width: 320px;outline: 0;border: 0;}

    .checkout-page {max-width: 900px;margin: 0 auto;}
    .checkout-page .checkout-header h2 {font-weight: bold;font-family: 'Monda', sans-serif;color: #222;font-size: 1.4em;padding: 14px 9px;margin-bottom: 10px;background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2RkZGRkZCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');background-size: 100%;background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #ffffff), color-stop(100%, #dddddd));background-image: -moz-linear-gradient(left, #ffffff, #dddddd);background-image: -webkit-linear-gradient(left, #ffffff, #dddddd);
      background-image: linear-gradient(to right, #ffffff, #dddddd);border-top: 3px solid #4E6387;border-bottom: 3px solid #4E6387;position: relative;}
    .checkout-page .checkout-header .secure {position: absolute;display: inline-block;right: 0;top: 10px;}
    .checkout-page .checkout-header .secure img {width: 45px;}

    .checkout-step {-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;margin-bottom: 10px;background: #eee;border-top: 1px solid #ddd;border-bottom: 1px solid #aaa;padding: 10px;-moz-transition: background 0.3s ease-out;-o-transition: background 0.3s ease-out;-webkit-transition: background 0.3s ease-out;transition: background 0.3s ease-out;opacity: .5;border-left: 1px solid transparent;border-right: 1px solid transparent;}
    .checkout-step:first-child {margin-top: 10px;}
    .checkout-step h3 {margin: 0;}
    .checkout-step section {height: 0;overflow: hidden;position: relative;}
    .checkout-step section button {clear: both;bottom: 0;position: absolute;background: #666;color: white;font-size: 1em;border-right: 2px solid #666;border-bottom: 2px solid #666;}
    .checkout-step section button:hover {background: #999;}
    .checkout-step section .cart {width: 100%;height: 100px;padding-top: 20px;position: relative;}
    .checkout-step section .cart .item {padding-left: 5px;font-weight: bold;font-size: .9em;}
    .checkout-step section .cart .price {display: inline-block;float: right;bottom: 10px;position: absolute;right: 0;font-size: .9em;font-weight: bold;}
    .checkout-step section .cart img {border: 1px solid black;width: 150px;}
    .checkout-step section .total {height: 50px;width: 100%;}
    .checkout-step.active {opacity: 1;cursor: default;background: #fff;}
    /*.checkout-step.active:hover {background: #eee;}*/
    .checkout-step.active h3 {border-bottom: 1px solid #aaa;padding-bottom: 5px;}
    .checkout-step.active section {min-height: 100px;height: auto;}

    .stepNum {color: white;background: #333;padding: 5px 9px;border-radius: 50%;font-size: .6em;top: -2px;left: -3px;position: relative;display: inline-block;}
    .clear{clear: both;}

    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
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
	

		
  <div class="col-lg-12 col-md-12" style="background: #e9ecee;">
    <div class="container">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-8 col-md-8" style="margin: 40px 0px 20px;">
          <!--login div start-->
          <div class="col-lg-12 col-md-12" style="">
            <!--checkout section start-->
            <div class="checkout-page">
              <!-- <div class="checkout-header">
                <h2>
                Nation Subscription  
                  <div class="secure">
                    <img src='http://cdn1.iconfinder.com/data/icons/Isloo_icons_by_IconFinder/128/lock.png'>
                  </div>
                </h2>    
              </div> -->
              <div class="checkout-step active">
                <h3>
                  <span class="stepNum">1</span>
                    My Accounts
                </h3>
                <section>
                    <div class="cart">
                      <div class="col-lg-12 col-md-12" style="position: relative;top: 50px;">
                        <div class="col-lg-3 col-md-3">
                          <button class="btn btn-default" data-toggle="modal" data-target="#loginModel" style="background: #69d67cf2;border-radius: 0;box-shadow: none;border: none;">
                            <p style="margin: 0;">Have an account?</p><span style="font-size: 16px;font-weight: 600;">Login</span>
                          </button>
                        </div>
                        <div class="col-lg-3 col-md-3">
                          <button class="btn btn-success" data-toggle="modal" data-target="#signupModel" style="background: transparent;border-radius: 0;box-shadow: none;border: 1px solid #e84405;color: #000;"><p style="margin: 0;">Create Your Account</p><span style="font-size: 16px;font-weight: 600;">Signup</span></button>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                    <div class="total"></div>
                    <button class="nextStep">Continue →</button>
                </section>
              </div>
              <div class="checkout-step">  
                <h3>
                    <span class="stepNum">2</span>
                    Delivery Address
                </h3>
                <section>
                    <div class="col-lg-5 col-md-5" style="border: 1px solid #ccc;padding: 30px 30px;">
                      <p style="line-height: 22px;">Plot No 36 Jaibadrinath Society, Near Bhnede Layout, Khamla Road, Nagpur - 440025</p>
                    </div>
                    <div class="col-lg-5 col-md-5" style="padding: 68px;padding-top: 10px;">
                      <button style="font-size: 15px;width: 220px;padding: 12px;border: none;box-shadow: none" data-toggle="modal" data-target="#addnewaddressModel">Add New Address</button>
                    </div>
                    <button class="nextStep">Continue →</button>
                </section>
              </div>
            <div class="checkout-step">   
                <h3>
                    <span class="stepNum">3</span>
                    Payment Method
                </h3>
                <section>
                  <h3>Choose your Payment Mode</h3>
                <button class="nextStep">Continue →</button>
                </section>
              </div>
            <!-- <div class="checkout-step ">
                <h3>      
                    <span class="stepNum">4</span>
                    Confirmation and Receipt
                </h3>
                <section>
                    <button class="reset">Restart</button>
                </section>
            </div> -->
          </div>
            <!--checkout section end-->
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
                <th>Item</th>
                <th style="text-align: center;">Qty</th>
                <th style="text-align: center;">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tandoori Chicken</td>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;"> <i class="fa fa-inr"></i> 200</td>
              </tr>
              <tr>
                <td>Chicken Biryani</td>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;"> <i class="fa fa-inr"></i> 100</td>
              </tr>
              <tr>
                <th></th>
                <th style="text-align: center;">Total</th>
                <th style="text-align: center;"> <i class="fa fa-inr"></i> 300</th>
              </tr>
            </tbody>
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
  </script>

  <!--checkout script start-->
  <script type="text/javascript">
    (function () {
        var checkoutStep;

        checkoutStep = $(".checkout-step");

        $(".nextStep").on("click", function (e) {
          var nextStep;
          nextStep = $(this).parent().parent().next();
          checkoutStep.removeClass("active");
          return $(nextStep).addClass("active");
        });

        $(".reset").on("click", function (e) {
          checkoutStep.removeClass("active");
          return checkoutStep.first().addClass("active");
        });

    }).call(this);
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
   
   <script type="text/javascript" src="https://fgnass.github.com/spin.js/dist/spin.min.js"></script>  


 <!--login Modal -->
  <div class="modal fade" role="dialog" id="loginModel">
    <div class="modal-dialog" style="width: 380px;">
      <div class="modal-content">
        <!-- <div class="modal-header">
         
          <h4 class="modal-title" id="myModalLabel">Modal 1</h4>
        </div> -->
        
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
  <!--new address Modal -->
  <div class="modal fade" role="dialog" id="addnewaddressModel">
    <div class="modal-dialog" style="width: 380px;">
      <div class="modal-content">
        <div class="modal-body">
          <!--login signup code start-->
          <div class="col-lg-12 col-md-12">
            
            <form class="">
              <input type="text" class="form-control" placeholder="Location" name=""><i class="fa fa-crosshairs" aria-hidden="true" style="position: absolute;float: right;right: 28px;top: 6px;font-size: 19px;"></i>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238129.60363191523!2d78.93242195217401!3d21.161348396232462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0a5a31faf13%3A0x19b37d06d0bb3e2b!2sNagpur%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1559929983223!5m2!1sen!2sin" class="delivery_address_map" frameborder="0" style="border:0" allowfullscreen></iframe>
              <input type="text" class="form-control" placeholder="Address 1" name="" style="margin-top: 20px;">
              <input type="text" class="form-control" placeholder="Address 2" name="" style="margin-top: 20px;">
              <input type="button" class="btn btn-success" value="Submimt" style="margin-top: 20px;">
            </form>
            
          </div>
          <!--login sign up code end-->
          <div class="clear"></div>
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
  </script