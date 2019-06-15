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
                  <div class="ibox float-e-margins">
                    <div class="ibox-content tabs-container" style="">
                       <ul class="nav nav-tabs">
                        <li id="li1" class="active"><a data-toggle="tab" href="#tab-1">Footer Heading</a></li>
                        <li id="li2" class=""><a data-toggle="tab" href="#tab-2">Footer Links</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                          <form class="form-horizontal" id="website_footer_api_crud_form" enctype="multipart/form-data">
                            <!--first footer-->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                              <div class="form-group">
                                <label class="control-label">Heading First</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : Company Links"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Heading Second</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : Company Links"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Heading Third</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : Company Links"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Heading Fourth</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : Company Links"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Address Icon</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : map"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Addres</label>
                                <div class="" style="margin-top: 10px;">
                                  <textarea cols="5" rows="5" class="form-control" placeholder="Enter Your Address"></textarea>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                              
                              <div class="form-group">
                                <label class="control-label">Phone Icon</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : map"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Phone</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : 9874563215">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Email Icon</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : map"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : info@gmail.com">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Payment Mode Image</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="file" class="form-control" id="payment_images" name="payment_images[]" onchange="preview_images();" multiple/>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Android App Image</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="file" class="form-control" id="androidapp" name="androidapp[]" onchange="preview_images();" multiple/>
                                </div>
                              </div>
                            </div>
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                  <input type="hidden" id="footer_hidden_id" name="footer_hidden_id">
                                  <input class="btn btn-success" type="submit" id="footer_update_button_action" style="float: right;display: none;" value="Update">
                                  <input class="btn btn-success" type="submit" name="submitImage" id="nextbutton" style="float: right;position:relative;right: 15px;" value="Next">
                                  </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div id="tab-2" class="tab-pane">
                          <form class="form-horizontal" id="frm2" enctype="multipart/form-data">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                              <h3>Company Links</h3>
                              <div class="form-group">
                                <label class="control-label">Page Name</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_name" placeholder="Example : About Us"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Page Url</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_url" placeholder="Example : aboutus.php">
                                </div>
                              </div>
                            </div>
                            <!--Second footer-->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                              <h3>Contact Links</h3>
                  
                              <div class="form-group">
                                <label class="control-label">Page Name</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="contact_text" placeholder="Help & Suport"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Page Url</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_url" placeholder="Example : helpsuport.php">
                                </div>
                              </div>
                            </div>
                            <!--third footer-->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                              <h3>Legal Links</h3>
                  
                              <div class="form-group">
                                <label class="control-label">Page Name</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="contact_text" placeholder="Terms & Condition"> 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Page Url</label>
                                <div class="" style="margin-top: 10px;">
                                  <input type="text" class="form-control" id="company_link_url" placeholder="Example : terms_conditions.php">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="clearfix"></div>
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