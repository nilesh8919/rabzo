<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | voucher</title>
 @include('merchant.layouts.styles')
  

</head>

<body>
    <div id="wrapper">
	@include('merchant.layouts.leftpanel')


        <div id="page-wrapper" class="gray-bg">
      
	  @include('merchant.layouts.header')
     <div class="wrapper wrapper-content animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Restaurant Information</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Login Information</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Marchant Type</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4">Featured</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-5">Payment Setting</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-6">Google Map</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12" style="padding: 0px;">
                                        <div class="col-lg-6 col-md-6" style="">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Restaurant Slug</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Restaurant Name</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Restaurant Phone</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Contact Name</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Contact Phone</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Contact Mail</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Country</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control">
                                                            <option>India</option>
                                                            <option>America</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6" style="">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Street</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">City</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Post Code / Zip Code</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">State</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Cuisine</label>
                                                    <div class="col-lg-8">
                                                        <select data-placeholder="Choose a Cuisine..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                                                            <option value="">Select</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Aland Islands">Aland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Services</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control">
                                                            <option>Delivery & Pickup</option>
                                                            <option>Delivery Only</option>
                                                            <option>Pickup Only</option>
                                                            <option>Delivery / Pickup / Dinein</option>
                                                            <option>Delivery & Dinein</option>
                                                            <option>Pickup & Dinein</option>
                                                            <option>Dinein Only</option>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Status</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control">
                                                            <option>Pending for approval</option>
                                                            <option>Active</option>
                                                            <option>Suspended</option>
                                                            <option>Blocked</option>
                                                            <option>Expired</option>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab2 start-->
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="col-lg-9 col-md-9 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Username</label>
                                                <div class="col-lg-8">
                                                    <input type="email" class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Password</label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab3-->
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="col-lg-9 col-md-9 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Membership Type</label>
                                                <div class="col-lg-8">
                                                    <select class="form-control">
                                                        <option>Membership</option>
                                                        <option>Commission</option>
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Package Name</label>
                                                <div class="col-lg-8">
                                                    <select class="form-control">
                                                        <option>Gold</option>
                                                        <option>Silver</option>
                                                        <option>Free</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Package Price</label>
                                                <div class="col-lg-8">
                                                    <p style="position: relative;top: 7px;"><i class="fa fa-inr"></i>0.00</p>
                                                </div>
                                            </div>
                                            <div class="form-group" id="data_1">
                                                <label class="col-lg-4 control-label">Membership Expiry on</label>
                                                <div class="col-lg-8">
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab4-->
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="col-lg-9 col-md-9 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Is Featured?</label>
                                                <div class="col-lg-8">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                                <p style="margin-top:10px;text-align: center;">Check this if you want this merchant featured on homepage</p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab5-->
                            <div id="tab-5" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
                                        <h4>Disabled Payment Gateway</h4>
                                        <div class="col-lg-6 col-md-6 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Cash on delivery</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Offline credit card payment</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Pay on delivery</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Paypal</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Payumoney</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Rupay</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Paytm</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Phonepay</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-6 control-label">Googlepay</label>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab6 start-->
                            <div id="tab-6" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="col-lg-9 col-md-9 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Latitude</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Longitude</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
	   
	   @include('merchant.layouts.footer')
	   
	   
        </div>
         <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   /* { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }*/
                ]

            });

        });
 function cleardata()
 {
  $("input,textarea,select").val('');
  $('#imageerror').text('');

 }
    </script>
	


<script>
 

$(document).ready(function(){
	
	$.datepicker.setDefaults({
          dateFormat: 'yy-mm-dd',
 });
   $('#expiration').datepicker({
   changeMonth: true,
   changeYear: true,
   yearRange: '2000:2040' ,
     
   });
	
	$("#voucher_type").val('Fixed Amount');
	
	
	 $('.summernote').summernote();
  $("#upload_form").submit(function(e){

     e.preventDefault();
       var form=$("#upload_form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("store_voucher")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("store_voucher_succeess")}}';
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
            },
             });

        
 });
});
</script>
<script>

</script>



<script>
 function cleardata()
 {
  $("input,textarea,select").val('');
  $('#imageerror').text('');

 }
 </script>

<script>



setTimeout(function() {
 $('#flashmsg').fadeOut();
 $('#flashmsg').val('')
}, 1000 );

function delete_voucher($id){
       if (confirm("Are you sure want to delete!")) {
 
         
      $.ajax({
         
            url: '{{url("delete_voucher")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("delete_voucher_succeess")}}'
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
                   }
              
        });
	   }

    }
	function get_data_by_id($id)
 {
	 //alert('hi')
     $.ajax({
                   url: '{{url("get_voucher_data_by_id")}}',
                   data:{'id':$id},
                   async:false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: false,

            success:function(response){
               $("#id").val(response.id)
             
               $("#voucher_name").val(response.voucher_name)
               $("#voucher_type").val(response.voucher_type)
               $("#amount").val(response.amount)
               $("#expiration").val(response.expiration)
               $("#merchant_id").val(response.merchant_id)
               $("#status").val(response.status)
              
    
            },
         });
 }
</script>
</body>
</html>

