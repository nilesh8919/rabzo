	@include('header')
	<style>
		.clear{clear: both;}
  
  	.wrap {width: 100%; /*border: 1px solid #ccc;*/ height: 579px;overflow: auto;position: relative;margin-top: 77px;}
    .top-header {position: fixed;top: 0;left: 0;width: 100%;height: 60px;}
    .top-header .menu-icon {position: absolute;top: 0;right: 0;padding: 18px 20px;}
    .fix-search .top-header {background: #eee;}
    .search {position: absolute;top: 189px;left: 0px; right: 213px;margin: 0 auto;width: 590px;/*border: 1px solid;*/}
    .search input {width: 100%;border: 1px solid #ccc;padding: 8px;font-size: 15px;transition: width 0.2s;
      -webkit-appearance: none;height: 38px;}
    .fix-search .search {position: fixed;top: 0px;width: 50%;margin: 0 auto;}
    .fix-search .search input {/*width: 250px;*//*width: 450px;*/position: relative;/*left: 110px;*/}
    .top {height: 250px;/*padding-top: 40px;*/}
    .hero {width: 200px;height: 100px;background: #ccc;margin: 0 auto;}
    main {padding: 0 20px;display: flex;flex-wrap: wrap;justify-content: space-between;}
    main div {width: 125px;height: 80px;background: #ccc;margin: 0 0 20px 0;}
    .clear{clear: both;}
    /*======ribbon css======*/
    .collapse{position: static;z-index: 99;}
   
    .cart{position: absolute;}

    .ribbon {margin: 0 0 0 -20px;padding: 5px 0;width: calc(100% + 20px);background-color: #e91e63;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);position: relative;}
    .header {margin: 0;padding: 0.3em 1em 0.3em;border-top: dashed 1px #fafafa;border-bottom: dashed 1px #fafafa;
      color: #fafafa;font-size: 1.6em;vertical-align: middle;}
    .header::before {content: "";position: absolute;top: 100%;left: 0;border-bottom: solid 15px transparent;border-right: solid 20px #c2185b;}
    .cuisine_ul{padding: 0;}
    .cuisine_ul li{list-style-type: none;padding: 6px 11px;border: 1px solid #d8d6d670;background: #cccccc42;}
    .cuisine_ul li a{color: #000;}
	</style>
		<div class="search">
			  		<div class="col-lg-12 col-md-12" id="search_navbar" style="position: sticky;top: 0;z-index: 99;padding: 15px 0px;">
		                <div class="col-lg-4 col-md-4" style="padding-right: 0px;">
		                  <input type="text" id="location" placeholder="Search location" class="form-control" name="" style="border: 1px solid #ccc;color: #000;border-radius: 0;"  value="<?php if(isset($_GET['location'])){ echo $_GET['location']; } ?>">
		                  <i class="fa fa-search" style="color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;"></i>
		                </div>
		                <div class="col-lg-6 col-md-6" style="padding-right: 0px;">
		                  <input type="text" id="category" placeholder="Search for" class="form-control" name="" style="border: 1px solid #ccc;color: #000;border-radius: 0;"  value="<?php if(isset($_GET['category'])){ echo $_GET['category']; } ?>">
		                  <i class="fa fa-map-marker" style="color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;"></i>
		                </div>
		                <div class="col-lg-2 col-md-2" style="padding:0px;">
		                  <input type="button" placeholder="Search for" class="btn btn-default" name="" value="Search" style="background: #3a126c;color: #fff;border-radius: 0;border: none;padding: 6PX 20px;">
		                </div>
		            </div>
			  	</div>
			  	<div class="clear"></div>

		  	<div class="top">
			<input type="hidden" name="merchant_id" id="merchant_id" value="{{$results['merchant']->id}}" />
			    <div class="col-lg-12 col-md-12" style="background: url(../public/images/restaurant_banner.jpg); background-size: cover;background-position: center; padding: 12px;">
				    <div class="container">
				      <div class="col-lg-12 col-md-12">
				          <div class="col-lg-2 col-md-2" style="width: 18.3%;padding-left: 0px;">
				            <img src="{{ asset('public/images/food1.jpg') }}" style="width: 202px;height: 148px;box-shadow: 0px 0px 18px #797878;">
				          </div>
				          <div class="col-lg-6 col-md-6" style="background:#ffffff47;box-shadow: 0px 0px 10px #000;padding: 15px 17px;width: 47%;">
				            <h3 style="color: #fff;font-size: 25px;margin-top: 0px;">{{$results['merchant']->restaurant_name}} {{$results['merchant']->street}}</h3>
				            <p style="color: #fff;font-size: 15px;">{{$results['merchant']->city}}</p>
				            <p style="color: #fff;font-size: 14px;">{{$results['merchant']->address}}</p>
				            <div style="">
				              <i class="fa fa-star" aria-hidden="true" style="color: #fff;font-size: 16px;"></i>
				              <i class="fa fa-star" aria-hidden="true" style="color: #fff;font-size: 16px;"></i>
				              <i class="fa fa-star" aria-hidden="true" style="color: #fff;font-size: 16px;"></i>
				              <i class="fa fa-star" aria-hidden="true" style="color: #fff;font-size: 16px;"></i>
				              <i class="fa fa-star-half-o" aria-hidden="true" style="color: #fff;font-size: 16px;"></i>
				              <span style="color: #000;border-radius: 21%;margin-left: 15px;padding: 5px;background: #fbeb20;font-weight: 600;">4.1</span>
				            </div>
				          </div>
				          <div class="col-lg-3 col-md-3">
				             <img src="{{asset('public/images/offer-banner.jpg')}}" style="width: 402px;height: 146px;"  />
				          </div>
				        </div>
				      </div>
				  </div>
			</div>
			<div class="container" style="margin-top: -47px;">
				<div class="col-lg-12 col-md-12">
					<div class="col-lg-2 col-md-2" style="background: #fff;padding: 0px;position: sticky;top: 0;z-index: 99;">
						<div class="col-lg-12 col-md-12" style="background: #3a126c;color: #fff;border-bottom: 1px solid #ccc;">
							<h4>Category</h4>
						</div>
						<div class="col-lg-12 col-md-12" style="padding-top: 10px;">
				            @foreach($results['category'] as $cat)
				            <label class="col-lg-6 col-md-6" style="padding: 0;">
				             	<input id="" name=""  onClick="getMerchant()" class="food_categories" type="checkbox" value="{{$cat->id}}">
				             	<span></span>
								{{$cat->category_name}}
				            </label>
				          @endforeach 
				           
				        </div>
				        <div class="col-lg-12 col-md-12" style="background: #3a126c;color: #fff;border-bottom: 1px solid #ccc;">
				            <h4>Cuisine</h4>
				        </div>
				        <div class="col-lg-12 col-md-12" style="padding: 0;">
				            <ul class="cuisine_ul">
				               @foreach($results['cuisine'] as $cu)
				                <li><a href="#" onClick="getItems({{$cu->id}})" ><i class="fa fa-caret-right"></i> {{$cu->cuisine_name}}</a></li>
				               @endforeach
				            </ul>
				        </div>
				    </div>

				    <!--center div-->
				    <div class="col-lg-6 col-md-6" style="margin-top: 54px;">
				    	<!-- product row start-->
				    	<div class="col-lg-12 col-md-12" style="padding: 0px;" id="contents">
				    	
				    	</div>
				    	<!-- product row end-->
				    	
				    	<!--sixth row end-->
				    </div>
				    <!--center div end-->

				    <!--right div start-->
				    <div class="col-lg-4 col-md-4" style="background: #fff;padding: 0px;position: sticky;top: 0;z-index: 99;">
			            <div class="col-lg-12 col-md-12" style="background: #3a126c;color: #fff;border-bottom: 1px solid #ccc;">
			              	<h4>Billing Cart</h4>
			            </div>
			            <div class="col-lg-12 col-md-12" style="padding: 0px;min-height: 60vh;">
			             
			                <img id="empty_cart" src="{{ asset('public/images/empty-cart.png') }}" style="position: absolute;padding: 98px;">
			              
			                <table class="table" style="width: 100%;position: relative;border: none;" cellpadding="4" cellspacing="4" border="1" id="orderedProductsTbl">
			                  
			                  <thead>
			                    <tr>
			                      <td>Name</td>
			                     
			                 <td>Size</td>
							  <td><center>Qty</center></td>
			                      <td>Price</td>
			                    
			                    </tr>
			                  </thead>
			                  <tbody id="orderedProductsTblBody">
			                  </tbody>
			                 
			                </table>
			              
			            </div>
						 <div class="col-lg-12 col-md-12" style="padding: 0px;">
						 <div class="col-lg-6 col-md-6"> <b>Subtotal</b></div>
						 <div class="col-lg-6 col-md-6"  style="font-weight:bold"><div  style="float:right;margin-right:20px" id="cart_total"></div> </div>
						  </div>
						  <div class="col-lg-12 col-md-12" style="margin-top: 40px;">
						 <center> <button class="btn btn-sucess" id="checkout" style="display:none" onClick="getCheckout()" type="button">Checkout</button></center>
						  </div>
			        </div>	
				    <!--right div end-->
				</div>
			</div>
	@include('footer')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">
	function getCheckout()
	{
		
		window.location.href="{{ url('checkout') }}?id={{$results['merchant']->id}}";
	}
	$(document).ready(function(){
		var wrap = $("#wrap");

		wrap.on("scroll", function(e) {
		    
		  if (this.scrollTop > 147) {
		    wrap.addClass("fix-search");
		  } else {
		    wrap.removeClass("fix-search");
		  }
		  
		});
		getItems()
	})
		
	</script>

	<!--shoping cart-->

  	<script type="text/javascript">

		//create array that will hold all ordered products
	    var shoppingCart = [];
displayShoppingCart();
	    //this function manipulates DOM and displays content of our shopping cart
	    function displayShoppingCart(){
	        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
	        //ensure we delete all previously added rows from ordered products table
	        while(orderedProductsTblBody.rows.length>0) {
	            orderedProductsTblBody.deleteRow(0);
	        }
 
		   $.ajax({
				type:"get",
				url:"{{url('get_cart')}}",
			  data:{},
			  dataType:'json',
			  success:function(res){
				 var shoppingCart = res;
				// alert(shoppingCart.length)
				
				 console.log(res);
	        //variable to hold total price of shopping cart
						var cart_total_price=0;
						//iterate over array of objects
						for(var product in shoppingCart){
							//add new row      
							$("#empty_cart").hide();
							$("#checkout").show();
							var row=orderedProductsTblBody.insertRow();
							//create three cells for product properties 
							var cellName = row.insertCell(0);
							var cellSize = row.insertCell(1);
							var cellQty = row.insertCell(2);
							
							var cellPrice = row.insertCell(3);
							// cellPrice.align="right";
							//fill cells with values from current product object of our array
							cellName.innerHTML = shoppingCart[product].Name;
							cellSize.innerHTML = shoppingCart[product].size;
							
							cellQty.innerHTML = '<div class="input-group"><span class="input-group-btn"> <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"><span class="glyphicon glyphicon-minus"></span> </button></span> <input type="text" name="quant[1]" class="form-control input-number" style="width:60px" value="'+shoppingCart[product].Qty+'" min="1" max="10"><span  style="margin-left: 0px"> <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span>  </button></span> </div>';
							//cellQty.innerHTML = shoppingCart[product].Qty;
							var total_price = shoppingCart[product].Qty * shoppingCart[product].Price;
							cellPrice.innerHTML = '<i class="fa fa-inr"></i> '+total_price;
							cart_total_price+=parseFloat(total_price);
						}
						//fill total cost of our shopping cart 
						document.getElementById("cart_total").innerHTML='<i class="fa fa-inr"></i> '+cart_total_price;
				 
			  }
			})
		   
	    }


	  
		
		function getItems($id='')
		{
			//alert('hi')
			$merchant_id=$("#merchant_id").val();
			if($("#location").val() !=undefined){
		 var location =$("#location").val();
		}else{
			var location ='';
		}
		if($("#category").val() !=undefined){
		  var category =$("#category").val();
		}else{
			var category ='';
		}
			var arr =[];
		$('input.food_categories:checkbox:checked').each(function(){
			arr.push($(this).val());
		})
			$.ajax({
				type:"post",
				url:"{{url('get_item_data')}}",
			  data:{
				  'merchant_id':$merchant_id,
				  'location' :location,
				  'category' :category,
				  'food_categories':arr,
				  'cuisine':$id,
				  },
			  dataType:'json',
			  success:function(res){
				  var div1 ='';
				  $.each(res, function(key,val){
				// alert(val.item_name)
				  div1 += '<div class="col-lg-3 col-md-3" style="padding: 0px;"><div class="" style="padding: 0px 10px 0px 0px;"><center><img src="{{ asset('uploads/merchant_item_cat_images/')}}/'+val.photo+'" class="image" style="height: 93px;width: 100%;"></center><h3 id="item_name_'+val.id+'" class="restaurant_details_div_title" style="text-align: left; font-size:12px;top: 0px;background: #fff;color: #000;padding-left: 5px;">'+val.item_name+'</h3><input type="button" data-toggle="modal" data-target="#sizes" onclick="selectSizes('+val.id+')"  value="Add"  style="width: 58px;float: left;padding: 2px 0px;border:none;background:#3a126c;color: #fff;" /></div></div>';
				  });
				  //alert(div1)
				   $("#contents").html(div1);
				   
				 
			  }
			})
		}
		function selectSizes($id)
		{
			var item_name =$("#item_name_"+$id).text();
			
			$("#modal_title").text(item_name)
			$("#item_name").val(item_name)
			$("#item_id").val($id)
			
			
				$.ajax({
				type:"get",
				url:"{{url('get_item_price')}}",
			  data:{'item_id':$id},
			  dataType:'json',
			  success:function(res){
				  var div2 ='';
				  $.each(res, function(key,val){
				// alert(val.item_name)
				var size_id =val.size_name+'_'+val.price;
				  div2 += '<input name="size" id="sizes_'+size_id+'" type="radio"  value="'+size_id+'" /> <label for="sizes_'+size_id+'">'+val.size_name+' ₹ '+val.price+'</label><br>';
				  });
				  //alert(div1)
				   $("#sizes_price").html(div2);
				   
				 
			  }
			})
		}
		  function AddtoCart(){
			  if(($('input[type=radio]:checked').size() > 0))
			  {
				var prices =$('input[type=radio]:checked').val().split('_');
				var size=prices[0];
				var price=prices[1];
	       //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
	       var singleProduct = {};
	       //Fill the product object with data
	       singleProduct.Name=$("#item_name").val();
	       singleProduct.item_id=$("#item_id").val();
	       singleProduct.size=size;
	       
	       singleProduct.Qty=1;
	       singleProduct.Description='';
	       singleProduct.Price=parseFloat(price);
	       //Add newly created product to our shopping cart 
	       shoppingCart.push(singleProduct);
		   
		   $.ajax({
				type:"post",
				url:"{{url('add_to_cart')}}",
			  data:{'shoppingCart':singleProduct},
			  success:function(res){
				 // alert('hi')
				 displayShoppingCart();
				 
			  }
			})
		   
	       //call display function to show on screen
	       
		  $(".close").trigger('click');
		  }else{
			  alert('Please check any price')
		  }
	    }
	
		
</script>

<div id="sizes" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
	<form method="post">
	<input type="hidden" name="item_name" id="item_name" />
	<input type="hidden" name="item_id" id="item_id" />
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="modal_title">Add Dish</h4>
      </div>
      <div class="modal-body">
        <p id="sizes_price">
		
		
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="AddtoCart()">Add</button>
      </div>
	  </form>
    </div>

  </div>
</div>