<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Dashboard</title>
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
                
                    <div class="ibox-content">
 <button style="" type="button" onclick="cleardata()"
                   class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add Faq</button>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th> Sr.No</th>
                                  <th>Heading</th>
                                  <th>Paragraph</th>
                                  
                                  <th>Action</th>
                    </tr>
                    </thead>
                     <tbody>
                            <?php $i=1; ?>
                            @foreach($results as $row)
                                 <tr>
                                  <td><?php echo $i; ?></td>
                                  <td> {{ $row->heading}}</td>
                                  <td>  {!! $row->paragraph1!!}</td>
                                   
                             
                                
                              <td><a onclick="delete_faq({{ $row->id }})" style="text-decoration:none; cursor: pointer; cursor: hand;">

                               <i class="clip-remove"></i>Delete</a> </td>
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
  $(".addbtn").click(function(e){

     e.preventDefault();
   
 
        if($("#heading").val() != "")
       {
       
        var form=$("#upload_form")[0];
        var fd =new FormData(form);


          $.ajax({
                   url: '{{url("storefaqs")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("store_faq_succeess")}}';
                           }else 
                           {
                            
                             alert("Unable to Delete");
                           }
            },
             });

         }else
         {
             $('#submenu_error').text('please Enter the Submenu');
          } 
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
