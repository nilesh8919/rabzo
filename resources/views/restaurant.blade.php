@include('styles')
@include('header')
 <style type="text/css">
    .collapse{position: static;z-index: 99;}
    .cart{position: absolute;}
    .ribbon {margin: 0 0 0 -20px;padding: 5px 0;width: calc(100% + 20px);background-color: #e91e63;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);position: relative;}
    .header {margin: 0;padding: 0.3em 1em 0.3em;border-top: dashed 1px #fafafa;border-bottom: dashed 1px #fafafa;color: #fafafa;font-size: 1.6em;vertical-align: middle;}
    .header::before {content: "";position: absolute;top: 100%;left: 0;border-bottom: solid 15px transparent;border-right: solid 20px #c2185b;}
    .wrap {width: 100%; /*border: 1px solid #ccc;*/ height: 579px;overflow: auto;position: relative;margin-top: 77px;}
    .top-header {position: fixed;top: 0;left: 0;width: 100%;height: 60px;}
    .top-header .menu-icon {position: absolute;top: 0;right: 0;padding: 18px 20px;}
    .fix-search .top-header {background: #eee;}
    .search {position: absolute;left: 0px; right: 114px;margin: 0 auto;width: 700px;/*border: 1px solid;*/    top: -5px;}
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
    .cuisine_ul{padding: 0;margin: 0px;}
    .cuisine_ul li{list-style-type: none;padding: 6px 11px;border: 1px solid #d8d6d670;background: #cccccc42;}
    .cuisine_ul li a{color: #000;}
    .restaurant_page_div{margin-top: 40px;}{}
    .restaurant_page_search_div{position: sticky;top: 0;z-index: 99;padding: 6px 0px;}
    .restaurant_search_button_div input{background: #3a126c;color: #fff;border-radius: 0;border: none;padding: 6PX 20px;}
    .restaurant_location_icon{color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;}
    .restaurant_dishesh_icon{color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;}
    .restaurant_category_title{color: #fff;font-size: 15px;}
    .restaurant_page_restaurant_img{height: 160px;width: 100%;}
    .restaurant_feature_images{width: 100%;border-radius: 4px;margin-bottom: 10px;height: 84px;}
    .restaurant_nearby_restaurant_img{width: 100%;border-radius: 4px;margin-bottom: 10px;height: 84px;}
    @media(min-width: 320px) and (max-width: 479px)
    {
      .wrap{margin-top: 50px;height: 760px;}
      .search{width: 380px;height: 45px;top: -61px!important;}
      .restaurant_page_div{margin-top: 70px;}
      .restaurant_page_search_div{height: 52px;}
      .fix-search .search{top: 0!important;width: 82%;left: 58px;}
      .restaurant_search_button_div input{padding: 6PX 12px;}
      .restaurant_location_icon{color: #000;}
      .restaurant_dishesh_icon{color: #000;}
      .restaurant_category_title{padding:10px;}
      .restaurant_page_restaurant_div{padding: 0px;margin-bottom: 30px;}
      .restaurant_page_restaurant_img{height: 200px;}
      .restaurant_feature_images{height: 180px;}
      .restaurant_nearby_restaurant_img{height: 180px;}
    }
  </style>
  
  <!-- Slider -->
  <!-- bestsell Slider -->
  <section class="clear" style="background: #f9f7f754;">
  <input type="hidden"/>
    <div class="container">
      <div class="row" style="margin-top: 10px;">
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-2 col-md-2" style="background: #fff;padding: 0px;position: sticky;top: 0;z-index: 99;">
            <!-- <div class="col-lg-12 col-md-12" style="border-bottom: 1px solid #a09c9c6e;background: #ccc;">
              <h4>Filters</h4>
            </div> -->
            <div class="col-lg-12 col-md-12" style="background: #3a126c;">
              <h4 class="restaurant_category_title" style="">Category</h4>
            </div>
            <div class="col-lg-12 col-md-12" style="padding-top: 10px;">
             @foreach($results['category'] as $cat)
				            <label class="col-lg-12 col-md-12" style="padding: 0;">
				             	<input id="" name="" onClick="getMerchant()" class="food_categories" type="checkbox" value="{{$cat->id}}">
				             	<span></span>
								{{$cat->category_name}}
				            </label>
				          @endforeach 
             
            </div>
            <div class="col-lg-12 col-md-12 restaurant_page_cuisine_title" style="background: #3a126c;">
              <h4 style="color: #fff;font-size: 15px;">Cuisine</h4>
            </div>
            <div class="col-lg-12 col-md-12 restaurant_page_cuisine_div" style="padding: 0;">
               <ul class="cuisine_ul">
							@foreach($results['cuisine'] as $cu)
				                <li><a href="javascript:void(0)" onClick="getMerchant(<?php echo $cu->id ?>)"><i class="fa fa-caret-right"></i> {{$cu->cuisine_name}}</a></li>
				               @endforeach
				            </ul>
            </div>
          </div>
          <div class="col-lg-7 col-md-7" style="padding: 0px;" >
            <div class="col-lg-12 col-md-12" style="padding: 0px; ">
              <!--search div-->
              <div class="search">
                <div class="col-lg-12 col-md-12 restaurant_page_search_div" id="search_navbar" style="">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 restaurant_search_location_div" style="padding-right: 0px;">
                    <input type="text" id="location" placeholder="location" class="form-control" name="" style="border: 1px solid #ccc;color: #000;border-radius: 0;"  value="<?php if(isset($_GET['location'])){ echo $_GET['location']; } ?>">
                    <i class="fa fa-crosshairs restaurant_location_icon" style=""></i>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 restaurant_search_dishesh_div" style="padding-right: 0px;">
                    <input type="text" id="category" placeholder="Restaurant/Dishes" class="form-control" name="" style="border: 1px solid #ccc;color: #000;border-radius: 0;"  value="<?php if(isset($_GET['category'])){ echo $_GET['category']; } ?>">
                    <i class="fa fa-search restaurant_dishesh_icon" style=""></i>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 restaurant_search_button_div" style="padding:0px;">
                    <input type="button" placeholder="Search for" class="btn btn-default" name="" value="Search" >
                  </div>
                  <div class="clear"></div>
              </div>
              </div>
              <div id="contents" class="restaurant_page_div">
              </div>
              <!-- <div class="col-lg-12 col-md-12" id="search_navbar" style="background: #fff;position: sticky;top: 0;z-index: 99;padding: 15px 0px 0px;">
                <div class="col-lg-6 col-md-6" style="padding-right: 0px;">
                  <input type="text" id="location" value="<?php if(isset($_GET['location'])){ echo $_GET['location']; } ?>" placeholder="Search Location" class="form-control" name="" style="border: 1px solid #ccc;color: ;border-radius: 0;" />
                  <i class="fa fa-search" style="color: #ccc;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;"></i>
                </div>
                <div class="col-lg-4 col-md-4" style="padding-right: 0px;">
                  <input type="text" id="category" placeholder="Search For" value="<?php if(isset($_GET['category'])){ echo $_GET['category']; } ?>" class="form-control" name="" style="border: 1px solid #ccc;color: ;border-radius: 0;" />
                  <i class="fa fa-map-marker" style="color: #fff;position: relative;float: right;top: -27px;right: 15px;font-size: 19px;"></i>
                </div>
                <div class="col-lg-2 col-md-2" style="padding:0px;">
                  <input type="button" onClick="getMerchant()" placeholder="Search for" class="btn btn-default" name="" value="Search" style="background: #3a126c;color: #fff;border-radius: 0;border: none;padding: 7PX 53px;">
                </div>
              </div> -->
              <div class="clear"></div>
            </div>
           
          </div>
           <!-- <div class="col-lg-9 col-md-9" style="padding: 0px;" id="contents">
          </div>  -->

          <div class="col-lg-3 col-md-3" style="padding: 0;">
            <div class="col-lg-12 col-md-12" style="padding: 0px;">
              <h4 style="background: #3a126c;color:#fff;margin: 0;padding: 14px;font-weight: 600;font-size: 15px;">Featured Restaurant</h4>
		        </div>
            <div class="col-lg-12 col-md-12" style="padding:15px 0px 0px 0px;background: #fff;">
		          @foreach($results['featured'] as $row)
              <div class="col-lg-6 col-md-6" style="">
                <img src="{{ asset('uploads/').'/'.$row->images }}" class="restaurant_feature_images" />
                <p style="font-weight: 600;margin: 0px;">{{$row->restaurant_name}}</p>
                <p><?php echo $row->address; ?>, <?php echo $row->city; ?></p>
              </div>
		          @endforeach
            
            </div>
            <div class="col-lg-12 col-md-12" style="padding: 0px;margin-top: 15px;">
              <h4 style="background: #3a126c;color:#fff;margin: 0;padding: 14px;font-size: 15px;font-weight: 600;">Near by Restaurant</h4>
            </div>
            <div class="col-lg-12 col-md-12" style="padding:15px 0px 0px 0px;background: #fff;">
              <div class="col-lg-6 col-md-6" style="">
                <img src="images/food1.jpg" class="restaurant_nearby_restaurant_img">
                <p>Enjoy Live Sports Screening With Special Offers !</p>
              </div>
              <div class="col-lg-6 col-md-6" style="">
                <img src="images/food1.jpg" style="width: 100%;border-radius: 4px;margin-bottom: 10px;height: 84px;">
                <p>Enjoy Live Sports Screening With Special Offers !</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('footer')

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
<script>
/*function getMerchantData()
{
	getMerchant();
}*/
$(document).ready(function(){
	getMerchant();
  //alert('hi')
})

function getMerchant($id='')
		{
			
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
		console.log($id)
		
			//alert('hi')
			$merchant_id=$("#merchant_id").val();
			$.ajax({
				type:"post",
				url:"{{url('get_merchant_data')}}",
			  data:{
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
				  div1 += ' <div class="col-lg-4 col-md-4 restaurant_page_restaurant_div"><div class="" style="border: none;height: 285px;margin-top: 16px;"> <div class="" style="padding: 0px;"> <div class="cart">';
				  if(val.offer > 0){
				 div1 +='<div class="ribbon"> <h2 class="header">Save '+val.offer+' %</h2> </div>';
				  }
				  if(val.offers){
				  var offfer_per ='<span class="details_offer_span">'+val.offers.offer_percentage+'% OFF</span>';
				  }
				  else{
					  var offfer_per ='';
				  }
				  
				  if(val.avg_rating > 0){
				  var rating ='<span class ="details_star_span">'+val.avg_rating+'</span>';
				  }
				  else{
					  var rating ='';
				  }
				 div1 +='</div> <img src="uploads/'+val.images+'" class="image restaurant_page_restaurant_img"> '+offfer_per+rating+'<a href="{{url('restaurant_details')}}/'+val.restaurant_name+'?location='+location+'&category='+category+'"><div style="background:#fff;padding: 0px 10px 10px 9px;"><h3 class="restaurant_details_div_title" style="top: 0px;color: #000;">'+val.restaurant_name+'</h3><p style="color: #000;">'+val.address+'</p><p style="color: #000;">Distance - 30 Min</p></div></a> </div> </div> </div>';
				  });
				  //alert(div1)
				   $("#contents").html(div1);
			  }
			})
		}
		</script>