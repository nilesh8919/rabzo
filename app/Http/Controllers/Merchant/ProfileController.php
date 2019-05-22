<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;
use App\Package;
use App\Cuisine;
use App\Voucher;
use App\MerchantPaymentProvider;

class ProfileController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		
	 }
   
    public function merchant_info(Request $request)
      {
         
				 $categories_data =DB::table('mt_category')->get();
            $cuisine_data =DB::table('mt_cuisine')->get();
            $countries_data =DB::table('mt_location_countries')->get();
            $services_data =DB::table('mt_merchant_services')->get();
            $package_data =DB::table('mt_packages')->get();
            $merchant_data =DB::table('mt_merchant')->where('id',$request->id)->first();
            $merchant_cuisine_data =DB::table('mt_merchant_cuisine')->where('merchant_id',$request->id)->get();
            $merchant_categories_data =DB::table('mt_merchant_categories')->where('merchant_id',$request->id)->get();
            $merchant_image_data =DB::table('mt_merchant_images')->where('merchant_id',$request->id)->get();
            $merchant_pp_data =MerchantPaymentProvider :: where('merchant_id',$request->id)->get();
			
			$arr1=array();
			$arr2=array();
			$arr3=array();
			foreach( $merchant_cuisine_data as $row)
			{
				$arr1[] =$row->cuisine_id;
			}
			foreach( $merchant_categories_data as $row)
			{
				$arr2[] =$row->category_id;
			}
			foreach( $merchant_pp_data as $row)
			{
				$arr3[] =$row->payment_provider_name;
			}
			//print_r($arr2);exit;
              return view('merchant.merchant_info',[
               
                'id'=>$request->id,
                'cuisine_data'=> $cuisine_data,
                'countries_data'=> $countries_data,
                'services_data'=> $services_data,
                'package_data'=> $package_data,
                'categories_data'=> $categories_data,
                'merchant_data'=> $merchant_data,
                'merchant_cuisine_data'=> $arr1,
                'merchant_categories_data'=> $arr2,
                'merchant_image_data'=> $merchant_image_data,
                'merchant_pp_data'=> $arr3,
				
                 ]);
      }
     public function store_voucher(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = Voucher::find($request->id);
		      $add->voucher_name= $request->voucher_name;
              $add->voucher_type= $request->voucher_type;
			  $add->amount= $request->amount;
			  $add->expiration= $request->expiration;
			  $add->merchant_id= Auth::id();
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			  $add =new Voucher();
             $add->voucher_name= $request->voucher_name;
              $add->voucher_type= $request->voucher_type;
			  $add->amount= $request->amount;
			  $add->expiration= $request->expiration;
			  $add->merchant_id= Auth::id();
			  $add->status= $request->status;
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully');
		  }
           return response()->json($res);
       }
     public function store_voucher_succeess(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/manage_voucher');
       }
    public function get_voucher_data_by_id(Request $request)
		{
			$data =Voucher  :: where('id',$request->id)->orderby('id','desc')->first();
			  return response()->json($data);
		}
		public function delete_voucher(Request $request)
       {
          $delete = Voucher  :: where('id', '=', $request->id)->delete(); 
          return response()->json(array('flag'=>true));
       }
        public function delete_voucher_succeess(Request $request)
       {
            Session::flash('flash_message', 'Voucher Deleted Successfully');
              return redirect('/manage_voucher');
       }
}
