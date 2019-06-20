<?php

namespace App\Http\Controllers;
error_reporting(0);

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
use App\OrderDetails;
use App\Categories;
use App\Cuisine;
use App\Offer;
use App\Item;
use App\Size;
use App\Client;
use App\OrderDeliveryAddress;

class CheckoutController extends Controller
{
    public function __construct()
    {
		 View::share( 'website_title', Option :: where('option_name','website_title')->pluck('option_value')); 
		 View::share( 'website_logo',Option :: where('option_name','website_logo')->pluck('option_value')); 
		
     }
    public function index(Request $request)
	{

            
     $user_data = Session::get('users');
	 $cart_data =Session::get('cart');
	 $address = Session::get('user_address');

	// print_r(Session::get('users')['id']);exit;
		    $merchant  = Merchant :: join('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
		    ->select('mt_merchant.*','mt_merchant_images.images')
			->where('mt_merchant.id',$request->id)->first();
			

              return view('checkout',[
                'merchant'=> $merchant,
                'cart_data'=> $cart_data,
                'deliveryAddress'=> $address,
				
                 ]);
	}
	
    public function add_to_cart(Request $request)
   {
	  // Session::flush();
	   //print_r($request->shoppingCart);exit;
	   $data =$request->shoppingCart;
	  
			   $data_arr=array(
				 'item_id' =>$data['item_id'],
				 'Name' =>$data['Name'],
				 'size' =>$data['size'],
				 'Qty' =>$data['Qty'],
				 'Description' =>$data['Description'],
				 'Price' =>$data['Price'],
				 'unit_price' =>$data['Price'],
			   );
			//print_r($data_arr);
	 
	   if(count(Session::get('cart')) == 0)
	   {
		   Session::put('cart', []);
	   }
	   if(count(Session::get('cart')) > 0)
	   {
		  
		  $cart_data =Session::get('cart');
		 /* foreach($cart_data as $key=>$row){
			 // if($data_arr['item_id'] === $row['item_id'] && $data_arr['size'] === $row['size'] ){
				 if(idExists($data_arr['item_id'], $haystack=array()){
						//echo "hi";exit;
						$qty = $cart_data[$key]['Qty'];
						unset($cart_data[$key]['Qty']);
					$qty  = $row['Qty'] + 1;
					$cart_data[$key]['Qty'] = $qty;
					//$cart_data[$key]['Price'] = $row['Qty'] * $row['unit_price'];
					// Session :: push('cart', $cart_data[$key]);
				}else{
					Session :: push('cart', $data_arr);
				}
		  }*/
		   if(!$this->idExists($data_arr['item_id'],$data_arr['size'], $cart_data))
			   {
				   Session :: push('cart', $data_arr);
			   }
		  
		  //  Session :: push('cart', $data_arr);
	   }else{
		    Session :: push('cart', $data_arr);
	   }
	  
	    
	  // print_r($cart_data);exit;
   }
   public function get_cart(Request $request)
   {
	   //print_r($request->shoppingCart);exit;
	  //Session::flush();
	    $cart_data = Session::get('cart');
		
	  // print_r($cart_data);exit;
	   return response()->json($cart_data);
   }
public function idExists($needle='',$size='', $haystack=array()){
    //now go through each internal array
    foreach ($haystack as $item) {
        if ($item['item_id']===$needle && $item['size']===$size) {
            return true;
        }
    }
    return false;
}
   
   
	 public function client_address(Request $request)
	 {
		 $qry = Client :: where(['client_id'=>Session::get('users')['id']])->get;
		  return response()->json($qry);
	 }
	 public function create_login(Request $request)
	 {
		 $qry = Client :: where(['email_address'=>$request->email_address,'password'=>md5($request->password)]);
		 
		 if($qry->count() > 0)
		 {
			  $users = $qry->first();
			 
			 $data_arr =array(
			  "id" =>$users->client_id,
			  "name" =>$users->first_name,
			  "email_address" =>$users->email_address,
			);
			Session :: put('users', $data_arr);
			 $data['ResponseCode'] = "200";
		     $data['ResponseMessage'] = "Login successfully";
		 }else{
			 $data['ResponseCode'] = "400";
		   $data['ResponseMessage'] = "invalid credeintials";
			 
		 }
		 return response()->json($data);
	 }
	 
	 public function create_register(Request $request)
	 {
			$this->validate($request,[
			'name'=>'required',
			'email_address'=>'required',
			 
		  ]);
			$new = new Client();
			$new->first_name = $request->name;
			$new->email_address = $request->email_address;
			$new->password = md5($request->password);
			$new->date_created =date('Y-m-d H:i:s');
			$new->save();
			$last_id =$new->id;
			$data_arr =array(
			  "id" =>$last_id,
			  "name" =>$request->name,
			  "email_address" =>$request->email_address,
			);
			Session :: put('users', $data_arr);
			
			if(isset($last_id)){
				 $data['ResponseCode'] = "200";
		        $data['ResponseMessage'] = "Registered";
		 	}else{
			 $data['ResponseCode'] = "400";
		   $data['ResponseMessage'] = "Unable to add";
		}
		return response()->json($data);
	}
	public function create_delivery_address(Request $request)
	 {
		 $user_data = Session::get('users');
		 
		 
		  $data_arr =array(
			  "street" =>$request->street,
			  "city" =>$request->city,
			  "zipcode" =>$request->zipcode,
			  "location_name" =>$request->location_name,
			
			);
			Session :: put('user_address', $data_arr);
		// print_r($user_data);exit;
		/*OrderDeliveryAddress :: where('client_id',$user_data['id'])->delete();
		$new = new OrderDeliveryAddress();
		if(isset($request->street)){
			$new->street = $request->street;
			$new->city = $request->city;
			$new->zipcode = $request->zipcode;
		
		}
			$new->client_id = $user_data['id'];
			if(isset($request->location_name)){
			$new->location_name = $request->location_name; }
			$new->save();
			$last_id =$new->id;
			$data_arr =array(
			  "id" =>$last_id,
			  "street" =>$request->street,
			  "city" =>$request->city,
			  "zipcode" =>$request->zipcode,
			  "location_name" =>$request->location_name,
			);
			*/
			$address = Session::get('user_address');
			if(isset($user_data)){
				 $data['ResponseCode'] = "200";
		        $data['ResponseMessage'] = "Registered";
		        $data['address'] = $address;
		 	}else{
			 $data['ResponseCode'] = "400";
		   $data['ResponseMessage'] = "Unable to add";
			}
			return response()->json($data);
	 }
	public function client_logout()
   {
	   Session::flush();
	   return redirect('/');
   }
	
}