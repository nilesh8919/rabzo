<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | payumoney</title>
 @include('admin.layouts.styles')
  

</head>

<body>
    <div id="wrapper">
	@include('admin.layouts.leftpanel')


        <div id="page-wrapper" class="gray-bg">
      
	  @include('admin.layouts.header')
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
			
                     <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
                                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                   <?php if(Session::has('flash_message')): ?>
                                   <div id="flashmsg" class="alert alert-success" role="alert" style="">
                                
                                  <?php echo e(Session::get('flash_message')); ?>
                                  </div> 

                                <?php endif; ?>
                                 
                                </div>
                            <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
                     </div>  
                <div class="col-lg-12">
                <h3>PayUMoney</h3>
                    <div class="row">
  <?php if(Session::has('flash_message')): ?>
                                   <div id="flashmsg" class="alert alert-success" role="alert" style="">
                                
                                  <?php echo e(Session::get('flash_message')); ?>
                                  </div> 

                                <?php endif; ?>
											<form method="post" action="{{ url('store_payumoney') }}" id="forms">
							<input type="hidden" value="adminPayUMoney" name="action" id="action">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							  <label class="uk-form-label">Enabled PayUMoney?</label>
							  <div class="icheckbox_minimal" style="position: relative;"><input value="{{$results['admin_payu_enabled']}}" class="icheck" checked="checked" type="checkbox" name="admin_payu_enabled" id="admin_payu_enabled" >
                </div> 
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							  <label class="uk-form-label">Mode</label>
							  <div class="iradio_flat checked" style="position: relative;">
                  <input <?php if($results['admin_payu_mode'] == 'Sandbox'){ echo "checked=checked"; } ?> value="Sandbox" class="icheck" checked="checked" type="radio" name="admin_payu_mode" id="admin_payu_mode" ></div>  Sandbox  <div class="iradio_flat" style="position: relative;">

                    <input  <?php if($results['admin_payu_mode'] == 'live'){ echo "checked=checked"; } ?> value="live"  type="radio" name="admin_payu_mode" id="admin_payu_mode" >Live</div>	
							
							</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							  <label class="uk-form-label">Merchant Key</label>
							  <input class="uk-form-width-large" type="text" value="{{$results['admin_payu_key']}}" name="admin_payu_key" id="admin_payu_key" required />
                  
              </div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							  <label class="uk-form-label">SALT</label>
							  <input class="uk-form-width-large" type="text" value="{{$results['admin_payu_salt']}}" name="admin_payu_salt" id="admin_payu_salt" required />
              </div>



							<div class="uk-form-row">
							<label class="uk-form-label"></label>
							<input type="submit" value="Save" class="btn btn-success">
							</div>

							</form>

                    
                </div>
            </div>
            </div>
        </div>
       
	   
	   @include('admin.layouts.footer')
	   
	   
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
                   url: '{{url("store_advertisement")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("store_advertisement_succeess")}}';
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
	 $("#btntext").text('Save');
  $("input,textarea,select").val('');
  $('#imageerror').text('');

 }
 </script>

<script>



setTimeout(function() {
 $('#flashmsg').fadeOut();
 $('#flashmsg').val('')
}, 1000 );

function delete_data($id){
       if (confirm("Are you sure want to delete!")) {
 
         
      $.ajax({
         
            url: '{{url("delete_advertisement")}}',
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
	function add_new()
	{
		 
	}
	function get_data_by_id($id)
 {
	 $("#btntext").text('Update');
	 //alert('hi')
     $.ajax({
                   url: '{{url("get_advertisement_data_by_id")}}',
                   data:{'id':$id},
                   async:false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: false,

            success:function(response){
               $("#id").val(response.id)
             
               $("#title").val(response.title)
               $("#description").val(response.description)
               $("#link").val(response.link)
               $("#images_div").html("<img src='public/uploadimages/"+response.images+"' style='width:80px' />")
              
               $("#status").val(response.status)
              
    
            },
         });
 }
</script>
</body>
</html>

  <div class="modal fade" id="myModal"  role="dialog" aria-labelledby="" aria-hidden="true" aria-hidden="true"  data-keyboard="false" data-backdrop="static">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button"  class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Add Voucher</h4>
						        </div>
						         <span id="err_msg"></span>
						        <div class="modal-body">
						          <div	class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                      <form id="upload_form" method="post" enctype="multipart/form-data">
						              <input type="hidden" name="id" id="id" value="0" />   

                      <div>&nbsp;&nbsp;&nbsp;</div>


                    <div class="form-group">
                         <div class="row">
						  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Title:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                              <input  type="text" class="form-control" name="title" id="title" required>   
                              </div>
                            </div>
                          </div>
                    </div>
                        
						
                      <div class="form-group">
                         <div class="row">
						   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Description:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                                <input   type="text" class="form-control" name="description" id="description" required>   
                              </div>
                            </div>
                          </div>
                       </div>
                    <div class="form-group">
                         <div class="row">
						  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Image:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                            <input   type="file" class="form-control" name="images" id="images"  />   <br />
							<div id="images_div"></div>
                              </div>
                            </div>
                          </div>
                       </div>
                    <div class="form-group">
                         <div class="row">
						   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Description:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                                <input   type="text" class="form-control" name="link" id="link" required>   
                              </div>
                            </div>
                          </div>
                       </div>
                 	
  <div class="form-group">
                         <div class="row">
						  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Status:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                            
							 <select  class="form-control" name="status" >
							
							   <option value="Publish" >Publish</option>
							   <option value="Pending" >Pending</option>
							  
							 </select>
                              </div>
                            </div>
                          </div>
                       </div>  
                                         
									           <div class="col-sm-3 col-sm-offset-5">
									                  <center>
														  <button type="submit" id="btntext" class="btn btn-blue next-step btn-block addbtn">
                              Save 
							  
							  <i class="fa fa-arrow-circle-right"></i>
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
    setTimeout(function() {
 $('#flashmsg').fadeOut();
 $('#flashmsg').val('')
}, 1000 );
</script>