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

class OrderController extends Controller
{
    public function __construct()
    {
		 View::share( 'website_title', Option :: where('option_name','website_title')->pluck('option_value')); 
		 View::share( 'website_logo',Option :: where('option_name','website_logo')->pluck('option_value')); 
		
     }
    public function save_order(Request $request)
	{
error_reporting(0);
          //  print_r($_POST);exit;
     $user_data = Session::get('users');
	 $cart_data =Session::get('cart');
	 $address = Session::get('user_address');

	 //print_r($cart_data);exit;
	    $new =new Order();
		$new->client_id = $user_data['id'];
		$new->merchant_id = $request->merchant_id;
		$new->payment_type = $request->pmode;
		$new->sub_total = $request->sub_total;
		$new->tax = $request->tax;
		$new->taxable_total = $request->taxable_total;
		$new->total_w_tax = $request->total_w_tax;
		$new->status = 'pending';
		$new->delivery_charge = $request->delivery_charge;
		$new->delivery_date =date('Y-m-d');
	//	$new->delivery_time = $request->delivery_time;
		//$new->voucher_code	 = $request->voucher_code;
		//$new->voucher_amount	 = $request->voucher_amount;
		//$new->voucher_type	 = $request->voucher_type;
		$new->ip_address	 = $_SERVER['REMOTE_ADDR'];
		$new->payment_provider_name	 = 'payment_provider_name';
		$new->discounted_amount	 = 'discounted_amount';
		$new->discount_percentage	 = 'discount_percentage';
		$new->percent_commision	 = 'percent_commision';
		$new->total_commission	 = 'total_commission';
	$new->save();
	$last_id = $new->id;
	

 $new1 =new OrderDeliveryAddress();
         $new1->order_id	 = $last_id;
		$new1->street	 = $address['street'];
		$new1->city	 = $address['city'];
		$new1->zipcode	 = $address['zipcode'];
		if(isset($address['location_name'])){
		$new1->location_name	 = $address['location_name'];
		}
	$new1->save();
	foreach($cart_data as $row){
	      $new2 =new OrderDetails();
			 $new2->order_id	 = $last_id;
			 $new2->client_id = $user_data['id'];
			$new2->item_id	 = $row['item_id'];
			$new2->size	 = $row['size'];
			$new2->qty	 = $row['Qty'];
			$new2->normal_price	 = $row['Price'];
			
		$new2->save();
	}
            
			if(isset($last_id)){
				 $data['ResponseCode'] = "200";
		     $data['ResponseMessage'] = "Order Saved";
		     $data['Data'] = "1";
		 }else{
			 $data['ResponseCode'] = "400";
		   $data['ResponseMessage'] = "Unable to save";
			 
		 }
		 return response()->json($data);
	}
	
    
	
}