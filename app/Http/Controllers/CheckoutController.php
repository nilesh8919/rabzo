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
use App\OrderDetails;
use App\Categories;
use App\Cuisine;
use App\Offer;
use App\Item;
use App\Size;
use App\Client;

class CheckoutController extends Controller
{
    public function __construct()
    {
		 View::share( 'website_title', Option :: where('option_name','website_title')->pluck('option_value')); 
		 View::share( 'website_logo',Option :: where('option_name','website_logo')->pluck('option_value')); 
		
     }
    public function index(Request $request)
	{
error_reporting(0);
            
     $user_data = Session::get('users');
	// print_r(Session::get('users')['id']);exit;
		    $data['merchant_logo']  = Merchant :: select('logo')->where('logo','!=','')->where('status','active')->get();
			
			
	///print_r($data['review']);exit;
              return view('checkout',[
                'results'=> $data,
				
                 ]);
	}
	
    public function add_to_cart(Request $request)
   {
	  
	   //print_r($request->shoppingCart);exit;
	   $data =$request->shoppingCart;
	   $data_arr =array();
	  // $data1 =array();
	   foreach($data  as $row)
	   {
			   $data_arr=array(
				 'item_id' =>$row['item_id'],
				 'Name' =>$row['Name'],
				 'size' =>$row['size'],
				 'Qty' =>$row['Qty'],
				 'Description' =>$row['Description'],
				 'Price' =>$row['Price'],
				 'unit_price' =>$row['Price'],
			   );
			
	   }
	   if(count(Session::get('cart')) == 0)
	   {
		   Session::put('cart', []);
	   }
	   if(count(Session::get('cart')) > 0)
	   {
		  $cart_data =Session::get('cart');
		  foreach($cart_data as $key=>$row){
		  if($this->idExists($data_arr['item_id'], $cart_data))
			 {
				// unset($cart_data[0]);
				if($data_arr['item_id'] == $row['item_id'] && $data_arr['size'] == $row['size'] ){
					Session::forget('cart.' . $key);
					// echo "hi";exit;
					
					$cart_data[$key]['Qty'] = $row['Qty'] + 1;
					//$cart_data[$key]['Price'] = $row['Qty'] * $row['unit_price'];
					 Session :: push('cart', $cart_data[$key]);
				}
			 }else{
				
				   Session :: push('cart', $data_arr);
			 }
		  }	
		 
		  //  Session :: push('cart', $data_arr);
	   }else{
		    Session :: push('cart', $data_arr);
	   }
	  
	  
	//   Session::put('cart', $request->shoppingCart);
	   
	   
	   
	  // print_r($cart_data);exit;
   }
   
function idExists($needle='', $haystack=array()){
    //now go through each internal array
    foreach ($haystack as $item) {
        if ($item['item_id']===$needle) {
            return true;
        }
    }
    return false;
}
   
   public function get_cart(Request $request)
   {
	   //print_r($request->shoppingCart);exit;
	  // Session::flush();
	    $cart_data = Session::get('cart');
		
	  // print_r($cart_data);exit;
	   return response()->json($cart_data);
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
			  "id" =>$users->id,
			  "name" =>$users->name,
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
	public function client_logout()
   {
	   Session::flush();
	   return redirect('/');
   }
	
}