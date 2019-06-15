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
	  
	  
  <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Email Templates</h5>
                        <div class="ibox-tools">
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
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Template Name</th>
                        <th>Subject </th>
                        <th>Action(s)</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach($results as $row){ ?>
                    <tr class="gradeX">
                        <td>{{$row->template_name}}</td>
                        <td>{{$row->email_subject}}</td>
                        <td>
                            <a href="">Edit</a> | <a href="">View</a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                    </table>
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
  $("#frm1").submit(function(e){

     e.preventDefault();
   
  
        var form=$("#frm1")[0];
        var fd =new FormData(form);


          $.ajax({
                   url: '{{url("save_new_admin")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
                                   window.location ='{{url("manage_admin?msg=")}}'+response.msg;
                           
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