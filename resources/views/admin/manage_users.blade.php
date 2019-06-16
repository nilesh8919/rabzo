<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | User</title>
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
                
                    <div class="ibox-content">Manage Users
<!-- <button style="" type="button" onclick="cleardata()"
                   class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add New</button>-->
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th> Sr.No</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Contact</th>
                                  <th>Created Date</th>
                                  <th>Status</th>
                                 
                    </tr>
                    </thead>
                     <tbody>
                            <?php $i=1; ?>
                            @foreach($results as $row)
                                 <tr>
                                  <td><?php echo $i; ?></td>
                                  <td> {{ $row->first_name}} {{ $row->last_name}}</td>
                                  <td> {{ $row->email_address}}</td>
                                  <td> {{ $row->contact_phone}}</td>
                                 
                                  <td> {{ $row->date_created}}</td>
                                  <td> {{ $row->status}}</td>
                                 
                          
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
       
</body>
</html>


  <script>
  
 

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
  $("#upload_form").submit(function(e){

     e.preventDefault();
   
  
        var form=$("#upload_form")[0];
        var fd =new FormData(form);


          $.ajax({
                   url: '{{url("store_packages")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
                                   window.location ='{{url("store_package_succeess?msg=")}}'+response.msg;
                           
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