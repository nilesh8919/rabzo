<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;
use View;
use Illuminate\Support\Facades\Input;
use App\Banner;
use App\Option;
use App\Faq;
use App\Review;
use App\Merchant;
use App\Order;
use App\OrderDetails;
use App\Categories;
use App\Cuisine;
use App\Offer;
use App\Item;
use App\Size;
use App\Client;
use App\OrderDeliveryAddress;

class RestaurantController extends Controller
{
    public function __construct()
    {
		 View::share( 'website_title', Option :: where('option_name','website_title')->pluck('option_value')); 
		 View::share( 'website_logo',Option :: where('option_name','website_logo')->pluck('option_value')); 
		
     }
    public function register_restaurant(Request $request)
	{
       if((Merchant :: where('contact_email','=',$request->contact_email)->count()) > 0)
	   {
		    $res =array('flag'=>false,'msg'=>'Email already exist ');
	   }
        else{
	 //print_r($cart_data);exit;
				$new =new Merchant();
			
				$new->restaurant_name = $request->restaurant_name;
				$new->owner_name = $request->owner_name;
				$new->contact_email = $request->contact_email;
				$new->username = $request->contact_email;
				$new->password = md5($request->password);
				$new->city = $request->city;
				$new->post_code = $request->post_code;
				$new->state = $request->state;
				$new->address = $request->address;
				$new->contact_phone = $request->contact_phone;
				$new->status= 'Pending for approval';
				
				
			$new->save();
			$last_id = $new->id;
	


            
			if(isset($last_id)){
				  $res =array('flag'=>true,'msg'=>'Data added successfully');
		 }else{
			   $res =array('flag'=>false,'msg'=>'unable to save');
			 
		 }
      } 
		 Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
	}
	
    
	
}