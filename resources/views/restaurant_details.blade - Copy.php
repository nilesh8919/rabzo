@include('header')
 <style type="text/css">
		* {
		  box-sizing: border-box;
		}

		body {
		  margin: 0;
		}

		.wrap {
		  width: 100%;
		  /*border: 1px solid #ccc;*/
		  height: 579px;
		  overflow: auto;
		  position: relative;
		      margin-top: 77px;
		}

		.top-header {
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 60px;
		}
		.top-header .menu-icon {
		  position: absolute;
		  top: 0;
		  right: 0;
		  padding: 18px 20px;
		}
		.fix-search .top-header {
		  background: #eee;
		}

		.search {
		  /*position: absolute;
		  top: 155px;
		  left: 20px;
		  right: 20px;*/
		      position: absolute;
		    top: 188px;
		    left: 0px;
		    right: 214px;
		    margin: 0 auto;
		    width: 583px;
		    /*border: 1px solid;*/
		}
		.search input {
		  width: 100%;
		  border: 1px solid #ccc;
		  padding: 8px;
		  font-size: 15px;
		  transition: width 0.2s;
		  -webkit-appearance: none;
		      height: 38px;
		}
		.fix-search .search {
		  position: fixed;
		  top: 0px;
		  width: 50%;
		  margin: 0 auto;
		}
		.fix-search .search input {
		  /*width: 250px;*/
		  /*width: 450px;*/
	    position: relative;
	    /*left: 110px;*/
		}

		.top {
		  height: 250px;
		  /*padding-top: 40px;*/
		}

		.hero {
		  width: 200px;
		  height: 100px;
		  background: #ccc;
		  margin: 0 auto;
		}

		main {
		  padding: 0 20px;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		}
		main div {
		  width: 125px;
		  height: 80px;
		  background: #ccc;
		  margin: 0 0 20px 0;
		}
		.clear{clear: both;}
		.cuisine_ul{padding: 0;}
    .cuisine_ul li{list-style-type: none;padding: 6px 11px;border: 1px solid #d8d6d670;background: #cccccc42;}
    .cuisine_ul li a{color: #000;}
	</style>
  
  
  <!-- bestsell Slider -->
  <section class="clear" style="background: #f9f7f754;">
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
				            <p style="color: #fff;font-size: 15px;">Sadar, Sadar</p>
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
				             	<input id="" name="" class="" type="checkbox" value="{{$cat->id}}">
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
				                <li><a href="#"><i class="fa fa-caret-right"></i> {{$cu->cuisine_name}}</a></li>
				               @endforeach
				            </ul>
				        </div>
				    </div>

				    <!--center div-->
				
				
				
				
				<div class="col-lg-6 col-md-6">
            <div class="col-lg-12 col-md-12" style="padding: 0px;">
              <!--search div-->
              <div class="col-lg-12 col-md-12" id="search_navbar" style="background: #fff;position: sticky;top: 0;z-index: 99;padding: 15px 0px 0px;">
                <div class="col-lg-6 col-md-6" style="padding-right: 0px;">
                  <input type="text" placeholder="Search for" class="form-control" name="" style="border: 1px solid #ccc;color: #fff;border-radius: 0;">
                  <i class="fa fa-search" style="color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;"></i>
                </div>
                <div class="col-lg-4 col-md-4" style="padding-right: 0px;">
                  <input type="text" placeholder="Search Location" class="form-control" name="" style="border: 1px solid #ccc;color: #fff;border-radius: 0;">
                  <i class="fa fa-map-marker" style="color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;"></i>
                </div>
                <div class="col-lg-2 col-md-2" style="padding:0px;">
                  <input type="button" placeholder="Search for" class="btn btn-default" name="" value="Search" style="background: #3a126c;color: #fff;border-radius: 0;border: none;padding: 7PX 20px;">
                </div>
              </div>
              <div class="col-lg-12 col-md-12" style="padding: 0px;">
                <!-- product row start-->
                <div class="col-lg-12 col-md-12" style="padding: 0px;" id="contents">
                 
                </div>
                <!-- product row end-->
                <!--product ronw second start-->
               
                <!--product row second end-->
                <!--product row third start-->
               
                <!--product row third end-->
              </div>
            </div>
          </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				    <!--center div end-->

				    <!--right div start-->
				    <div class="col-lg-4 col-md-4" style="background: #fff;padding: 0px;position: sticky;top: 0;z-index: 99;">
			            <div class="col-lg-12 col-md-12" style="background: #3a126c;color: #fff;border-bottom: 1px solid #ccc;">
			              	<h4>Billing Cart</h4>
			            </div>
			            <div class="col-lg-12 col-md-12" style="padding: 0px;min-height: 70vh;">
			             
			                <img src="{{ asset('public/images/empty-cart.png') }}" style="position: absolute;padding: 98px;">
			              
			                <table class="table" style="width: 100%;position: relative;border: none;" cellpadding="4" cellspacing="4" border="1" id="orderedProductsTbl">
			                  
			                  <thead>
			                    <tr>
			                      <td>Name</td>
			                      <td>Qty</td>
			                      <td>Description</td>
			                      <td>Price</td>
			                    </tr>
			                  </thead>
			                  <tbody id="orderedProductsTblBody">
			                  </tbody>
			                  <tfoot>
			                    <tr>
			                      <td colspan="4" align="right" id="cart_total">
			                      </td>
			                    </tr>
			                  </tfoot>
			                </table>
			              
			            </div>
			        </div>	
				    <!--right div end-->
				</div>
			</div>
  </section>
  
	<script type="text/javascript">
		var wrap = $("#wrap");

		wrap.on("scroll", function(e) {
		    
		  if (this.scrollTop > 147) {
		    wrap.addClass("fix-search");
		  } else {
		    wrap.removeClass("fix-search");
		  }
		  
		});
	</script>

	<!--shoping cart-->

  	<script type="text/javascript">

		//create array that will hold all ordered products
	    var shoppingCart = [];

	    //this function manipulates DOM and displays content of our shopping cart
	    function displayShoppingCart(){
	        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
	        //ensure we delete all previously added rows from ordered products table
	        while(orderedProductsTblBody.rows.length>0) {
	            orderedProductsTblBody.deleteRow(0);
	        }

	        //variable to hold total price of shopping cart
	        var cart_total_price=0;
	        //iterate over array of objects
	        for(var product in shoppingCart){
	            //add new row      
	            var row=orderedProductsTblBody.insertRow();
	            //create three cells for product properties 
	            var cellName = row.insertCell(0);
	            var cellQty = row.insertCell(1);
	            var cellDescription = row.insertCell(2);
	            var cellPrice = row.insertCell(3);
	            // cellPrice.align="right";
	            //fill cells with values from current product object of our array
	            cellName.innerHTML = shoppingCart[product].Name;
	            cellQty.innerHTML = shoppingCart[product].Qty;
	            cellDescription.innerHTML = shoppingCart[product].Description;
	            cellPrice.innerHTML = shoppingCart[product].Price;
	            cart_total_price+=shoppingCart[product].Price;
	        }
	        //fill total cost of our shopping cart 
	        document.getElementById("cart_total").innerHTML=cart_total_price;
	    }


	    //function AddtoCart(name,qty,description,price){
	    function AddtoCart(name,qty,description,price){
	       //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
	       var singleProduct = {};
	       //Fill the product object with data
	       singleProduct.Name=name;
	       singleProduct.Qty=qty;
	       singleProduct.Description=description;
	       singleProduct.Price=price;
	       //Add newly created product to our shopping cart 
	       shoppingCart.push(singleProduct);
	       //call display function to show on screen
	       displayShoppingCart();

	    } 
		getItems()
		function getItems()
		{
			//alert('hi')
			$merchant_id=$("#merchant_id").val();
			$.ajax({
				type:"post",
				url:"{{url('get_item_data')}}",
			  data:{'merchant_id':$merchant_id},
			  dataType:'json',
			  success:function(res){
				  var div1 ='';
				  $.each(res, function(key,val){
				// alert(val.item_name)
				  div1 += '<div class="col-lg-3 col-md-3" style="padding: 0px;"><div class="" style="padding: 0px 10px 0px 0px;"><center><img src="{{ asset('uploads/merchant_item_cat_images/')}}/'+val.photo+'" class="image" style="height: 93px;width: 100%;"></center><h3 class="restaurant_details_div_title" style="text-align: left; font-size:12px;top: 0px;background: #fff;color: #000;padding-left: 5px;">'+val.item_name+'</h3><p style="width: 74px;background:#fff;float: left;padding: 2px 7px;"><i class="fa fa-inr" aria-hidden="true"></i> 220.00</p><input type="button" onclick="AddtoCart(1,1,1,1)"  value="Add"  style="width: 58px;float: left;padding: 2px 0px;border:none;background:#3a126c;color: #fff;" /></div></div>';
				  });
				  //alert(div1)
				   $("#contents").html(div1);
			  }
			})
		}
	</script>
  
@include('footer')
