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
    .search {position: absolute;left: 0px; right: 114px;margin: 0 auto;width: 700px;/*border: 1px solid;*/    top: -14px;}
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
  
  <!-- Slider -->
  <!-- bestsell Slider -->
  <section class="clear" style="background: #f9f7f754;">
  <input type="hidden"/>
    <div class="container">
      <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-2 col-md-2" style="background: #fff;padding: 0px;position: sticky;top: 0;z-index: 99;">
            <!-- <div class="col-lg-12 col-md-12" style="border-bottom: 1px solid #a09c9c6e;background: #ccc;">
              <h4>Filters</h4>
            </div> -->
            <div class="col-lg-12 col-md-12" style="background: #3a126c;">
              <h4 style="color: #fff;">Category</h4>
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
            <div class="col-lg-12 col-md-12" style="background: #3a126c;">
              <h4 style="color: #fff;">Cuisine</h4>
            </div>
            <div class="col-lg-12 col-md-12" style="padding: 0;">
               <ul class="cuisine_ul">
							@foreach($results['cuisine'] as $cu)
				                <li><a href="javascript:void(0)" onClick="getMerchant(<?php echo $cu->id ?>)"><i class="fa fa-caret-right"></i> {{$cu->cuisine_name}}</a></li>
				               @endforeach
				            </ul>
            </div>
          </div>
          <div class="col-lg-7 col-md-7" style="padding: 0px;" >
            <div class="col-lg-12 col-md-12" style="padding: 0px;">
              <!--search div-->
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
              <div id="contents" style="margin-top:60px;">
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
            </div>
           
          </div>
           <!-- <div class="col-lg-9 col-md-9" style="padding: 0px;" id="contents">
          </div>  -->

          <div class="col-lg-3 col-md-3" style="background: #fff;padding: 0;">
            <div class="col-lg-12 col-md-12" style="padding: 0px;">
              <h4 style="background: #3a126c;color:#fff;margin: 0;padding: 14px;font-size: 20px;font-weight: 600;">Featured Restaurant</h4>
		 
		  @foreach($results['featured'] as $row)
              <div class="col-lg-6 col-md-6" style="margin-top:15px;">
                <img src="{{ asset('uploads/').'/'.$row->images }}" style="width: 100%;border-radius: 4px;margin-bottom: 10px;height: 84px;" />
                <p>{{$row->restaurant_name}}</p>
              </div>
		  @endforeach
            
            </div>
            <div class="col-lg-12 col-md-12" style="padding: 0px;">
              <h4 style="padding-left: 14px;font-size: 20px;font-weight: 600;">Near by Restaurant</h4>
              <div class="col-lg-6 col-md-6" style="margin-top:15px;">
                <img src="images/food1.jpg" style="width: 100%;border-radius: 4px;margin-bottom: 10px;height: 84px;">
                <p>Ethyl
                Enjoy Live Sports Screening With Special Offers !</p>
              </div>
              <div class="col-lg-6 col-md-6" style="margin-top:15px;">
                <img src="images/food1.jpg" style="width: 100%;border-radius: 4px;margin-bottom: 10px;height: 84px;">
                <p>Ethyl
                Enjoy Live Sports Screening With Special Offers !</p>
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
				  div1 += ' <div class="col-lg-4 col-md-4"><div class="" style="border: none;"> <div class="" style="padding: 0px;"> <div class="cart">';
				  if(val.offer > 0){
				 div1 +='<div class="ribbon"> <h2 class="header">Save '+val.offer+' %</h2> </div>';
				  }
				 div1 +='</div> <img src="uploads/'+val.images+'" class="image" style="height: 194px;width: 100%;"> <a href="{{url('restaurant_details')}}/'+val.restaurant_slug+'?location='+location+'&category='+category+'"><h3 class="restaurant_details_div_title" style="top: 0px;background: #fff;color: #000;">'+val.restaurant_name+'</h3></a> </div> </div> </div>';
				  });
				  //alert(div1)
				   $("#contents").html(div1);
			  }
			})
		}
		</script>