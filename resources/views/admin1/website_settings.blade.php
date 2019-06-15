<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Review</title>
 @include('admin.layouts.styles')
  

</head>

<body>
    <div id="wrapper">
	@include('admin.layouts.leftpanel')


        <div id="page-wrapper" class="gray-bg">
      
	  @include('admin.layouts.header')
 <div class="wrapper wrapper-content animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Email Setting</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Payment Setting</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Social Site Link</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4">Commision Setting</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12" style="padding: 0px;">
                                        <div class="col-lg-6 col-md-6" style="">
                                            <h3>Email Setting</h3>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Send Email From Email Id</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Site Owner Email</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Email Send By</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control">
                                                            <option>SMTP</option>
                                                            <option>SMTP</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6" style="">
                                            <h3>SMTP Setting</h3>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">SMTP Host</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">SMTP Username</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">SMTP Password</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">SMTP Port</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">SMTP Secure</label>
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
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Update</button>
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
                                            <h3>Payment Setting</h3>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">$</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Currency Symbol</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Price Location</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Currency Code</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Paypal Account Email</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Paypal Mode</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Update</button>
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
                                            <h3>Social Sharing Link</h3>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Facebook URL</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Instagram URL</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Google URL</label>
                                                <div class="col-lg-8">
                                                     <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group" id="data_1">
                                                <label class="col-lg-4 control-label">Linkedin URL</label>
                                                <div class="col-lg-8">
                                                     <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group" id="data_1">
                                                <label class="col-lg-4 control-label">Social Image</label>
                                                <div class="col-lg-8">
                                                     <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Update</button>
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
                                            <h3>Commision Setting</h3>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Admin Commision</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Include Service Tax Change For Commision</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Include VAT For Commision</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Include Promotion Discount For Commission</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Affiliate Default Commission On Orders(%)</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Affiliate Signup Commission Amount (In Amount)</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Update</button>
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
       
	   
	   @include('admin.layouts.footer')
	   
	   
        </div>
       
</body>
</html>

  <div class="modal fade modal-large" id="myModal"  role="dialog" aria-labelledby="" aria-hidden="true" aria-hidden="true"  data-keyboard="false" data-backdrop="static">
						    <div class="modal-dialog modal-lg">
						    <span id="err_msg" style="color:red"></span>
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button"  class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Add Package</h4>
						        </div>
						         <span id="err_msg"></span>
						        <div class="modal-body">
						          <div	class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                      <form id="upload_form" method="post" enctype="multipart/form-data">
						                 
<input type="hidden"  id="id" name="id" value="0" />
                <div class="form-group">
                          <label class="col-sm-6 control-label">
                            Title <span class="symbol required"></span>
                          </label>
                        
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="title" id="title" required>   
                              </div>
                            </div>
                          </div>
                           
                        </div>

                        <div class="form-group">
													<label class="col-sm-6 control-label">
														Description <span class="symbol required" ></span>
													</label>
												
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <textarea  class="summernote" id="description" 
                                name="description"  required="true"></textarea>
                              </div>
                            </div>
                          </div>
                          
						  </div>

                        <div class="form-group">
                          <label class="col-sm-6 control-label">
                            Price <span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="price" id="price" required />   
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-sm-6 control-label">
                            Promo Price <span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="promo_price" id="promo_price">   
                              </div>
                            </div>
                          </div>
                        </div>
                 	   <div class="form-group">
                          <label class="col-sm-6 control-label">
                            Type <span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <select selected type="text" class="form-control" name="expiration_type" id="expiration_type">   
							      <option value="Days">Days</option>
							      <option value="Year">Year</option>
							   </select>
                              </div>
                            </div>
                          </div>
                        </div>
                       <div class="form-group">
                          <label class="col-sm-6 control-label">
                            Expiration (no. of days or Year)<span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="expiration" id="expiration">   
                              </div>
                            </div>
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="col-sm-6 control-label">
                           Usage<span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
							    <select  class="form-control" name="unlimited_post" id="unlimited_post">   
							      <option value="Unlimited">Unlimited</option>
							      <option value="Limited">Limited</option>
							   </select>
                              
                              </div>
                            </div>
                          </div>
                        </div>        
  <div class="form-group">
                          <label class="col-sm-6 control-label">
                           Number of Food Item Can Add
<span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="post_limit" id="post_limit">   
                              </div>
                            </div>
                          </div>
                        </div>   
                       <div class="form-group">
                          <label class="col-sm-6 control-label">
                           Limit merchant by sell
                         <span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="sell_limit" id="sell_limit">   
                              </div>
                            </div>
                          </div>
                        </div>   	
                       <div class="form-group">
                          <label class="col-sm-6 control-label">
                            Status <span class="symbol required"></span>
                          </label>
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <select class="form-control" name="status" id="status">   
							      <option selected value="Publish">Publish</option>
							      <option value="Pending">Pending</option>
							   </select>
                              </div>
                            </div>
                          </div>
                        </div>						
									           <div class="col-sm-3 col-sm-offset-5">
									                  <center>
														  <button type="submit" class="btn btn-blue next-step btn-block addbtn">
                              Save <i class="fa fa-arrow-circle-right"></i>
                            </button>
														</center>
														<div>&nbsp;&nbsp;&nbsp;</div>   	
													</div> 
										
                                        
                      </form>           
                                   
						          </div>
						        </div>
						        <div class="clearfix"></div>
						        <div class="modal-footer">
						          
						        </div>
						      </div>
						      
						    </div>
						  </div>
  <script>
  
 
  $('.summernote').summernote({
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
});
        $(document).ready(function(){
			$('select[name="unlimited_post"]').val('Unlimited');
			
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
  
$(document).ready(function(){
	 $('.summernote').summernote();
  $("#upload_form").submit(function(e){

     e.preventDefault();
   
  
        var form=$("#upload_form")[0];
        var fd =new FormData(form);


          $.ajax({
                   url: '{{url("store_packages")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
                                   window.location ='{{url("store_package_succeess?msg=")}}'+response.msg;
                           
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
            },
             });

         
 });
});



 function cleardata()
 {
  $("input,textarea,select").val('');
  $('#imageerror').text('');

 }


 
setTimeout(function() {
 $('#flashmsg').fadeOut();
 $('#flashmsg').val('')
}, 1000 );

function delete_package($id){
       if (confirm("Are you sure want to delete!")) {
 
         
      $.ajax({
         
            url: '{{url("delete_package")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("delete_package_succeess")}}'
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
                   }
              
        });
	   }

    }
	function get_package($id)
 {
	 //alert('hi')
     $.ajax({
                   url: '{{url("get_package_data_by_id")}}',
                   data:{'id':$id},
                   async:false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: false,

            success:function(response){
               $("#id").val(response.id)
              // $("#description").val(response.description)
           // $("#description").code(response.description);
			$('#description').summernote('code', response.description);
               $("#expiration").val(response.expiration)
               $("#expiration_type").val(response.expiration_type)
               $("#post_limit").val(response.post_limit)
               $("#price").val(response.price)
               $("#promo_price").val(response.promo_price)
               $("#sell_limit").val(response.sell_limit)
               $("#status").val(response.status)
               $("#title").val(response.title)
               $("#unlimited_post").val(response.unlimited_post)
    
            },
         });
 }
</script>