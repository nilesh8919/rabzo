@include('styles')
@include('header')
  <!-- Slider -->
  <div id="" class="">
    <div class="">
      <div class="row">
        <div class="col-md-12">
		  @foreach($results['banner'] as $row)
          <img src='public/uploadimages/{{$row->bannername}}' alt="slide-img"  style="width: 100%;" />
           @endforeach
          <!-- <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                @foreach($results['banner'] as $row)
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb=''public/uploadimages/{{$row->bannername}}'>
                  <img src='public/uploadimages/{{$row->bannername}}' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  
                </li>
                @endforeach
              </ul>
            </div>
          </div> -->
        </div>
        <style type="text/css">
          .easy-autocomplete{position: absolute;}
        </style>
        <div class="col-lg-12 col-md-12" style="position: absolute;z-index: 999;top: 260px;">
          <div class="col-lg-3 col-md-3" style="margin-left: 27px;"></div>
          <div class="col-lg-8 col-md-8">
		        <div class="col-lg-3 col-md-3" style="padding: 0px;">
              <input type="text" style="width:220px;border-right: 1px solid #ccc;" id="location" placeholder="Search Location" class="form-control search_input_banner1" name="" style=""><i class="fa fa-crosshairs" aria-hidden="true" style="position: absolute;font-size: 23px;top: 17px;z-index: 99;right: 10px;"></i>
            </div>
            <div class="col-lg-4 col-md-4" style="padding: 0px;">
              <input type="text" style="width:283px;border-radius: 0;" id="categories" placeholder="Search Restaurent /Dishes " class="form-control search_input_banner2" name="" style="border-radius: 0;"><i class="fa fa-search" aria-hidden="true" style="position: absolute;font-size: 23px;top: 17px;z-index: 99;right: 10px;"></i>
            </div>
            <div class="col-lg-3 col-md-3" style="padding: 0px;">
              <input type="submit" onClick="get_restaurant()" class="btn btn-checkout search_find_button" name="" style="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
    .bestsell-pro .slider-items-products .owl-buttons .owl-prev {left: 61px;top: 82px;}
    .bestsell-pro .slider-items-products .owl-buttons .owl-prev a:before{font-size: 55px;}
    .bestsell-pro .slider-items-products .owl-buttons .owl-next a:before{font-size: 55px;}
    .bestsell-pro .slider-items-products .owl-buttons .owl-next{left: 971px;top: 80px;}
  </style>
  <script>
  function get_restaurant()
  {
	  var location =$("#location").val();
	  var categories =$("#categories").val();
	  window.location.href="{{url('restaurant')}}?location="+location+"&category="+categories;
  }
  // location search
  var options = {
			url: "{{url('get_merchant_available_location')}}",
            getValue: "city",
               list: {
				match: {
					enabled: true
				}
			}
		};
    $("#location").easyAutocomplete(options);
	// restaurant search
		var options1 = {
			url: "{{url('get_merchant_available_restaurant')}}",
            getValue: "cuisine_name",
            list: {
				match: {
					enabled: true
				}
			}
		};
       $("#categories").easyAutocomplete(options1);
  </script>
  <!-- end Slider -->

  <div class="col-lg-12 col-md-12" style="background: #bbbbbb38;">
    <!-- <img src="images/process.gif"> -->
    <div class="col-lg-4 col-md-4">
      <center>
        <img src="public/uploadimages/<?php echo $results['first_step_image'][0]; ?>" />
        <p style="width: 40px;height: 40px;border-radius: 50%;background: #3a126c;color: #fff;font-size: 26px;">1</p>
        <p style="font-size: 18px;font-weight: 600;"><?php echo $results['first_step_title'][0]; ?></p>
      </center>
    </div>
    <div class="col-lg-4 col-md-4">
      <center>
        <img src="public/uploadimages/<?php echo $results['second_step_image'][0]; ?>">
        <p style="width: 40px;height: 40px;border-radius: 50%;background: #3a126c;color: #fff;font-size: 26px;">2</p>
        <p style="font-size: 18px;font-weight: 600;"><?php echo $results['second_step_title'][0]; ?></p>
      </center>
    </div>
    <div class="col-lg-4 col-md-4">
      <center>
        <img src="public/uploadimages/<?php echo $results['third_step_image'][0]; ?>">
        <p style="width: 40px;height: 40px;border-radius: 50%;background: #3a126c;color: #fff;font-size: 26px;">3</p>
        <p style="font-size: 18px;font-weight: 600;"><?php echo $results['second_step_title'][0]; ?></p>
      </center>
    </div>
  </div>
  <!-- bestsell Slider -->
  <style type="text/css">
    .clear{clear: both;}
    .bestsell-pro .block-content{padding: 14px 10px;}
    .best_deals_single_slider{margin: 0px;}
    .testi-slider{padding: 0px;margin-bottom: 0px;border:none;}
    .avatar img{width: 100%;margin-bottom: 0px;border-radius: 0px;height: 245px;}
    .avatar{margin-bottom: 0px;}
    .testi-slider .carousel-indicators{bottom: -11px;}
    .index_restaurant_slider{height: 220px;}
    /*======slick slider css======*/
    .slick-next:before, .slick-prev:before{color: #000!important;font-size: 30px!important;}
    .slick-initialized .slick-slide{}
    .slick-next{right: 10px!important;}
    .slick-prev{left: 0!important;z-index: 9;}
    .index_bestseller_heading{width: 80%;float: left;}
    .index_viewall_btn{width: 233px;font-size: 16px;display: -webkit-box;text-align: right;position: relative;padding-left: 156px;right: 0;top: 1px;margin: 0px;}
    .index_product_slider_img{width: 100%;height: 200px;}
    .index_product_slider_details{}{}
    .distance_class{width: 140px; float: left;}
    .cost_class{width: 140px; float: left;}
    .index_product_slider{border: 1px solid #ccc;padding: 12px;}
    .index_slider_rating_span{position: relative;float: right;right: 12px;top: -19px;padding: 10px;width: 40px;height: 40px;background: orange;font-size: 16px;font-weight: 600;text-align: center;box-shadow: 0px 0px 8px;}
  </style>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">
  <section class="bestsell-pro" style="clear: both;">
    <div class="container">
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="home-block-inner">
              <div class="block-title">
                <h2 class="index_bestseller_heading">Best Sellers </h2>
                <h3 class="index_viewall_btn">View All</h3>
              </div>
              <div class="slide">
			  <?php if(count($results['review']) > 0){
				  foreach($results['review'] as $row){
				  ?>
				  <a href="{{url('restaurant_details')}}/{{$row->restaurant_name}}">
                <div class="index_product_slider">
                  <img src="uploads/{{$row->images}} " class="index_product_slider_img">
				  <?php if(isset($row->avg_rating) ){?>
                  <span class="index_slider_rating_span"><?php echo $row->avg_rating; ?></span>
				  	<?php } ?>
                  <div class="index_product_slider_details">
                    <h4 style="font-weight: 600;"><?php echo $row->restaurant_name; ?></h4>
                    <p><?php echo $row->address; ?>, <?php echo $row->city; ?></p>
                    <p class="distance_class">Distance - 30 Min</p>
					<?php if(isset($row->cost_for_two) ){?>
                    <p class="cost_class">Cost for two - <?php echo $row->cost_for_two; ?></p>
					<?php } ?>
                  </div>
                </div>
				</a>
			  <?php } }else{ 
			   foreach($results['featured'] as $row){
			  
			  ?>
				     <div class="index_product_slider" >
                  <img src="uploads/{{$row->images}} " class="index_product_slider_img">
                
                  <div class="index_product_slider_details">
                     <h4 style="font-weight: 600;"><?php echo $row->restaurant_name; ?></h4>
                    <p><?php echo $row->address; ?>, <?php echo $row->city; ?></p>
                    <p class="distance_class">Distance - 30 Min</p>
                   <?php if(isset($row->cost_for_two) ){?>
                    <p class="cost_class">Cost for two - <?php echo $row->cost_for_two; ?></p>
					<?php } ?>
                  </div>
                </div>
				  
			   <?php } } ?>
             <!--   <div class="index_product_slider">
                  <img src="uploads/merchant_item_cat_images/food3.jpg" class="index_product_slider_img">
                  <span class="index_slider_rating_span">5</span>
                  <div class="index_product_slider_details">
                    <h4>Dwarka Restaurant</h4>
                    <p>Dharampeth, Nagpur</p>
                    <p class="distance_class">Distance - 30 Min</p>
                    <p class="cost_class">Cost for two - 250</p>
                  </div>
                </div>
                <div class="index_product_slider">
                  <img src="uploads/merchant_item_cat_images/5.jpg" class="index_product_slider_img">
                  <span class="index_slider_rating_span">3.2</span>
                  <div class="index_product_slider_details">
                    <h4>Dwarka Restaurant</h4>
                    <p>Dharampeth, Nagpur</p>
                    <p class="distance_class">Distance - 30 Min</p>
                    <p class="cost_class">Cost for two - 250</p>
                  </div>
                </div>
                <div class="index_product_slider">
                  <img src="uploads/merchant_item_cat_images/samosa.jpg" class="index_product_slider_img">
                  <span class="index_slider_rating_span">3</span>
                  <div class="index_product_slider_details">
                    <h4>Dwarka Restaurant</h4>
                    <p>Dharampeth, Nagpur</p>
                    <p class="distance_class">Distance - 30 Min</p>
                    <p class="cost_class">Cost for two - 250</p>
                  </div>
                </div>
                <div class="index_product_slider">
                  <img src="uploads/merchant_item_cat_images/1.jpg" class="index_product_slider_img">
                  <span class="index_slider_rating_span">2.5</span>
                  <div class="index_product_slider_details">
                    <h4>Dwarka Restaurant</h4>
                    <p>Dharampeth, Nagpur</p>
                    <p class="distance_class">Distance - 30 Min</p>
                    <p class="cost_class">Cost for two - 250</p>
                  </div>
                </div>-->
              </div>
              <!-- <div class="pretext best_deals_single_slider">
                <a title="Retis lapen casen" href="#"> 
                  <div class="testi-slider">
                    <div>
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
						            @foreach($results['sell_items'] as $key=>$row)
						
						            @if($key == '0')
                          <div class="item active">
                            <div class="avatar">
                              <img src="uploads/merchant_item_cat_images /{{$row->image_name}}" alt="slide3">
                            </div>
                          </div>
						              @else
                          <div class="item">
                            <div class="avatar">
                              <img src="uploads/merchant_item_cat_images /{{$row->image_name}}" alt="slide3">
                            </div>
                          </div>
						              @endif
                         @endforeach
                        </div>
                        <ol class="carousel-indicators">
                          <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> 
                        <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a>
                      </div>
                    </div>
                  </div> 
                </a>
             
              </div> -->
              <!-- <a href="#" class="view_more_bnt">View All</a>  -->
            </div>
            
            <!--<div class="slider-items slider-width-col4 products-grid block-content">
              
			        @foreach($results['featured'] as $key=>$row)
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image index_restaurant_slider" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="uploads/{{$row->images}} "> </a>
                      <div class="sale-label new-top-left">sale</div>
                      <div class="box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href="#">Quick View</a> </li>
                          <li><a class="link-wishlist" href="#">Wishlist</a> </li>
                          <li><a class="link-compare" href="#">Compare</a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Retis lapen casen" href="{{url('restaurant_details')}}/{{$row->restaurant_slug}}">{{$row->restaurant_name}} </a> </div>
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:80%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-content">
                        <div class="item-price">
                         
                        </div>
                        <div class="action">
                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               @endforeach 
             
             
              
              
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Bestsell Slider --> 
  
      
  <!-- Brand Logo -->
  
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
			@foreach($results['merchant_logo'] as $logo)
            <div class="item"> 
              <a href="#" title="{{$logo->restaurant_name}}">
                <img src="uploads/logo/{{$logo->logo}}" alt="Image" style="height: 96px;width: 110px;"> 
              </a> 
            </div>
			@endforeach
            <!-- End Item --> 
            
            <!-- Item -->
          <!--  <div class="item"> 
              <a href="#">
                <img src="html/images/b-logo3.png" alt="Image"> 
              </a> 
            </div>-->
         
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Footer -->
@include('footer')

<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>

  <script>
$(function() {   
 $('.slide').slick({
     slidesToShow: 4,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2000,
  });
});
</script>