<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rabzo | Merchant</title>
 @include('admin.layouts.styles')
  
 <style type="text/css">
        input[type="file"] {
  display: block;
}
.imageThumb12 {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip12 {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
input[type=radio]
{
  margin-right: 12px;
}

    </style>
</head>

<body>
    <div id="wrapper">
	@include('admin.layouts.leftpanel')


        <div id="page-wrapper" class="gray-bg">
      
	  @include('admin.layouts.header')
      <div class="wrapper wrapper-content animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active" id="li1"><a data-toggle="tab" href="#tab-1" >Restaurant Information</a></li>
                            <li class="" id="li2"><a data-toggle="tab" href="#tab-2"  >Login Information</a></li>
                     <!--       <li class="" id="li3"><a data-toggle="tab" href="#tab-3">Marchant Type</a></li>-->
                            <li class="" id="li4"><a data-toggle="tab" href="#tab-4">Featured</a></li>
                            <li class="" id="li5"><a data-toggle="tab" href="#tab-5">Merchant Open/Close</a></li>
                            <li class="" id="li6"><a data-toggle="tab" href="#tab-6">Google Map</a></li>
                            <li class="" id="li7"><a data-toggle="tab" href="#tab-7">Photos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12" style="padding: 0px;">
									<form id="tab1" >
									<input type="hidden" value="{{$merchant_data->id}}" id="hidden_id" name="hidden_id" />
                                        <div class="col-lg-6 col-md-6" style="">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Restaurant Slug</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="restaurant_slug"  value="{{$merchant_data->restaurant_slug}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Restaurant Name</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="restaurant_name" id="restaurant_name" value="{{$merchant_data->restaurant_name}}" required > 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Restaurant Phone</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" maxlength="11" class="form-control" name="restaurant_phone" onkeypress="return isNumber(event)" value="{{$merchant_data->restaurant_phone}}" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Owner Name</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="owner_name" value="{{$merchant_data->owner_name}}" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Contact Phone</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="contact_phone" value="{{$merchant_data->contact_phone}}" required onkeypress="return isNumber(event)"  /> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Contact Mail</label>
                                                    <div class="col-lg-8">
                                                        <input type="email" class="form-control" name="contact_email" value="{{$merchant_data->contact_email}}" required /> 
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-lg-4 control-label">GST Number </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" maxlength="15" class="form-control" name="merchant_gst_number" value="{{$merchant_data->merchant_gst_number}}" required /> 
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-lg-4 control-label">Adhar Number</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" maxlength="16" class="form-control" name="merchant_aadhar_number" value="{{$merchant_data->merchant_aadhar_number}}" onkeypress="return isNumber(event)" required  /> 
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-lg-4 control-label">PAN Number</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" maxlength="10" class="form-control" name="merchant_pan_number" value="{{$merchant_data->merchant_pan_number}}" required /> 
                                                    </div>
                                                </div>
													<div class="form-group">
                                                    <label class="col-lg-4 control-label">FSSI Number</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="merchant_fssi_number" value="{{$merchant_data->merchant_fssi_number}}" required /> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Country</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="country_code" id="country_code" > 
														 <option value="">-Select-</option>
														@foreach($countries_data as $cd)
                                                            <option <?php if(isset($merchant_data->country_code)){ if( $merchant_data->country_code == $cd->shortcode ){ echo "selected=selected"; }}else{if($cd->shortcode == 'IN'){ echo "selected=selected"; } } ?> value="{{$cd->shortcode}}">{{$cd->country_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6" style="">
                                            <div class="form-horizontal">
											 
												
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Address</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="address" value="{{$merchant_data->address}}" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">City</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="city" id="city" value="{{$merchant_data->city}}" required />
                                                    </div>
                                                </div>
												 <div class="form-group">
                                                    <label class="col-lg-4 control-label">State</label>
                                                    <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="state" id="state" value="{{$merchant_data->state}}" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Post Code / Zip Code</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" maxlength="6" class="form-control" name="post_code" value="{{$merchant_data->post_code}}" required  onkeypress="return isNumber(event)" /> 
                                                    </div>
                                                </div>
												  <div class="form-group">
                                                    <label class="col-lg-4 control-label">Cost for two</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="cost_for_two" value="{{$merchant_data->cost_for_two}}"> 
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <label class="col-lg-4 control-label">Categories</label>
                                                    <div class="col-lg-8">
                                                        <select data-placeholder="Choose a Category..." class="chosen-select" multiple style="width:350px;" tabindex="4" name="categories" id="categories"  required="true" >
                                                            <option value="">Select</option>
															@foreach($categories_data as $cd)
                                                               <option  <?php if(in_array($cd->id,$merchant_categories_data)){ echo "selected=selected"; } ?> value="{{$cd->id}}">{{$cd->category_name}}</option>
															 @endforeach
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Cuisine</label>
                                                    <div class="col-lg-8">
                                                        <select data-placeholder="Choose a Cuisine..." class="chosen-select" multiple style="width:350px;" tabindex="4" name="cuisine" id="cuisine" required="true">
                                                            <option value="">Select</option>
															@foreach($cuisine_data as $cd)
                                                               <option <?php if(in_array($cd->id,$merchant_cuisine_data)){ echo "selected=selected"; } ?> value="{{$cd->id}}">{{$cd->cuisine_name}}</option>
															 @endforeach
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                               <!-- <div class="form-group">
                                                    <label class="col-lg-4 control-label">Services</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="service" id="service">
														@foreach($services_data as $sd)
                                                             <option <?php if($sd->id==$merchant_data->service){ echo "selected=selected"; } ?> value="{{$sd->id}}">{{$sd->services_name}}</option>
                                                             @endforeach
                                                        </select> 
                                                    </div>
                                                </div>-->
                                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Status</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="status" id="status">
                                                            <option  <?php if($merchant_data->status == 'Pending for approval'){ echo "selected=selected"; } ?> value="Pending for approval">Pending for approval</option>
                                                            <option <?php if($merchant_data->status == 'Active'){ echo "selected=selected"; } ?> value="Active">Active</option>
                                                            <option <?php if($merchant_data->status == 'Suspended'){ echo "selected=selected"; } ?> value="Suspended">Suspended</option>
                                                            <option <?php if($merchant_data->status == 'Blocked'){ echo "selected=selected"; } ?> value="Blocked">Blocked</option>
                                                            <option <?php if($merchant_data->status == 'Expired'){ echo "selected=selected"; } ?> value="Expired" >Expired</option>
                                                        </select> 
                                                    </div>
                                                </div>
												 <div class="form-group">
                                                    <label class="col-lg-4 control-label">Order Limit Per Order</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="order_limit" value="{{$merchant_data->order_limit}}"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										</form>
										
                                    </div>
                                </div>
                            </div>
                            <!--tab2 start-->
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
									<form id="tab2" >
                                        <div class="col-lg-9 col-md-9 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Username</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="username" value="{{$merchant_data->username}}" required /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Password</label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" name="password" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Next</button>
                                                </div>
                                            </div>
                                        </div>
										</form>
                                    </div>
                                </div>
                            </div>
                            <!--tab3-->
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
									<form id="tab3" >
                                        <div class="col-lg-9 col-md-9 form-horizontal">
										
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Membership Type</label>
                                                <div class="col-lg-8">
                                                    <select class="form-control" name="">
                                                        <option >Membership</option>
                                                        <option>Commission</option>
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Package Name</label>
                                                <div class="col-lg-8">
                                                    <select class="form-control" name="package_id" id="package_id" >
													  <option value="">-Select-</option>
														@foreach($package_data as $pd)
                                                        <option value="{{$pd->id}}">{{$pd->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Package Price</label>
                                                <div class="col-lg-8">
                                                    <p style="position: relative;top: 7px;"><i class="fa fa-inr"></i>
													<span id="package_price_lbl">0.00</span></p>
													<input type="hidden" name="package_price" id="package_price" />
                                                </div>
                                            </div>
                                            <div class="form-group" id="data_1">
                                                <label class="col-lg-4 control-label">Membership Expiry on</label>
                                                <div class="col-lg-8">
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														
														<input type="text" class="form-control" value="" name="membership_expired" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Next</button>
                                                </div>
                                            </div>
											
                                        </div>
										</form>
                                    </div>
                                </div>
                            </div>
                            <!--tab4-->
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
									
										<form id="tab4" >
                                        <div class="col-lg-9 col-md-9 form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Is Featured?</label>
                                                <div class="col-lg-8">
                                                    <input type="checkbox" class="form-control" name="is_featured" value="1" <?php if($merchant_data->is_featured == 1){ echo "checked=checked"; } ?>>
                                                </div>
                                                <p style="margin-top:10px;text-align: center;">Check this if you want this merchant featured on homepage</p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Next</button>
                                                </div>
                                            </div>
                                        </div>
											</form >
                                    </div>
                                </div>
                            </div>
                            <!--tab5-->
                            <div id="tab-5" class="tab-pane">
                                <div class="panel-body">
									<form id="tab5" >
                                    <div class="col-lg-12 col-md-12">
                                        <h4>Store days(s) Open:</h4>
                                      
									  
									  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                   
                     <tbody>
                          
                                 <tr>
                                  <td><input type="checkbox" value="Monday" id="chk1" class="day" name="day" <?php if($merchant_open_close_data[0]->day == 'Monday'){ echo "checked=checked"; } ?> /></td>
                                  <td> Monday</td>
                                  <td> <input type="text" id="from_time1" name="from_time" value="{{$merchant_open_close_data[0]->start_time}}" placeholder="Start Time"/> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time1" name="to_time" value="{{$merchant_open_close_data[0]->end_time}}" placeholder="end Time" /></td>
                                
                                  <td> 
								  <input type="radio"  value="open" name="is_open_close1"  class="is_open_close" <?php if($merchant_open_close_data[0]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" name="is_open_close1"  class="is_open_close" <?php if($merchant_open_close_data[0]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  </td>
                                  <td> <input type="text" id="commnet1"  name="comment" placeholder="comment" value="{{$merchant_open_close_data[0]->comment}}"  /></td>
                                     </tr> 
                               <tr>
                                  <td><input type="checkbox" value="Tuesday" id="chk2"  class="day" name="day" <?php if($merchant_open_close_data[1]->day == 'Tuesday'){ echo "checked=checked"; } ?> /></td>
                                  <td> Tuesday</td>
                                  <td> <input type="text" id="from_time2" name="from_time" value="{{$merchant_open_close_data[1]->start_time}}" /> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time2" name="to_time" value="{{$merchant_open_close_data[1]->end_time}}"  /></td>
                                  <td> 
								  <input type="radio"  value="open" name="is_open_close2" class="is_open_close" <?php if($merchant_open_close_data[1]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" name="is_open_close2" class="is_open_close" <?php if($merchant_open_close_data[1]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  </td>
                                  <td> <input type="text" id="commnet2"  name="comment" value="{{$merchant_open_close_data[1]->comment}}" /></td>
                                     </tr> 
  <tr>
                                  <td><input type="checkbox" value="Wednesday" id="chk3" class="day"  name="day" <?php if($merchant_open_close_data[2]->day == 'Wednesday'){ echo "checked=checked"; } ?> /></td>
                                  <td> Wednesday</td>
                                  <td> <input type="text" id="from_time3" name="from_time" value="{{$merchant_open_close_data[2]->start_time}}" /> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time3" name="to_time"  value="{{$merchant_open_close_data[2]->end_time}}" /></td>
                                  <td> 
								  <input type="radio"  value="open" name="is_open_close3" class="is_open_close" <?php if($merchant_open_close_data[2]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" name="is_open_close3" class="is_open_close" <?php if($merchant_open_close_data[2]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  </td>
                                  <td> <input type="text" id="commnet3"  name="comment" value="{{$merchant_open_close_data[2]->comment}}" /></td>
                                     </tr> 
  <tr>
                                  <td><input type="checkbox" value="Thursday" id="chk4" class="day" name="day" <?php if($merchant_open_close_data[3]->day == 'Thursday'){ echo "checked=checked"; } ?> /></td>
                                  <td> Thursday</td>
                                  <td> <input type="text" id="from_time4" name="from_time" value="{{$merchant_open_close_data[3]->start_time}}" /> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time4" name="to_time" value="{{$merchant_open_close_data[3]->end_time}}" /></td>
                                  <td> 
								  <input type="radio"  value="open" name="is_open_close4" class="is_open_close" <?php if($merchant_open_close_data[3]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" name="is_open_close4" class="is_open_close" <?php if($merchant_open_close_data[3]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  </td>
                                  <td> <input type="text" id="commnet4" name="comment" value="{{$merchant_open_close_data[3]->comment}}" /></td>
                                     </tr> 			
 <tr>
                                  <td><input type="checkbox" value="Friday" id="chk5" class="day" name="day" <?php if($merchant_open_close_data[4]->day == 'Friday'){ echo "checked=checked"; } ?>  /></td>
                                  <td> Friday</td>
                                  <td> <input type="text" id="from_time5" name="from_time" value="{{$merchant_open_close_data[4]->start_time}}" /> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time5" name="to_time" value="{{$merchant_open_close_data[4]->end_time}}" /></td>
                                  <td> 
								  <input type="radio"  value="open" name="is_open_close5" class="is_open_close" <?php if($merchant_open_close_data[4]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" name="is_open_close5"  class="is_open_close" class="is_open_close"<?php if($merchant_open_close_data[4]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  </td>
                                  <td> <input type="text" id="commnet5"  name="comment" value="{{$merchant_open_close_data[4]->comment}}" /></td>
                                     </tr> 			
 <tr>
                                  <td><input type="checkbox" value="Saturday" id="chk6" class="day" name="day" <?php if($merchant_open_close_data[5]->day == 'Saturday'){ echo "checked=checked"; } ?>  /></td>
                                  <td> Saturday</td>
                                  <td> <input type="text" id="from_time6" name="from_time"  value="{{$merchant_open_close_data[5]->start_time}}" /> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time6" name="to_time" value="{{$merchant_open_close_data[5]->end_time}}" /></td>
                                  <td> 
								  <input type="radio"  value="open" name="is_open_close6" class="is_open_close" <?php if($merchant_open_close_data[5]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" name="is_open_close6" class="is_open_close" <?php if($merchant_open_close_data[5]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  </td>
                                  <td> <input type="text" id="commnet6" name="comment" value="{{$merchant_open_close_data[5]->comment}}" /></td>
                                     </tr> 												 
               <tr>
                                  <td><input type="checkbox" value="Sunday" id="chk7" class="day" name="day" <?php if($merchant_open_close_data[6]->day == 'Sunday'){ echo "checked=checked"; } ?> /></td>
                                  <td> Sunday</td>
                                  <td> <input type="text" id="from_time7" name="from_time" value="{{$merchant_open_close_data[6]->start_time}}" /> </td>
                                  <td>TO</td>
                                  <td> <input type="text" id="to_time7" name="to_time" value="{{$merchant_open_close_data[6]->end_time}}" /></td>
                                  <td> 
								  <input type="radio"  value="open" class="is_open_close" name="is_open_close7" <?php if($merchant_open_close_data[6]->is_open_close == 'open'){ echo "checked=checked"; }else{ echo "checked"; } ?>   />open</br />
									<input type="radio"  value="close" class="is_open_close" name="is_open_close7"  <?php if($merchant_open_close_data[6]->is_open_close == 'close'){ echo "checked=checked"; }  ?> />close </br />
                                   
								  
								  <td> <input type="text" id="commnet7"  name="comment"  value="{{$merchant_open_close_data[6]->comment}}" /></td>
                                     </tr> 			
                            </tbody>
                   
                    </table>
                        </div>
									   <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Next</button>
                                                </div>
                                            </div>  
									  
                                    </div>
										</form>
                                </div>
                            </div>
                            <!--tab6 start-->
                            <div id="tab-6" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
										<form id="tab6" >
                                        <div class="col-lg-9 col-md-9 form-horizontal">

                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Latitude</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="latitude" value="{{$merchant_data->latitude}}" required /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Longitude</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="lontitude" value="{{$merchant_data->lontitude}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Next</button>
                                                </div>
                                            </div>
                                        </div>
											</form>
                                    </div>
                                </div>
                            </div>
							  <div id="tab-7" class="tab-pane">
                                <div class="panel-body">
                                    <div class="col-lg-12 col-md-12">
									<form id="tab7" >
                                        <div class="col-lg-9 col-md-9 form-horizontal">
										  <div class="form-group">
                                                <label class="col-lg-4 control-label">Logo</label>
                                                <div class="col-lg-8">
                                                    <input type="file" name="logo"  id="logo"  class="form-control"> 
													<input type="checkbox" value="yes" name="is_partners"  <?php if($merchant_data->is_partners == 'yes'){ echo "checked=checked"; } ?>  />Enable for our partners
													<div id="logoPreview"></div>
												<?php if(isset($merchant_data->logo)){ ?>
													<span id='img_logo' class="pip12" >
								
									<img class="imageThumb12" src="uploads/logo/{{$merchant_data->logo}}" title=""/>
									</span>
												<?php } ?>
                                                </div>
                                            </div><br />
											
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Images</label>
                                                <div class="col-lg-8">
                                                    <input type="file" name="images[]"  id="file1" multiple class="form-control"> 
													<div id="imagePreview"></div>
													@foreach($merchant_image_data as $row)
													<span id='img{{$row->id}}' class="pip" >
									<!--<input type='checkbox'  value='' name='is_checked' class='chkclass'  />-->
									<img class="imageThumb" src="uploads/{{$row->images}}" title=""/><br/><span onClick='removeAddedImage({{$row->id}})' class="remove">Remove image</span>
									</span>
									@endforeach
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
												@if($merchant_data->id > 0 && isset($merchant_data->id))
													 <button id="btnupdate" class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Update</button>
												@else
                                                    <button id="btnsave" class="btn btn-sm btn-white" type="submit" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;">Save</button>
                                                   @endif
												   <button  id="btnloading" class="btn btn-sm btn-white" style="background: #08a008bd;color: #fff;font-size: 16px;padding: 8px 27px;float: right;display:none">
  <i class="fa fa-refresh fa-spin"></i>Loading
</button>
                                                </div>
                                            </div>
                                        </div>
										</form>
                                    </div>
                                </div>
                            </div>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
	   
	   @include('admin.layouts.footer')
	   
	   
        </div>
         <script>
		  $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
	
        $(document).ready(function(){
			 $('.chosen-select').chosen({width: "100%"});
			
			  var inputLocalFont = document.getElementById("file1");
inputLocalFont.addEventListener("change",previewImages,false);

function previewImages(){
    var fileList = this.files;
    
    var anyWindow = window.URL || window.webkitURL;

        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
		  console.log(fileList[i].name)
		  var html1 = "<span id='span_"+i+"' class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + objectUrl + "\" title=\"" + fileList[i].name + "\"/>" +
            "<br/><span onClick='removePreviewImage("+i+")'   class=\"remove\">Remove image</span>" +
            "</span>";
          $('#imagePreview').append(html1);
          window.URL.revokeObjectURL(fileList[i]);
        }
    
    
}

 var inputLocalFont1 = document.getElementById("logo");
inputLocalFont1.addEventListener("change",previewImages2,false);

function previewImages2(){
    var fileList2 = this.files;
    
    var anyWindow = window.URL || window.webkitURL;

        for(var i = 0; i < fileList2.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList2[i]);
		  console.log(fileList2[i].name)
		  var html2 = "<span id='span_"+i+"' class=\"pip12\">" +
            "<img class=\"imageThumb12\" src=\"" + objectUrl + "\" title=\"" + fileList2[i].name + "\"/>" +
            "<br/><span onClick='removePreviewImage("+i+")'   class=\"remove\">Remove image</span>" +
            "</span>";
          $('#logoPreview').append(html2);
          window.URL.revokeObjectURL(fileList2[i]);
        }
    
    
}
			
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
 function removePreviewImage($ind){
			
			$("#span_"+$ind).remove();
		}	
    </script>
	


<script>
$("#package_id").change(function(){
	
	 $.ajax({
                   url: '{{url("get_price_by_package_id")}}',
                   data:{'package_id':$(this).val()},
                   async:false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: false,

            success:function(response){
				//alert(response.price)
               $("#package_price").val(response.price)
               $("#package_price_lbl").text(response.price)
             
              
              
    
            },
         });
}) 

$(document).ready(function(){
	
	$.datepicker.setDefaults({
          dateFormat: 'yy-mm-dd',
 });
   $('#expiration').datepicker({
   changeMonth: true,
   changeYear: true,
   yearRange: '2000:2040' ,
     
   });
	
	$("#voucher_type").val('Fixed Amount');
	
	
	 $('.summernote').summernote();
	 
	 var fd;
	   $("#tab1").submit(function(e){
			   e.preventDefault();
			   $("#li1").removeClass("active");
			   $("#li2").addClass("active");
			   $("#tab-1").removeClass("active");
			   $("#tab-2").addClass("tab-pane active");
			  
		   })
		   
		   $("#tab2").submit(function(e){
			   e.preventDefault();
			  /* $("#li2").removeClass("active");
			   $("#li3").addClass("active");
			   $("#tab-2").removeClass("active");
			   $("#tab-3").addClass("tab-pane active");*/
			   
			     $("#li2").removeClass("active");
			   $("#li4").addClass("active");
			   $("#tab-2").removeClass("active");
			   $("#tab-4").addClass("tab-pane active");
			  
		   })
		   $("#tab3").submit(function(e){
			   e.preventDefault();
			   $("#li3").removeClass("active");
			   $("#li4").addClass("active");
			   $("#tab-3").removeClass("active");
			   $("#tab-4").addClass("tab-pane active");
			  
		   })
		   $("#tab4").submit(function(e){
			   e.preventDefault();
			   $("#li4").removeClass("active");
			   $("#li5").addClass("active");
			   $("#tab-4").removeClass("active");
			   $("#tab-5").addClass("tab-pane active");
			  
		   })
		   $("#tab5").submit(function(e){
			   e.preventDefault();
			   $("#li5").removeClass("active");
			   $("#li6").addClass("active");
			   $("#tab-5").removeClass("active");
			   $("#tab-6").addClass("tab-pane active");
			  
		   })
		   $("#tab6").submit(function(e){
			   e.preventDefault();
			   $("#li6").removeClass("active");
			   $("#li7").addClass("active");
			   $("#tab-6").removeClass("active");
			   $("#tab-7").addClass("tab-pane active");
			  
		   })
		   $("#tab7").submit(function(e){
			   
			   if($("input[name=hidden_id]").val() > 0)
			   {
				    $("#btnsave").hide();
			   }else{
				   $("#btnupdate").hide();
			   }
			   e.preventDefault();
			   
			   $("#btnloading").show();
			 
			   var form=$("#tab7")[0];
              fd =new FormData(form);
			  fd.append('id', $("input[name=hidden_id]").val());
			  fd.append('restaurant_slug', $("input[name=restaurant_slug]").val());
			  fd.append('restaurant_name', $("input[name=restaurant_name]").val());
			  fd.append('owner_name', $("input[name=owner_name]").val());
			  fd.append('restaurant_phone', $("input[name=restaurant_phone]").val());
			  fd.append('contact_phone', $("input[name=contact_phone]").val());
			  fd.append('contact_email', $("input[name=contact_email]").val());
			  fd.append('gst_number', $("input[name=gst_number]").val());
			  fd.append('adhar_number', $("input[name=adhar_number]").val());
			  fd.append('pan_number', $("input[name=pan_number]").val());
			  fd.append('fssi_number', $("input[name=fssi_number]").val());
			  fd.append('country_code', $("#country_code").val());
			  fd.append('address', $("input[name=address]").val());
			  fd.append('city', $("input[name=city]").val());
			  fd.append('state', $("input[name=state]").val());
			  fd.append('post_code', $("input[name=post_code]").val());
			  fd.append('cuisine', $("#cuisine").val());
			  fd.append('service', $("#service").val());
			  fd.append('status', $("#status").val());
			  fd.append('package_id', $("#package_id").val());
			  fd.append('package_price', $("input[name=package_price]").val());
			  fd.append('is_featured', $("input[name=is_featured]").val());
			  fd.append('latitude', $("input[name=latitude]").val());
			  fd.append('lontitude', $("input[name=lontitude]").val());
			  fd.append('membership_expired', $("input[name=membership_expired]").val());
			  fd.append('username', $("input[name=username]").val());
			  fd.append('password', $("input[name=password]").val());
			  if($("input[name='is_partners']").prop('checked') === true)
			  {
			    fd.append('is_partners', 'yes');
			  }else{
				   fd.append('is_partners','no');
			  }
			  fd.append('merchant_pan_number', $("input[name=merchant_pan_number]").val());
			  fd.append('merchant_aadhar_number', $("input[name=merchant_aadhar_number]").val());
			  fd.append('merchant_fssi_number', $("input[name=merchant_fssi_number]").val());
			  fd.append('merchant_gst_number', $("input[name=merchant_gst_number]").val());
			  
						var data1 = new Array();
			$("input[name='payment_type']:checked").each(function(i) {
				data1.push($(this).val());
			});  
			 fd.append('payment_type',data1);
			 //cuisine
			/*	var data2 = new Array();
			$("input[name='cuisine']").each(function(i) {
				data2.push($(this).val());
			});  
			console.log(data2)
			  fd.append('cuisine',data2);*/
			  
			  var day = new Array();
			  $(".day:checked").each(function(i) {
				day.push($(this).val());
			});  
			console.log(day);
			 fd.append('day',day);
			 
			 var from_time = new Array();
			  $("input[name='from_time']").each(function(i) {
				from_time.push($(this).val());
			});  
			console.log(from_time);
			  fd.append('start_time',from_time);
			  
			  
			   var to_time = new Array();
			  $("input[name='to_time']").each(function(i) {
				to_time.push($(this).val());
			});  
			
			  fd.append('end_time',to_time);
			  
			 var comment = new Array();
			  $("input[name='comment']").each(function(i) {
				comment.push($(this).val());
			});  
			  fd.append('comment',comment);
			  
			   var is_open_close = new Array();
			  $(".is_open_close:checked").each(function(i) {
				is_open_close.push($(this).val());
			});  
			  fd.append('is_open_close',is_open_close);
			  
				   $.ajax({
					   url: '{{url("store_merchant")}}',
					   data:fd,
					   async:false,
						type: 'POST',
						processData: false,
						contentType: false,

				success:function(response){
				   if(response.flag== true)
							   {
	 
								window.location ='{{url("store_merchant_success")}}';
							   }else 
							   {
								
								 alert("Unable to Add");
							   }
				},
				 });
			  
		   })
		   
	 
  $("#upload_form").submit(function(e){

     e.preventDefault();
       var form=$("#upload_form")[0];
        var fd =new FormData(form);

          $.ajax({
                   url: '{{url("store_voucher")}}',
                   data:fd,
                   async:false,
                    type: 'POST',
                    processData: false,
                    contentType: false,

            success:function(response){
               if(response.flag== true)
                           {
 
                             window.location ='{{url("store_voucher_succeess")}}';
                           }else 
                           {
                            
                             alert("Unable to Delete");
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

function delete_voucher($id){
       if (confirm("Are you sure want to delete!")) {
 
         
      $.ajax({
         
            url: '{{url("delete_voucher")}}',
            type:'get',
            dataType:'json',
            data:{id:$id},
            success: function(response)
                        {
                           if(response.flag== true)
                           {
                                  window.location ='{{url("delete_voucher_succeess")}}'
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
 function removeAddedImage($id)
{
	
	$.ajax({
            url: '{{url("delete_merchant_image")}}',
            type:'get',
            
            data:{id:$id},
            success: function(response)
                        {
                     $("#img"+$id).remove();      
                   }
              
        });
}
</script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">


<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
 <script>
        $(document).ready(function(){
			for(var i=1;i<=7;i++){
    $('#from_time'+i).timepicker({});
    $('#to_time'+i).timepicker({});
	
			}
});
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}	
    </script>
</body>
</html>


