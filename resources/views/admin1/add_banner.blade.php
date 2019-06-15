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
                   class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add Banner</button>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th> Sr.No</th>
                                  <th>Banner Image</th>
                                  <th>Banner Text</th>
                                  <th> Status</th>
                                  <th>Action</th>
                    </tr>
                    </thead>
                     <tbody>
                            <?php $i=1; ?>
                            @foreach($banner as $banners)
                                 <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><img style="height:80px;width:100px;"
                                     src="{{URL::asset('public/uploadimages/'.$banners->bannername)}}"/></td>
                                  <td>
                                    {{ $banners->line1}}
                                    {{ $banners->line2}}
                                    {!! $banners->bannertext !!}</td>
                                 <td>
                 
                                  @if( $banners->status =="Deactive")
                                  
                                    <a onclick="active_banner({{ $banners->id }})" style="cursor: pointer; cursor: hand;" >
                                  <i  id="{{ $banners->id }}" style="color:#827ca1;" class="fa fa-thumbs-up font_six abc" aria-hidden="true" title="Deactive"></i></a>
                                         @else
                                      
                                       <a onclick="active_banner({{ $banners->id }})" style="cursor: pointer; cursor: hand;">
                                      <i  id="{{ $banners->id }}" class="fa fa-thumbs-up font_six" style="color: #0194e0 !important;"
                                      title="active" aria-hidden="true"></i></a>
                                    @endif
                                </td>
                              <td><a onclick="delete_banner({{ $banners->id }})" style="text-decoration:none; cursor: pointer; cursor: hand;">

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
	<link rel="stylesheet" href="{{URL::asset('admintemplate/js/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}">
	<script src="{{URL::asset('admintemplate/js/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
 



<script>
   $(document).ready(function(){

            $('.summernote').summernote();

       });
var width;
 var height;
 var _URL = window.URL || window.webkitURL;
 //alert(_URL);
 $("#bannername").change(function(e) {
	console.log('hi')
        console.log("e",e);
         var file, img;


            if((file = this.files[0])) {
        
                img = new Image();
                img.onload = function() {
             
                    width= this.width;
                    height=this.height;
                };
                img.onerror = function() {
               
                };
                img.src = _URL.createObjectURL(file);


            }

       });

$(document).ready(function(){
  $(".addbtn").click(function(e){
	 
      e.preventDefault();
      console.log(height);
        // alert(height)
 //  if(width>"800" && height>"500"){
        
      var form=$("#upload_form")[0];
      var fd = new FormData(form);
      //var bannertext = CKEDITOR.instances.editor2.getData();
     // fd.append('bannertext', bannertext);
      $.ajax({

         url: '{{url("storebanner")}}',
         data: fd,
         dataType : 'json',
         async: false,
         type: 'post',
         processData: false,
         contentType: false,
         success : function(response)
         {
               if(response.flag==true)
                  {
                     window.location ='{{url("add_banner_succeess")}}';
                  }
                  else
                   {
                     alert("Sorry Unable To Add");
                   } 
         }
      });        
 /*   }else{
      $('#imageerror').text('please select the Banner of size 800*500 px or more than that');
    } */
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
</script>
</body>
</html>

  <div class="modal fade" id="myModal"  role="dialog" aria-labelledby="" aria-hidden="true" aria-hidden="true"  data-keyboard="false" data-backdrop="static">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button"  class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Add Banner</h4>
						        </div>
						        
						        <div class="modal-body">
						          <div	class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                      <form id="upload_form" method="post" enctype="multipart/form-data">
						                 <div class="form-group">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												
												
												  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <div class="fileupload fileupload-new" data-provides="fileupload">

                             <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;float:left;"></div>
                          <div class="fileupload-new thumbnail col-lg-6 col-md-6 col-sm-6" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                          </div>
                         <input type="file" class="form-control" name="bannername" id="bannername">    
                        </div>
                        <center>
                         <span style="color:red;" id="imageerror"></span>
                        </center>
												
											</div>
										</div>

                      <div>&nbsp;&nbsp;&nbsp;</div>


                    <div class="form-group">
                          <label class="col-sm-3 control-label">
                            Add line 1 <span class="symbol required"></span>
                          </label>
                        
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                               <input type="text" class="form-control" name="line1" id="line1">   
                              </div>
                            </div>
                          </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                        </div>

                         <div class="form-group">
                          <label class="col-sm-3 control-label">
                            Add line 2 <span class="symbol required"></span>
                          </label>
                        
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="line2" id="line2">  
                              </div>
                            </div>
                          </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                        </div>


                 	  <div class="form-group">
													<label class="col-sm-3 control-label">
														Add Text <span class="symbol required"></span>
													</label>
												
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <textarea  class="summernote form-control" id="editor2" 
                                name="bannertext" ></textarea>
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
