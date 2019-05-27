	@include('header')
	<style>
		 <style type="text/css">
    .step_first_no{float:left;background: #ccc;width: 50px;text-align: center;height: 50px;font-family: sans-serif;padding-top: 6px;}
    .dahed_vertical_line{float:left;border: 1px dashed #ccc;float: left;width: 84%;position: relative;top: 44px;}
    .checkout_login_btn{color: #fff;background: #3a126c;border-radius: 0;border: 0;padding: 70px 63px;font-size: 17px;}
    .checkout_signup_btn{color: #fff;background: #525154;border-radius: 0;border: 0;padding: 70px 63px;font-size: 17px;}

    /*========slide code css start======*/
    .slide_div {
      margin: 0;
      border: 0;
      padding: 0;
      width: 100%;
      height: 400px;
    }
    .container1 {
      position: absolute;
      top: 0;
      left: 0;
      margin: 0;
      border: 0 none;
      padding: 0;
      width: 100%;
      height: 100%;
      background: #BAEFBA;
      overflow: hidden;
      text-align: center;
    }
    .container1:before {
      display: inline-block;
      content: '';
      height: 100%;
      margin-right: -0.25rem;
      vertical-align: middle;
    }
    .container1 h2 {
      display: inline-block;
      color: #fff;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 50px;
      font-weight: 100;
      line-height: 1em;
      margin-left: 50px;
      vertical-align: middle;
    }
    .container1 .page_slide {
      -moz-transition: visibility linear, -moz-transform 0.8s ease-out;
      -o-transition: visibility linear, -o-transform 0.8s ease-out;
      -webkit-transition: visibility linear, -webkit-transform 0.8s ease-out;
      transition: visibility linear, transform 0.8s ease-out;
      -moz-box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.35);
      -webkit-box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.35);
      box-shadow: 0 0 32px 0 rgba(0, 0, 0, 0.35);
      -moz-transform: translateX(0);
      -ms-transform: translateX(0);
      -webkit-transform: translateX(0);
      transform: translateX(0);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      visibility: visible;
      text-align: center;
    }
    .container1 .page_slide:before {
      display: inline-block;
      content: '';
      height: 100%;
      margin-right: -0.25rem;
      vertical-align: middle;
    }
    .container1 .page_slide.hidden1 {
      -moz-transition: visibility 0.8s linear, -moz-transform 0.8s ease-in;
      -o-transition: visibility 0.8s linear, -o-transform 0.8s ease-in;
      -webkit-transition: visibility 0.8s linear, -webkit-transform 0.8s ease-in;
      transition: visibility 0.8s linear, transform 0.8s ease-in;
      -moz-transform: translateX(100%);
      -ms-transform: translateX(100%);
      -webkit-transform: translateX(100%);
      transform: translateX(100%);
      visibility: hidden;
    }
    .container1 .page_slide#page1 {
      /*background-color: #fff;*/
          background: url(images/back1.jpg);
          background-position: center;
    }
    .container1 .page_slide#page2 {
      background-color: #fff;
    }
    .container1 .page_slide#page3 {
      background-color: #DDBEF8;
    }
    .container1 .page_slide#page4 {
      background-color: #5C14BC;
    }
    .change-page {
      position: absolute;
      display: inline-block;
      right: 0;
      left: 0;
      margin: 0 auto;
      border: 0 none;
      padding: 0;
      text-align: center;
      list-style: none;
    }
    .change-page li {
      display: inline-block;
    }
    .change-page li:first-child {
      margin-right: 20px;
    }
    .change-page li a {
      display: block;
      padding: 15px;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 11px;
      line-height: 1em;
      color: #fff;
      text-decoration: none;
      text-transform: uppercase;
      background: black;
    }
    .change-page li a:hover {
      color: black;
      background: darkgray;
    }

    /*========new address slide down panel========*/
    #panel, #flip {
      padding: 5px;
      text-align: center;
     /* background-color: #e5eecc;
      border: solid 1px #c3c3c3;*/
    }

    #panel {
      /*padding: 50px;*/
      display: none;
    }

  </style>
	</style>
	

		
			<div class="container" style="margin-top: -47px;">
				<div class="col-lg-12 col-md-12" style="background: #e9ecee;">
    <div class="container">
      <div class="col-lg-12 col-md-12">
        <div class="col-lg-8 col-md-8" style="margin: 40px 0px;">
          <!--login div start-->
          <div class="col-lg-12 col-md-12" style="padding:0;">
            <!--toggle slide code start-->
            <div class="slide_div" style="">
              <div class="container1">
                <h2>background</h2>
                <div id="page1" data-id="1" class="page_slide" style="padding: 55px 0px;">
                  <!--login signup-->
                  <div class="col-lg-6 col-md-6" style="padding-top: 50px;padding-bottom: 50px;">
                    <!-- <div class="col-lg-12 col-md-12" style="padding:0;">
                      <h1 class="step_first_no">1</h1><span class="dahed_vertical_line"></span>
                    </div> -->
                    <div class="col-lg-12 col-md-12" style="padding: 0;position: relative;top: 16px;">
                      <button class="btn btn-default checkout_login_btn" id="login_btn">Login</button>
                      <button class="btn btn-default checkout_signup_btn" id="signup_btn">Signup</button>
                    </div> 
                  </div>
                  <!--login start-->
                  <div class="col-lg-6 col-md-6" id="login_div" style="background: #fff;padding-top: 66px;width: 48%;margin-left: 15px;">
                    <!-- <label>Enter Your Register Mobile No.</label> -->
                    <input type="text" name="" class="form-control" placeholder="Enter Your Register No" style="border-radius: 0;height: 50px;">
                    <input type="text" id="enter_otp" name="" class="form-control" placeholder="Enter OTP" style="border-radius: 0;height: 50px;">
                    <input type="button" class="btn btn-success" value="Login" id="login_btn_id" name="" style="border-radius: 0;border: 0;    padding: 14px 152px;margin: 10px 0;">
                  </div>
                  <!--signup start-->
                  <div class="col-lg-6 col-md-6" id="signup_div" style="background: #fff;padding-top: 22px;width: 48%;margin-left: 15px;">
                    <!-- <label>Enter Your Register Mobile No.</label> -->
                    <input type="text" name="" class="form-control" placeholder="Enter Your Name" style="border-radius: 0;height: 50px;">
                    <input type="email" id="signup" name="" class="form-control" placeholder="Enter Your Mail Id" style="border-radius: 0;height: 50px;margin-top: 10px;">
                    <input type="text" id="signup" name="" class="form-control" placeholder="Enter Your Phone No" style="border-radius: 0;height: 50px;margin-top: 10px;">
                    <input type="email" id="signup" name="" class="form-control" placeholder="Enter Password" style="border-radius: 0;height: 50px;margin-top: 10px;">
                    <input type="button" class="btn btn-success" value="Signup" id="signup_btn_id" name="" style="border-radius: 0;border: 0;padding: 14px 152px;margin: 10px 0;">
                  </div>
                </div>
                <div id="page2" data-id="2" class="page_slide">
                  <!--adress div start-->
                  <div class="col-lg-12 col-md-12">
                    <div class="col-lg-5 col-md-5" style="border: 1px dashed #000;margin-top: 90px;margin-left: 50px;"><i class="fa fa-home" aria-hidden="true" style="font-size: 25px;float: left;position: relative;bottom: 14px;"></i>
                      <p style="color: #000;font-size: 15px;letter-spacing: 1px;font-family: sans-serif;line-height: 28px;padding: 40px 10px;">Plot no 36, Jaibadrinath Society, Near Bhende Layout, Khamla Road, Nagpur - 440025</p>
                    </div>
                    <div class="col-lg-5 col-md-5" style="margin-top: 90px;margin-left: 30px;">
                      <button class="btn btn-default" id="flip" style="background: transparent;color: #000;padding-left: 67px;padding-right: 67px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New Address</button>
                      <div id="panel">
                        <textarea class="form-control" placeholder="Enter Your New Address" rows="6" style="border: 1px dashed #000;"></textarea>
                      </div>
                    </div>
                  </div>
                  <!--address div end-->
                </div>
                <div id="page3" data-id="3" class="page_slide">
                  <h2>page 3</h2>
                </div>
                <!-- <div id="page4" data-id="4" class="page_slide">
                  <h2>page 4</h2>
                </div> -->
              </div>
              <ul class="change-page">
                <!-- <li>
                  <a id="button-0" href="#" title="button-0" class="button hide-all" data-page-id="0">hide all</a>
                </li> -->
                <li>
                  <a id="button-1" href="#" title="button-1" class="button" data-page-id="1">Login</a>
                </li>
                <li>
                  <a id="button-2" href="#" title="button-2" class="button" data-page-id="2">Address</a>
                </li>
                <li>
                  <a id="button-3" href="#" title="button-3" class="button" data-page-id="3">Payment</a>
                </li>
                <!-- <li>
                  <a id="button-4" href="#" title="button-4" class="button" data-page-id="4">page 4</a>
                </li> -->
              </ul>
            </div>
            <!--toggle slide code end-->
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
			</div>
			
			
	@include('footer')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
		getItems()
	})
		
	</script>

	<!--shoping cart-->

  	
 <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
 <!--checkout end-->
  <script type="text/javascript">
    function showPage(pid) {
      $(".page_slide").addClass("hidden1").filter("[data-id='" + pid + "']").removeClass("hidden1");
      return this;
    }

    $(".button").on("click", function(evt) {
      evt.preventDefault();
      evt.stopPropagation();
      var $this = $(this);
      showPage($this.attr("data-page-id"));
      return;
    });

    showPage(1);
  </script>
  <script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideDown("slow");
      });
    });
  </script>
  
  
<script type="text/javascript">
  $(document).ready(function(){
    $('#login_div').hide();
    $('#login_btn').click(function(){
      $('#login_div').show();
      $('#signup_div').hide();
    })

    $('#enter_otp').hide();
    $('#login_btn_id').click(function(){
      $('#enter_otp').show();
    })

    $('#signup_div').hide();
    $('#signup_btn').click(function(){
      $('#signup_div').show();
      $('#login_div').hide();
    })
  });
</script>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
	<form method="post">
	<input type="hidden" name="item_name" id="item_name" />
	<input type="hidden" name="item_id" id="item_id" />
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="modal_title">Add Dish</h4>
      </div>
      <div class="modal-body">
        <p id="sizes">
		
		
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="AddtoCart()">Add</button>
      </div>
	  </form>
    </div>

  </div>
</div>