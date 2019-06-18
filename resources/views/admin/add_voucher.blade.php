<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | voucher</title>
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
                <div class="col-lg-8">
                 <h5>{{$title}}</h5>
                 
					   
					    <form id="upload_form" method="post" enctype="multipart/form-data">
						              <input type="hidden" name="id" id="id" value="0" />   

                      <div>&nbsp;&nbsp;&nbsp;</div>

                           <div class="form-group">
                                        <label class="col-lg-4 control-label">Merchant</label>
                                        <div class="col-lg-8">
                                            <select class="form-control" name="merchant_id" required="true" >
                                                <option value="" >-Select-</option>
												<?php foreach($merchant as $row) { ?>
                                                <option value="<?php echo $row->id; ?>" ><?php echo $row->restaurant_name; ?></option>
                                             
												<?php }  ?>
                                            </select> 
                                        </div>
                                    </div><br />
                    <div class="form-group">
                      
						    <label class="col-lg-4 control-label">Voucher Name</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                              <input  type="text" class="form-control" name="voucher_name" id="voucher_name" required>   
                              </div>
                            </div>
                        
                    </div>
                        
						<div class="form-group">
                         
						    <label class="col-lg-4 control-label">Type</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              
                              <select class="form-control" name="voucher_type" id="voucher_type" required="true">
							   <option  value="" >-Select-</option>
							   <option selected='selected' value="Fixed Amount" >Fixed Amount</option>
							   <option value="Percentage" >Percentage</option>
							 </select>
							 </div>
                        
                      </div>
                      <div class="form-group">
                      
						 <label class="col-lg-4 control-label">Discount</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                                <input   type="text" class="form-control" name="amount" id="amount" required>   
                              </div>
                            </div>
                          
                       </div>
                    <div class="form-group">
                        
						   <label class="col-lg-4 control-label">Expiration</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                            <input   type="text" class="form-control" name="expiration" id="expiration" required autocomplete="off" />   
                              </div>
                            </div>
                         
                       </div>
                   
                 	
  <div class="form-group">
                        
					   <label class="col-lg-4 control-label">Status</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                            
							 <select  class="form-control" name="status" >
							
							   <option value="Publish" >Publish</option>
							   <option value="Pending" >Pending</option>
							  
							 </select>
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
                   url: '{{url("store_voucher_master")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("manage_voucher_master")}}';
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
         
            url: '{{url("delete_voucher_master")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("manage_voucher_master")}}'
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

                     
						        </div>
						        <div class="clearfix"></div>
						        <div class="modal-footer">
						          
						        </div>
						      </div>
						      
						    </div>
						  </div>
