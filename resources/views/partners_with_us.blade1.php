<?php error_reporting(0); ?>
@include('styles')
@include('header')
 <style type="text/css">
  /* #overlay {position: fixed!important;width: 100%!important;height: 100%!important;top: 0!important;left: 0!important;right: 0!important;bottom: 0!important;background-color: rgba(0,0,0,0.5)!important; z-index: 2!important;display: block!important;}*/
    footer{margin-top: 0!important;}
    .clear{clear: both;}
  </style>
  
  <!-- Slider -->
  <!-- bestsell Slider -->
  <div class="col-lg-12 col-md-12" style="background: url(public/images/back1.jpg);">
  
    <!-- <div id="overlay"> -->
      <div class="col-lg-3 col-md-3"></div>
      <div class="col-lg-6 col-md-6" style="background: #fff;margin: 50px 0px;padding: 0;">
        <h2 style="background: #ccc;margin: 0;padding: 20px;color: #fff;text-align: center;font-weight: 600;">ADD RESTAURANT</h2>
		 <?php if(Session::has('flash_message')): ?>
                                   <div id="flashmsg" class="alert alert-success" role="alert" style="">
                                  <?php echo e(Session::get('flash_message')); ?>
                                  </div> 
     <?php endif; ?>
		<form id="frm1" method="post">
        <div style="padding: 30px;">
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-right: 10px;">
              <div class="form-group">
                <input type="text" class="form-control" name="restaurant_name" placeholder="Restaurant Name" style="height: 46px;border-radius: 0;" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-left: 10px;">
              <div class="form-group">
                <input type="text" class="form-control" name="owner_name" placeholder="Owner Name" style="height: 46px;border-radius: 0;" required>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-right: 10px;">
              <div class="form-group">
                <input type="text" class="form-control" name="contact_phone" placeholder="Phone No" style="height: 46px;border-radius: 0;" onkeypress="return isNumber(event)" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-left: 10px;">
              <div class="form-group">
                <input type="email" class="form-control" name="contact_email" placeholder="Email Id" style="height: 46px;border-radius: 0;"  required>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-right: 10px;">
              <div class="form-group">
                <select class="form-control" name="city" style="height: 46px;border-radius: 0;" required="true">
                  <option value="">Select City</option>
                  <option value="Nagpur">Nagpur</option>
                  <option value="Pune">Pune</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-left: 10px;">
              <div class="form-group">
                <select class="form-control" name="state" style="height: 46px;border-radius: 0;" required="true">
                  <option>Select State</option>
				   <option value="Maharashtra">Maharashtra</option>
                
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-right: 10px;">
              <div class="form-group">
                 <input type="text" class="form-control" name="address" placeholder="Location" style="height: 46px;border-radius: 0;" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-left: 10px;">
              <div class="form-group">
                <input type="text" class="form-control" name="post_code" placeholder="Zipcode" style="height: 46px;border-radius: 0;" onkeypress="return isNumber(event)" required >
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-right: 10px;">
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" style="height: 46px;border-radius: 0;" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" style="padding: 0;padding-left: 10px;">
              <div class="form-group">
                <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" style="height: 46px;border-radius: 0;" required>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <input type="checkbox" class="form-control" name="chk" style="width: 4%;float: left;margin: 0;padding: 0;height: 18px;" required="true"><span>I Agree To The Terms And Conditions And Privacy Policy</span>
          </div>
          <div class="col-lg-12 col-md-12" style="padding: 0px;">
            <button class="btn btn-success" style="float: right;">Submit</button>
          </div>
          <div class="clear"></div>
        </div>
		</form>
		
      </div>
    <!-- </div> -->
  </div>
@include('footer')

<script type="text/javascript">
  function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
    var wrap = $("#wrap");

    wrap.on("scroll", function(e) {
        
      if (this.scrollTop > 147) {
        wrap.addClass("fix-search");
      } else {
        wrap.removeClass("fix-search");
      }
      
    });
  </script>
<script>
/*function getMerchantData()
{
	getMerchant();
}*/
$(document).ready(function(){
	getMerchant();
  //alert('hi')
})

$("#frm1").submit(function(e){

     e.preventDefault();
   
  
        var form=$("#frm1")[0];
        var fd =new FormData(form);


          $.ajax({
                   url: '{{url("register_restaurant")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
                                   window.location ='{{url("partners_with_us?msg=")}}'+response.msg;
                           
                           }else 
                           {
                            
                             alert(response.msg);
                           }
            },
             });

         
 });
 setTimeout(function() {
 $('#flashmsg').fadeOut();
 $('#flashmsg').val('')
}, 1000 );

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}	
		</script>