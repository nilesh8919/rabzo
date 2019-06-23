<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\ShippingRate;
use App\Option;

class ShippingController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		
	 }
   public function index()
   {
	   $data2 =Option :: where(['option_name'=>'free_delivery_above_price','merchant_id'=>Auth::id()])->first();
	  // print_r($data2 );exit;
	   $data['option_value'] =$data2['option_value'];
	 //  echo $data['option_value'];exit;
	   $data['shippings_rate'] =ShippingRate :: join('mt_merchant','mt_merchant.id','=','mt_shipping_rate.merchant_id')
				->select('mt_shipping_rate.*','mt_merchant.restaurant_name')
				->where('mt_shipping_rate.merchant_id',Auth::id())
				->orderby('id','desc')
				->get();
			//	print_r($m_data);exit;
                  return view('merchant.manage_shipping',[
                'results'=> $data,
              
				
                 ]);
   }
   
     public function create(Request $request)
       {
		  
		  
		   if(Option :: where('option_name','free_delivery_above_price')->where('merchant_id',Auth::id())->count() == 0)
		   {
			    Option :: insert([
				'option_value' => $request->free_delivery_above_price,
				'option_name' => 'free_delivery_above_price',
				'merchant_id'=>Auth::id()
				]);
		   }else{
		       Option :: where('option_name','free_delivery_above_price')
			   ->where('merchant_id',Auth::id())
			   ->update(['option_value' => $request->free_delivery_above_price]);
		   }
         
		    ShippingRate  :: where('merchant_id', '=', Auth::id())->delete();
		   
			 for($i=0;$i<count($request->distance_from);$i++)
			 {
				
				   $add =new ShippingRate();
				 $add->distance_from= $request->distance_from[$i];
				 $add->distance_to= $request->distance_to[$i];
				 $add->shipping_units= $request->shipping_units[$i];
				 $add->distance_price= $request->distance_price[$i];
				   $add->merchant_id= Auth::id();
				 // $add->date_created= date('Y-m-d H:i:s');
				 // $add->date_modified= date('Y-m-d H:i:s');
				  $add->save();
			 }
        
			 
			   $res =array('flag'=>true,'msg'=>'Data added successfully','url'=>'/manage_shipping');
		  
		  Session::flash('flash_message', $res['msg']);
           return redirect('manage_shipping');
       }
   
		public function delete_offers(Request $request)
       {
		      $this->validate($request,[
				'id'=>'required',
				 ]);
          $delete = ShippingRate  :: where('id', '=', $request->id)->delete(); 
		  $res =array('flag'=>true,'msg'=>'Data deleted successfully','url'=>'/manage_shipping');
           Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
      
}
