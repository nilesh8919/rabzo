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
                <h3>voucher</h3>
                    <div class="ibox-content">
 <button style="" type="button" onclick="cleardata()"
                   class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add New</button>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th> Sr.No</th>
                                  <th>Voucher Name</th>
                                  <th>Type </th>
                                  <th>Discount</th>
                                  <th>Expiration</th>
                                  <th>Used</th>
                                  
                                  <th>Date Created</th>
                                  <th>Action</th>
                    </tr>
                    </thead>
                     <tbody>
                            <?php $i=1; ?>
                            @foreach($results as $row)
                                 <tr>
                                  <td><?php echo $i; ?></td>
                                  <td> {{ $row->voucher_name}}</td>
                                  <td> {{ $row->voucher_type}}</td>
                                  <td> {{ $row->amount}}</td>
                                  <td> {{ $row->expiration}}</td>
                                
                                  <td> {{ $row->used_once}}</td>
								    <td> {{ $row->date_created}}</td>
                                 
                             
                                
                              <td>
							<a onclick="get_data_by_id({{ $row->id }})" data-toggle="modal" data-target="#myModal" style="text-decoration:none; cursor: pointer; cursor: hand;">
							  <i class="clip-remove"></i>Edit</a> |
							  <a onclick="delete_voucher({{ $row->id }})" style="text-decoration:none; cursor: pointer; cursor: hand;">
							  <i class="clip-remove"></i>Delete</a> 
							   </td>
                             </tr> 
                              <?php  $i++;?>
                             @endforeach
              
                            </tbody>
                   
                    </table>
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
                              Voucher Name:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                              <input  type="text" class="form-control" name="voucher_name" id="voucher_name" required>   
                              </div>
                            </div>
                          </div>
                    </div>
                        
						<div class="form-group">
                         <div class="row">
						  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Type:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                              <select class="form-control" name="voucher_type" id="voucher_type" required="true">
							   <option  value="" >-Select-</option>
							   <option selected='selected' value="Fixed Amount" >Fixed Amount</option>
							   <option value="Percentage" >Percentage</option>
							 </select>
							  </div>
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                         <div class="row">
						   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Discount:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                                <input   type="text" class="form-control" name="amount" id="amount" required>   
                              </div>
                            </div>
                          </div>
                       </div>
                    <div class="form-group">
                         <div class="row">
						  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              Expiration:
							 </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <div class="form-group">
                            <input   type="text" class="form-control" name="expiration" id="expiration" required />   
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
