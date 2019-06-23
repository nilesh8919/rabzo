<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Shipping</title>
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
                            <h5>Delivery Charges</h5>
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
 <?php if(Session::has('flash_message')): ?>
                                   <div id="flashmsg" class="alert alert-success" role="alert" style="">
                                   <?php echo e(Session::get('flash_message')); ?>
                                  </div> 
                              <?php endif; ?>
                            <form class="form-horizontal" action="{{ url('create_shipping') }}" method="post">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Free delivery above Sub Total Order</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="free_delivery_above_price" placeholder="" class="form-control" required  value="{{$results['option_value']}}" />
                                        </div>
                                        <div class="col-lg-1">
                                            <i class="fa fa-inr"></i> 
                                        </div>
                                    </div>
									<!--<div class="form-group">
                                        <label class="col-lg-3 control-label">Enabled Table Rates?</label>
                                        <div class="col-lg-1">
                                            <input type="checkbox" placeholder="" class="form-control">
                                        </div>
                                        
                                    </div>-->
                                </div>
                               <div id="charge_line">
                                <div class="col-lg-12 col-md-12" >
								<h4>Table Rates</h4>
								<table class="table" id="tr1">
								   <tr>
								     <th colspan="2">Distance</th>
								     <th>Unit</th>
								     <th>Price</th>
								     <th>Action</th>
								   </tr>
								   <?php if(count($results['shippings_rate']) == 0){ ?>
								    <tr>
								     <td>  <input type="text" placeholder="From" class="form-control" name="distance_from[]"></td>
								     <td><input type="text" placeholder="To" class="form-control" name="distance_to[]"></td>
								     <td><select class="form-control" name="shipping_units[]">
									  <option value="km">Kilometeres</option>
									   <!--  <option value="Miles">Miles</option>-->
									    
									 </select>
									 
									</td>
								     <td><input type="text" placeholder="Price" class="form-control" name="distance_price[]"></td>
								     <td></td>
								    
								   </tr>
								   <?php }else{    ?>
									      <?php $i=1; ?>
                            @foreach($results['shippings_rate'] as $row)
									     <tr>
								     <td>  <input type="text" placeholder="From1" class="form-control" name="distance_from[]" value="{{$row->distance_from}}" ></td>
								     <td><input type="text" placeholder="To" class="form-control" name="distance_to[]" value="{{ $row->distance_to}}" ></td>
								     <td><select class="form-control" name="shipping_units[]"  >
									  <option value="km">Kilometeres</option>
									   <!--  <option value="Miles">Miles</option>-->
									    
									 </select>
									 
									</td>
								     <td><input type="text" placeholder="Price" class="form-control" name="distance_price[]" value="{{ $row->distance_price}}" ></td>
								     <td></td>
								    
								   </tr>
								@endforeach	   
								 <?php  } ?>
								</table>
                                    
                                </div>
							</div>	
							<div class="col-lg-12 col-md-12">
							<br />
								  <div class="col-lg-2 col-md-2">
								   <button class="btn btn-sm btn-white" id="btnAdd" style="float: left;" type="button">Add More</button>
								  </div>
							</div>
								
                                <div class="col-lg-11 col-md-11" style="margin-top: 20px;position: relative;right: 12px;">
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-sm btn-success" style="float: right;" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
						
						
					<!--	<div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th> Sr.No</th>
                                  <th>Distance From</th>
                                  <th>Distance To </th>
                                  <th>Units </th>
                                  <th>Distance Price </th>
                                  <th>Action </th>
                               
                             
                    </tr>
                    </thead>
                     <tbody>
                            <?php $i=1; ?>
                            @foreach($results['shippings_rate'] as $row)
                                 <tr>
                                  <td><?php echo $i; ?></td>
                                  <td> {{ $row->distance_from}}</td>
                                  <td> {{ $row->distance_to}}</td>
                                  <td> {{ $row->shipping_units}}</td>
                                  <td> {{ $row->distance_price}}</td>
                                <td>
							
							   </td>
                                 
                             
                                
                             
                             </tr> 
                              <?php  $i++;?>
                             @endforeach
              
                            </tbody>
                   
                    </table>
                        </div>-->
						
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
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
 
function removeTr($val)
	{
		$("#tr_"+$val).remove();
	}
$(document).ready(function(){
	var i=0;
	$("#btnAdd").click(function(){
		i = i+1;
	      var div1 ='<tr id="tr_'+i+'"><td> <input type="text" placeholder="From" class="form-control"   name="distance_from[]"></td><td><input type="text" placeholder="To" class="form-control" name="distance_to[]"></td><td><select class="form-control" name="shipping_units[]"  ><option value="km">Kilometeres</option></select></td><td><input type="text" placeholder="Price" class="form-control" name="distance_price[]"></td><td><a href="javascript:;" onClick="removeTr('+i+')" class="shipping-remove" data-id="1"><i class="fa fa-times"></i></a></td></tr>';
		  
		  $("#tr1").append(div1);
	})
	
	
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
                   url: '{{url("create_sizes")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("manage_sizes")}}' ;
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
                                  window.location ='{{url("manage_sizes")}}'
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

