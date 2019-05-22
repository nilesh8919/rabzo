  <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <a href="{{url('home')}}" ><span>
                        <?php  $merchant_img = (new \App\Helpers\AppHelper)->get_merchant_image() ?>
                            <img alt="image" class="img-circle" src="uploads/{{$merchant_img->images}}" style="width:40px" />
                             </span></a>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$merchant_img->merchant->restaurant_name}}</strong>
                             </span> <span class="text-muted text-xs block">Merchant <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                <!--    <div class="logo-element">
                        IN+
                    </div>-->
                </li>
				 <li>
                    <a href="{{url('home')}}"><i class="fa fa-home"></i> <span class="nav-label">Dashboard</span></a>
                    
                </li>
			    <li> <a href="{{url('merchant_info')}}"><i class="fa fa-cutlery"></i> <span class="nav-label"></span>Merchant Info</a> </li>
                <li> <a href="#"><i class="fa fa-cog"></i> <span class="nav-label"></span>Settings</a> </li>
                 <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Order Status</a> </li>
                  <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Food Category</a> </li>
                   <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Size</a> </li>

             <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Add On Category</a> </li>
             <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Add On Item</a> </li>
                 <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Ingredients</a> </li>
                 <li> <a href="{{url('cooking_reference')}}"><i class="fa fa-edit"></i> <span class="nav-label"></span>Cooking Reference</a> </li>

                <li> <a href="{{ url('item_listing') }}"><i class="fa fa-edit"></i> <span class="nav-label"></span>Food Item</a> </li>
                <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Invoice</a> </li>
             <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Loyalty Points Settings</a> </li>
        <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Delivery Charges Rate</a> </li>
          <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Minimum Order Table</a> </li>
         <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Offers</a> </li>
           <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Gallery Settings</a> </li>
           <li> <a href="{{url('manage_voucher')}}"><i class="fa fa-edit"></i> <span class="nav-label"></span>Voucher</a> </li>

             <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Reports</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                  
                        <li><a href="">Sales Report</a></li>
                         <li><a href="">Sales Summery Report</a></li>
                          <li><a href="">Booking Summery Report</a></li>
                     
                    </ul>
                </li>

        <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Customer Reviews</a> </li>
         <li> <a href="#"><i class="fa fa-edit"></i> <span class="nav-label"></span>Sociel Settings</a> </li>
            </ul>

        </div>
    </nav>