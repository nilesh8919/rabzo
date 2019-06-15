<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Dashboard</title>
 @include('admin.layouts.styles')
  
 <style type="text/css">
        input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
input[type=radio]
{
  margin-right: 12px;
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
                    <div class="ibox float-e-margins">
                        <!-- <div class="ibox-title">
                            <h5>Horizontal form</h5>
                        </div> -->
                        <div class="ibox-content" style="">
  <?php if(Session::has('flash_message')): ?>
                                   <div id="flashmsg" class="alert alert-success" role="alert" style="">
                                   <?php echo e(Session::get('flash_message')); ?>
                                  </div> 
                                  <?php endif; ?>
                            <form class="form-horizontal" id="frm_cms" enctype="multipart/form-data">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                                  <div class="form-group">
                                        <label class="control-label">Website Title</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" class="form-control" id="website_title" name="website_title"  value="<?php echo $results['website_title'][0]; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Website Logo</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="file" class="form-control" id="website_logo" name="website_logo"  />
 <div id="imagePreview"><span id='span_1' class="pip">
            <img class="imageThumb" src="public/uploadimages/<?php echo $results['website_logo'][0]; ?>" </span></div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">First Step Image</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="file" class="form-control" id="" name="first_step_image"   />
 <div id="imagePreview"><span id='span_1' class="pip">
            <img class="imageThumb" src="public/uploadimages/<?php echo $results['first_step_image'][0]; ?>" </span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">First Step Heading</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="First Step Heading" class="form-control" name="first_step_heading" id="" value="<?php echo $results['first_step_heading'][0]; ?>"  > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">First Step Content</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="First Step Content" class="form-control" name="first_step_content" value="<?php echo $results['first_step_content'][0]; ?>"  > 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Second Step Image</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="file" class="form-control" id="" name="second_step_image"  />
 <div id="imagePreview"><span id='span_1' class="pip">
            <img class="imageThumb" src="public/uploadimages/<?php echo $results['second_step_image'][0]; ?>" </span></div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px;">
                                    <div class="form-group">
                                        <label class="control-label">Second Step Heading</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Second Step Heading" class="form-control" id="" name="second_step_heading" value="<?php echo $results['second_step_heading'][0]; ?>"  > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Second Step Content</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Second Step Content" class="form-control"  name="second_step_content" value="<?php echo $results['second_step_content'][0]; ?>" > 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Third Step Image</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="file" class="form-control" id=""  name="third_step_image" value="<?php echo $results['third_step_image'][0]; ?>" />
 <div id="imagePreview"><span id='span_1' class="pip">
            <img class="imageThumb" src="public/uploadimages/<?php echo $results['third_step_image'][0]; ?>" </span></div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Third Step Heading</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Third Step Heading" class="form-control" id="" name="third_step_heading"  value="<?php echo $results['third_step_heading'][0]; ?>" > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Third Step Content</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Third Step Content" class="form-control" name="third_step_content"  value="<?php echo $results['third_step_content'][0]; ?>" > 
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="control-label">Website Address</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Third Step Content" name="website_address" id="website_address" class="form-control" value="<?php echo $results['website_address'][0]; ?>" > 
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="control-label">Website Phone</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Third Step Content" name="website_contact_phone" id="website_contact_phone" class="form-control" value="<?php echo $results['website_contact_phone'][0]; ?>" > 
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="control-label">Website email</label>
                                        <div class="" style="margin-top: 10px;">
                                            <input type="text" placeholder="Third Step Content" name="website_contact_email" id="website_contact_email" class="form-control" value="<?php echo $results['website_contact_email'][0]; ?>"  > 
                                        </div>
                                    </div>

                                </div>
                                

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-success" type="submit" name="submitImage" id="btn_submit" style="float: right;position:relative;right: 15px;"  value="Submit">
                                        <input class="btn btn-success" type="button" id="restaurant_update_button_action" style="float: right;display: none;" value="Update">
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
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
	 $('.summernote').summernote();
  $("#frm_cms").submit(function(e){

     e.preventDefault();
   
       
        var form=$("#frm_cms")[0];
        var fd =new FormData(form);


          $.ajax({
					   url: '{{url("store_cms")}}',
					   data:fd,
					   async:false,
						type: 'POST',
						processData: false,
						contentType: false,

				success:function(response){
				   if(response.flag== true)
							   {
	 
								 window.location ='{{url("store_cms_success")}}';
							   }else 
							   {
								
								 alert("Unable to Store");
							   }
				},
             });

       
 });
});
</script>
<script>
 $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function active_banner($id, $abc){
       
         var test= "#"+$id;     
      $.ajax({

            url: '{{url("active_banner")}}',
            type:'post',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag=='true')
                           {
                              
                             $("#"+$id).css('color', '#827ca1'); //black
                             $("#successMessage").html("Banner Deactivated SuccessFully").fadeIn().delay(1000).fadeOut();
                           }else if(response.flag=='false')
                           {
                            $("#"+$id).css('color', '#0194e0');  //blue
                             $("#successMessage").html("Banner Activated SuccessFully").fadeIn().delay(1000).fadeOut();
                             
                             
                           }
                      }
              
        });

    }

</script>



<script>
 function cleardata()
 {
  $("input,textarea,select").val('');
  $('#imageerror').text('');

 }
 </script>

<script>


 $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function delete_banner($id, $abc){
       if (confirm("Are you sure want to delete!")) {
 
         var test= "#"+$id;  
      $.ajax({
            url: '{{url("delete_banner")}}',
            type:'get',
            dataType:'json',
            data:{banner_id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                               window.location ='{{url("delete_banner_succeess")}}';
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
                   }
              
        });
}

    }
setTimeout(function() {
 $('#flashmsg').fadeOut();
 $('#flashmsg').val('')
}, 1000 );

function delete_faq($id){
       if (confirm("Are you sure want to delete!")) {
 
         
      $.ajax({
         
            url: '{{url("delete_faq")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("delete_faq_succeess")}}'
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
                   }
              
        });
	   }

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
						          <h4 class="modal-title">Add Faq</h4>
						        </div>
						         <span id="err_msg"></span>
						        <div class="modal-body">
						          <div	class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                      <form id="upload_form" method="post" enctype="multipart/form-data">
						                 

                      <div>&nbsp;&nbsp;&nbsp;</div>


                    <div class="form-group">
                          <label class="col-sm-3 control-label">
                            Heading <span class="symbol required"></span>
                          </label>
                        
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="heading" id="heading">   
                              </div>
                            </div>
                          </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                        </div>

                      


                 	  <div class="form-group">
													<label class="col-sm-3 control-label">
														Paragraph <span class="symbol required"></span>
													</label>
												
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <textarea  class="summernote" id="paragraph1" 
                                name="paragraph1" ></textarea>
                              </div>
                            </div>
                          </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
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
