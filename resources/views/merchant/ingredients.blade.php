<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | ingredients</title>
 @include('merchant.layouts.styles')
  

</head>

<body>
    <div id="wrapper">
	@include('merchant.layouts.leftpanel')


        <div id="page-wrapper" class="gray-bg">
      
	  @include('merchant.layouts.header')
      <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            
                <div class="col-lg-12">
				
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Ingredients</h5>
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
                        <div class="ibox-content">
                            <form class="form-horizontal" id="upload_form">
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Ingredient Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="ingredients_name" placeholder="ingredients Name" class="form-control" required > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Status</label>
                                        <div class="col-lg-8">
                                            <select class="form-control" name="status">
                                                <option>Publish</option>
                                                <option>Pending for Review</option>
                                              
                                            </select> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-sm btn-white" style="float: right;" type="submit">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
			    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th> Sr.No</th>
                                  <th>Name</th>
                                  <th>Date </th>
                                  <th>Action </th>
                               
                             
                    </tr>
                    </thead>
                     <tbody>
                            <?php $i=1; ?>
                            @foreach($results as $row)
                                 <tr>
                                  <td><?php echo $i; ?></td>
                                  <td> {{ $row->ingredients_name}}</td>
                                  <td> {{ $row->date_created}}</td>
                                <td>
							
							  <a onclick="delete_data({{ $row->ingredients_id }})" style="text-decoration:none; cursor: pointer; cursor: hand;">
							  <i class="clip-remove"></i>Delete</a> 
							   </td>
                                 
                             
                                
                             
                             </tr> 
                              <?php  $i++;?>
                             @endforeach
              
                            </tbody>
                   
                    </table>
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
	

  $("#upload_form").submit(function(e){

     e.preventDefault();
       var form=$("#upload_form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("create_ingredients")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("manage_ingredients")}}' ;
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
         
            url: '{{url("delete_ingredients")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("delete_ingredients")}}'
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

