@include('styles')
@include('header')
  <!-- Slider -->
  <div id="thm-slideshow" class="thm-slideshow">
    <div class="">
      <div class="row">
        <div class="col-md-12">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
@foreach($results['banner'] as $row)
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb=''public/uploadimages/{{$row->bannername}}'>
                  <img src='public/uploadimages/{{$row->bannername}}' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  
                </li>
@endforeach
               <!-- <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='rabzo_web/images/slide-img2.jpg'>
                  <img src='rabzo_web/images/slide-img2.jpg' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  
                </li>-->
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-12 col-md-12" style="position: absolute;z-index: 999;top: 316px;">
          <div class="col-lg-3 col-md-3" style="margin-left: 27px;"></div>
          <div class="col-lg-8 col-md-8">
		  
            <input type="text" style="width:300px" id="location" placeholder="Search Location" class="form-control search_input_banner" name="" style="">
            <input type="text" style="width:300px" id="categories" placeholder="Search Restaurent /Dishes " class="form-control search_input_banner" name="" style="">
            <input type="submit" onClick="get_restaurant()" class="btn btn-checkout search_find_button" name="" style="">
          </div>
        </div>
      </div>
    </div>
  </div>
  
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

  <div class="col-lg-12 col-md-12" style="background: #fbeb20;">
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
    .bestsell-pro .block-content{padding: 14px 10px;}
    .best_deals_single_slider{margin: 0px;}
    .testi-slider{padding: 0px;margin-bottom: 0px;border:none;}
    .avatar img{width: 100%;margin-bottom: 0px;border-radius: 0px;}
    .avatar{margin-bottom: 0px;}
    .testi-slider .carousel-indicators{bottom: -11px;}
  </style>
  <section class="bestsell-pro">
    <div class="container">
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div id="bestsell-slider" class="product-flexslider hidden-buttons">
            <div class="home-block-inner">
              <div class="block-title">
                <h2>Best Sellers </h2>
              </div>
              <div class="pretext best_deals_single_slider">
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
              <!-- <div class="offer-text">Save upto 25% Today!</div> -->
              </div>
              <!-- <a href="#" class="view_more_bnt">View All</a>  -->
            </div>
            <div class="slider-items slider-width-col4 products-grid block-content">
			@foreach($results['review'] as $key=>$row)
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="uploads/{{$row->images}} "> </a>
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
                         <!-- <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>-->
                        </div>
                        <div class="action">
                       <!--   <button class="button btn-cart" type="button" title="" data-original-title="Atailsdd to Cart"><span>Add to Cart</span> </button>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               @endforeach
             
             
              <!-- End Item --> 
              
            </div>
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
			@foreach($resuults['merchant_logo'] as $logo)
            <div class="item"> 
              <a href="#">
                <img src="uploads/{{$logo->logo}}" alt="Image"> 
              </a> 
            </div>
			@endforeach
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo3.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo2.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo4.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo5.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo6.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo2.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> 
              <a href="#">
                <img src="rabzo_web/images/b-logo4.png" alt="Image"> 
              </a> 
            </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Footer -->
@include('footer')
