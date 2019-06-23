<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Items</title>
	
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
                <h3>Food Item</h3>
                 

                        
						<?php error_reporting(0); ?>
						
						
					<div class="col-lg-12 col-md-12" style="padding: 0px;">
									<form id="submit_form" >
									
                                        <div class="col-lg-6 col-md-6" style="">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Itam Neme</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="item_name"  value="" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Description</label>
                                                    <div class="col-lg-8">
                                                        <textarea  class="summernote" id="description" 
                                name="item_description" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Two Flavors</label>
                                                    <div class="col-lg-8">
                                                        <input type="checkbox"  name="two_flavors" value="1">
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <label class="col-lg-4 control-label">Is Veg Nonveg</label>
                                                    <div class="col-lg-8">
                                                      
									<input type="radio"  value="veg" name="is_veg_nonveg" checked  />Veg</br />
									<input type="radio"  value="nonveg" name="is_veg_nonveg"   />Non veg </br />
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6" style="">
                                            <div class="form-horizontal">
											 
												<div class="form-group">
                                                    <label class="col-lg-4 control-label">Status</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="status" id="status" required="true">
                                                            <option  value="Pending for approval">Pending for approval</option>
                                                            <option  value="publish">publish</option>
                                                           
                                                            <option  value="Blocked">Blocked</option>
                                                            <option  value="Expired" >Expired</option>
                                                        </select> 
                                                    </div>
                                                </div>
												
												
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Featured Images</label>
                                                    <div class="col-lg-8">
                                                        <input type="file" class="form-control" name="photo" value="" id="file1" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Gallery Image</label>
                                                    <div class="col-lg-8">
                                                        <input type="file" class="form-control" name="gallery_images[]" multiple id="file" value="">
														<div id="imagePreview"></div>
                                                    </div>
                                                </div>
												
                                              
                                                   <div class="form-group">
                                                    <label class="col-lg-4 control-label">Categories</label>
                                                    <div class="col-lg-8">
                                                        <select data-placeholder="Choose a Category..." class="chosen-select" multiple style="width:350px;" tabindex="4" name="categories" id="categories"  >
                                                            <option value="">Select</option>
															@foreach($categories_data as $cd)
                                                               <option   value="{{$cd->id}}">{{$cd->category_name}}</option>
															 @endforeach
                                                          
                                                        </select>
                                                    </div>
                                                </div>
												<?php for($i=0;$i< count($size);$i++){ ?>
                                                <div class="form-group">
												
												    <label class="col-lg-4 control-label">
													Price in size
													</label>
												  <div class="col-lg-3">
													 <select  tabindex="4" name="size[]" id="size"  class="form-control">
                                                            <option value="">Select</option>
															@foreach($size as $s)
                                                               <option   value="{{$s->id}}">{{$s->size_name}}</option>
															 @endforeach
                                                          
                                                        </select>
													</div>
												  <div class="col-lg-3">
													      <input type="text"  name="price[]" value="" class="form-control">
													</div>
                                                   <!--   <div class="col-lg-2">
													      <input type="button"  name="plus" value="+" class="form-control">
													</div>-->
                                                </div>
												<?php } ?>
                                                   <div class="form-group">
                                                    <label class="col-lg-4 control-label">Discount (Numeric)</label>
                                                    <div class="col-lg-8">
                                                        <input type="text"  name="discount" value="0">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Cooking Ref</label>
                                                    <div class="col-lg-8">
                                                       <select class="form-control" tabindex="4" name="cooking_ref" id="cooking_ref">
                                                            <option value="">Select</option>
															@foreach($cooking_ref_data as $cr)
                                                               <option value="{{$cr->id}}">{{$cr->cooking_name}}</option>
															 @endforeach
                                                          
                                                        </select>
                                                    </div>
                                                </div>
												<!-- <div class="form-group">
                                                    <label class="col-lg-4 control-label">Ingredients</label>
                                                    <div class="col-lg-8">
                                                        <input type="checkbox"  name="two_flavours" value="">
                                                    </div>
                                                </div>-->
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
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
			
			
					  var inputLocalFont = document.getElementById("file");
inputLocalFont.addEventListener("change",previewImages,false);

function previewImages(){
    var fileList = this.files;
    
    var anyWindow = window.URL || window.webkitURL;

        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
		  console.log(fileList[i].name)
		  var html1 = "<span id='span_"+i+"' class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + objectUrl + "\" title=\"" + fileList[i].name + "\"/>" +
            "<br/><span onClick='removePreviewImage("+i+")'   class=\"remove\">Remove image</span>" +
            "</span>";
          $('#imagePreview').append(html1);
          window.URL.revokeObjectURL(fileList[i]);
        }
    
    
}
			
			
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
 function removePreviewImage($ind){
			
			$("#span_"+$ind).remove();
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
  $("#submit_form").submit(function(e){

     e.preventDefault();
       var form=$("#submit_form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("store_item")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("store_item_success")}}';
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
 	 $('.chosen-select').chosen({width: "100%"});
</script>
</body>
</html>

 