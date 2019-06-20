  <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header" style="padding:10px !important;">
                    <div class="dropdown profile-element"> <a href="{{url('home')}}" ><span style="margin-left:20px">
                           <!-- <img alt="image" class="img-circle" src="public/images/rabzo_logo.png" style="width:120px" />-->
                             </span></a>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="margin-left:20px">Admin</strong>
                             </span> 
							<!-- <span class="text-muted text-xs block">Admin <b class="caret"></b></span> -->
							 
							 </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{ url('profiles') }}">Profile</a></li>
                          <!--   <li><a href="{{ url('change_password') }}">Contacts</a></li>
                           <li><a href="mailbox.html">Mailbox</a></li>-->
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
				<?php  $modules3 = (new \App\Helpers\AppHelper)->get_modules() ;

                ?>
				
                @foreach($modules3 as $m)
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">{{$m['modules_name']}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
					 @foreach($m['sub_modules'] as $sm)
                        <li><a href="{{url($sm['sub_module_routes'])}}">{{$sm['sub_module_name']}}</a></li>
                      @endforeach
                    </ul>
                </li>
             @endforeach
             
                
              
               
              
              
              
              
                
               
            </ul>

        </div>
    </nav>