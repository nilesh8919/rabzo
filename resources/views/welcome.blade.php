@include('styles')
@include('header')
  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
  <div id="" class="">
    <div class="">
      <div class="">
        <div class="col-md-12" style="padding: 0px;">
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
          
          .clear{clear: both;}
        </style>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_search_input_button">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 left_blank_div"></div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 search_main_div_banner">
		        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 first_location_div" style="padding: 0px;">
              <input type="text" id="location" placeholder="Location" class="form-control search_input_banner1" name="" style=""><i class="fa fa-crosshairs find_location_icon" aria-hidden="true"></i>
              <div class="clear"></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 center_restaurant_div" style="padding: 0px;">
              <input type="text" style="" id="categories" placeholder="Restaurent /Dishes " class="form-control search_input_banner2" name="" style="border-radius: 0;"><i class="fa fa-search index_search_icon" aria-hidden="true"></i>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 right_side_search_btn" style="padding: 0px;">
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
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <center>
        <img src="public/uploadimages/<?php echo $results['first_step_image'][0]; ?>" class="process_img" />
        <p style="width: 40px;height: 40px;border-radius: 50%;background: #3a126c;color: #fff;font-size: 26px;">1</p>
        <p style="font-size: 18px;font-weight: 600;"><?php echo $results['first_step_title'][0]; ?></p>
      </center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <center>
        <img src="public/uploadimages/<?php echo $results['second_step_image'][0]; ?>" class="process_img">
        <p style="width: 40px;height: 40px;border-radius: 50%;background: #3a126c;color: #fff;font-size: 26px;">2</p>
        <p style="font-size: 18px;font-weight: 600;"><?php echo $results['second_step_title'][0]; ?></p>
      </center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <center>
        <img src="public/uploadimages/<?php echo $results['third_step_image'][0]; ?>" class="process_img">
        <p style="width: 40px;height: 40px;border-radius: 50%;background: #3a126c;color: #fff;font-size: 26px;">3</p>
        <p style="font-size: 18px;font-weight: 600;"><?php echo $results['second_step_title'][0]; ?></p>
      </center>
    </div>
    <div class="clear"></div>
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
    /*.slick-next:before, .slick-prev:before{color: #000!important;font-size: 30px!important;}
    .slick-initialized .slick-slide{}
    .slick-next{right: 10px!important;}
    .slick-prev{left: 0!important;z-index: 9;}
    
    .index_product_slider_img{width: 100%;height: 200px;}
    .index_product_slider_details{}{}
    .distance_class{width: 140px; float: left;}
    .cost_class{width: 140px; float: left;}
    .index_product_slider{border: 1px solid #ccc;padding: 12px; height: 340px;}
    .index_slider_rating_span{position: relative;float: right;right: 12px;top: -19px;padding: 10px;width: 40px;height: 40px;background: orange;font-size: 16px;font-weight: 600;text-align: center;box-shadow: 0px 0px 8px;}*/
    .portfolio_slider {margin: 20px 11px 0px 11px;max-width: 1200px;flex: 1 1 0;}
   
    .index_bestseller_heading{width: 80%;float: left;}
    .index_viewall_btn{width: 233px;font-size: 16px;display: -webkit-box;text-align: right;position: relative;padding-left: 156px;right: 0;top: 1px;margin: 0px;}
    .restro_slider_div{width: 290px;margin: 10px;}
    .restro_slider_div img{width: 290px;height: 195px;}
    .index_product_slider_details{padding: 0px 10px;border: 1px solid #ccc;height: 130px;}
    .slick-prev {left: -10px;position: absolute;z-index: 99;}
    .slick-next {right: -19px;}
    .slick-next:before, .slick-prev:before{color: #000!important;}
  </style>
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css"> -->
  <section class="bestsell-pro" style="clear: both;">
    <div class="container bestseller_container">
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="home-block-inner">
              <div class="block-title">
                <h2 class="index_bestseller_heading">Best Sellers </h2>
                <a href="{{url('restaurant')}}" style="color: #fff;"><h3 class="index_viewall_btn">View All</h3></a>
              </div>

              <div class="gallery gallery-responsive portfolio_slider">
                <?php if(count($results['review']) > 0){
                  foreach($results['review'] as $row){
                ?>
                <a href="{{url('restaurant_details')}}/{{$row->restaurant_name}}" class="slider_a_tag" style="color: #000;">
                  <div class="inner restro_slider_div">
                    <img src="uploads/{{$row->images}}" class="index_product_slider_img" >
                    <?php if(isset($row->avg_rating) ){?>
                    <span class="index_slider_rating_span"><?php echo $row->avg_rating; ?></span>
                    <?php } ?>
                    <div class="index_product_slider_details">
                      <h4 class="slick_slider_restro_tittle" style="font-weight: 600;"><?php echo $row->restaurant_name; ?></h4>
                      <p class="slick_slider_restro_address"><?php echo $row->address; ?>, <?php echo $row->city; ?></p>
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
                <a href="{{url('restaurant_details')}}/{{$row->restaurant_name}}" class="slider_a_tag" style="color: #000;">
                  <div class="inner restro_slider_div">
                    <img src="uploads/{{$row->images}}" class="index_product_slider_img" >
                    <?php if(isset($row->avg_rating) ){?>
                    <span class="index_slider_rating_span"><?php echo $row->avg_rating; ?></span>
                    <?php } ?>
                    <div class="index_product_slider_details">
                      <h4 class="slick_slider_restro_tittle" style="font-weight: 600;"><?php echo $row->restaurant_name; ?></h4>
                      <p class="slick_slider_restro_address"><?php echo $row->address; ?>, <?php echo $row->city; ?></p>
                      <p class="distance_class">Distance - 30 Min</p>
                      <?php if(isset($row->cost_for_two) ){?>
                      <p class="cost_class">Cost for two - <?php echo $row->cost_for_two; ?></p>
                      <?php } ?>
                    </div>
                  </div>
                </a>
                <?php } } ?>
              </div>
              


              <!-- <div class="slide">
			  <?php if(count($results['review']) > 0){
				  foreach($results['review'] as $row){
				  ?>
				  <a href="{{url('restaurant_details')}}/{{$row->restaurant_name}}" class="slider_a_tag" style="color: #000;">
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
        <a href="{{url('restaurant_details')}}/{{$row->restaurant_name}}" style="color: #000;">
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
				  </a>
			   <?php } } ?>
             
              </div> -->
              
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
  <!-- <div class="gallery gallery-responsive portfolio_slider">
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768" style="width: 200px;">
                </div>
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768" style="width: 200px;">
                </div>
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768" style="width: 200px;">
                </div>
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768" style="width: 200px;">
                </div>
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768" style="width: 200px;">
                </div>
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768"style="width: 200px;">
                </div>
                <div class="inner">
                  <img src="https://unsplash.it/350/250?image=768" style="width: 200px;">
                </div>
              </div> -->
      
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
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

<!-- <script>
  $(function() {   
   $('.slide').slick({
       slidesToShow: 4,
       slidesToScroll: 1,
       // autoplay: true,
       // autoplaySpeed: 2000,
    });
  });
</script> -->
<script type="text/javascript">
    $('.gallery-responsive').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

  </script>