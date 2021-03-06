<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Offer</title>
 @include('merchant.layouts.styles')
  
<style>
.hasDatepicker {
    position: relative;
    z-index: 1000;
}
</style>
</head>

<body>
    <div id="wrapper">
	@include('admin.layouts.leftpanel')


        <div id="page-wrapper" class="gray-bg">
      
	  @include('admin.layouts.header')
      <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            
                <div class="col-lg-12">
				    <h5>{{$title}}</h5>
                    <div class="ibox float-e-margins">
                     
                        
							<?php if(Session::has('flash_message')): ?>
                                   <div id="flashmsg" class="alert alert-success" role="alert" style="">
                                   <?php echo e(Session::get('flash_message')); ?>
                                  </div> 
                              <?php endif; ?>
                            <!-- <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div> -->
                      
                     
                 
                </div>
            </div>
			     <div	class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                      <form class="form-horizontal" id="upload_form">
                                <div class="col-lg-8 col-md-8">
							
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" placeholder="Offer Percentage" class="form-control" name="name" value="{{$user->name}}" > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <input type="text" placeholder="Orders Over" class="form-control" value="{{$user->email}}" name="email" /> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Contact</label>
                                        <div class="col-lg-8">
                                            <input type="text" placeholder="Valid From" class="form-control" name="phone_no" id="phone_no" value="{{$user->phone_no}}"  autocomplete="off"> 
                                        </div>
                                    </div>
									<h4>Change Password</h4>
                                      <div class="form-group">
                                        <label class="col-lg-4 control-label">Password</label>
                                        <div class="col-lg-8">
                                            <input type="text" placeholder="password" class="form-control" name="password" id="password" value=""  autocomplete="off"> 
                                        </div>
                                    </div>
                                  <!--  <div class="form-group">
                                        <label class="col-lg-4 control-label">Applicable to</label>
                                        <div class="col-lg-8">
                                            <div class="col-lg-2">
                                                <input type="checkbox" value="Delivery" name="applicable_to" >
                                            </div>
                                            <label class="col-lg-2 control-label">Delivery</label>
                                            <div class="col-lg-2">
                                                <input type="checkbox"  value="Pickup" name="applicable_to">
                                            </div>
                                            <label class="col-lg-2 control-label">Pickup</label>
                                           
                                        </div>
                                    </div>-->
                                   
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-sm btn-success" style="float: right;" type="submit">Update</button>
                                        </div>
                                    </div>

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
         // dateFormat: 'yy-mm-dd',
 });
   $('#expiration').datepicker({
   changeMonth: true,
   changeYear: true,
   yearRange: '2000:2040' ,
     
   });
	

  $("#upload_form").submit(function(e){

     e.preventDefault();
       var form=$("#upload_form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("update_profile")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("profiles")}}' ;
                           }else 
                           {
                            
                             alert("Unable to add");
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

function delete_data($id){
       if (confirm("Are you sure want to delete!")) {
 
         
      $.ajax({
         
            url: '{{url("delete_sizes")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("manage_offers")}}'
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
 $(document).ready(function(){
	
	$.datepicker.setDefaults({
          //dateFormat: 'yy-mm-dd',
 });
   $('#valid_from').datepicker({
   changeMonth: true,
   changeYear: true,
   yearRange: '2000:2040' ,
     
   });
     $('#valid_to').datepicker({
   changeMonth: true,
   changeYear: true,
   yearRange: '2000:2040' ,
     
   });
 });
</script>
</body>
</html>

<div class="modal fade" id="myModal"  role="dialog" aria-labelledby="" aria-hidden="true" aria-hidden="true"  data-keyboard="false" data-backdrop="static">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button"  class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Add Offer</h4>
						        </div>
						         <span id="err_msg"></span>
						        <div class="modal-body">
						        
						        </div>
						        <div class="clearfix"></div>
						        <div class="modal-footer">
						          
						        </div>
						      </div>
						      
						    </div>
						  </div>
