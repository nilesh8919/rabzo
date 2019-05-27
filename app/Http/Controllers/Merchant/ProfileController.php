<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;
use App\Cuisine;
use App\Merchant;
use App\MerchantImages;
use App\Categories;
use App\MerchantCategories;
use App\MerchantCuisine;
use App\MerchantPaymentProvider;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		Auth::id();
	 }
   
    public function merchant_info(Request $request)
      {
         
				 $categories_data =DB::table('mt_category')->get();
            $cuisine_data =DB::table('mt_cuisine')->get();
            $countries_data =DB::table('mt_location_countries')->get();
            $services_data =DB::table('mt_merchant_services')->get();
            $package_data =DB::table('mt_packages')->get();
            $merchant_data =DB::table('mt_merchant')->where('id',Auth::id())->first();
            $merchant_cuisine_data =DB::table('mt_merchant_cuisine')->where('merchant_id',Auth::id())->get();
            $merchant_categories_data =DB::table('mt_merchant_categories')->where('merchant_id',Auth::id())->get();
            $merchant_image_data =DB::table('mt_merchant_images')->where('merchant_id',Auth::id())->get();
            $merchant_pp_data =MerchantPaymentProvider :: where('merchant_id',Auth::id())->get();
			
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
	  
	     public function update_merchant_profile(Request $request)
       {
            
      if(Input::hasFile('logo')){
                
                     $files1 = $request->file('logo');
				  $filename = $files1->getClientOriginalName();
                   $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/logo/';
                       $files1->move($destinationPath, $newFileName);
                       $logo_file_name =$newFileName;
			  
			   }else{
				   $logo_file_name ='';
			   }
			  
			    $add = Merchant::find($request->id);
               $add->restaurant_slug= $request->restaurant_slug;
              $add->restaurant_name= $request->restaurant_name;
              $add->owner_name= $request->owner_name;
              $add->restaurant_phone= $request->restaurant_phone;
              $add->contact_phone= $request->contact_phone;
              $add->contact_email= $request->contact_email;
              $add->gst_number= $request->gst_number;
              $add->adhar_number= $request->adhar_number;
              $add->pan_number= $request->pan_number;
              $add->fssi_number= $request->fssi_number;
              $add->country_code= $request->country_code;
              $add->address= $request->address;
              $add->city= $request->city;
              $add->state= $request->state;
              $add->post_code= $request->post_code;
              $add->cuisine=$request->cuisine;
              $add->service= $request->service;
              $add->status= $request->status;
              $add->ip_address= $_SERVER['REMOTE_ADDR'];
             // $add->package_id= $request->package_id;
             // $add->package_price= $request->package_price;
              $add->payment_steps= $request->payment_type;
              $add->is_featured= $request->is_featured;
           //   $add->is_commission= $request->is_commission;
//$add->commission_type= $request->commission_type;
              $add->latitude= $request->latitude;
              $add->lontitude= $request->lontitude;
			  if(!empty($logo_file_name)){
				   $add->logo= $logo_file_name;
			  }
              $add->lontitude= $request->lontitude;
            // $add->date_activated= date('Y-m-d H:i:s');
			//  $add->membership_expired= $request->membership_expired;
			  $add->username= $request->username;
			  if(!empty($request->password)){
			     $add->password= md5($request->password);
			  }
			//  $add->activation_key= $this->generateRandomString(6);
           /*  $add->last_login= '';
             $add->membership_expired= $request->membership_expired;
             $add->sponsored_expiration= '';
             $add->membership_purchase_date= '';*/
            
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			  
			  $last_id =$request->id;
			   if(Input::hasFile('images')){
                

                $files = $request->file('images');
				
               
                foreach ($files as $key => $file) {
                    $filename = $file->getClientOriginalName();

              
                        $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/';
                       $file->move($destinationPath, $filename);
                             $add_portfolio_image = new MerchantImages();
                        $add_portfolio_image->merchant_id = $last_id;
                        $add_portfolio_image->images = $filename;
                       
                        $add_portfolio_image->save();
			  
			  
			  
			  
					}
			  
			   }
			  if(isset($request->cuisine))
			  {
				  $cuisine_data =explode(',',$request->cuisine);
				  MerchantCuisine :: where('merchant_id',$last_id)->delete();
				  foreach($cuisine_data as $row)
				  {
					  
					    $new1 = new MerchantCuisine();
					    $new1->merchant_id = $last_id;
                        $new1->cuisine_id = $row;
                        $new1->save();
						
				  }
			  }
			
			   if(isset($request->categories))
			  {
				  $categories_data =explode(',',$request->categories);
				   MerchantCategories :: where('merchant_id',$last_id)->delete();
				  foreach($categories_data as $row)
				  {
					   $new2 = new MerchantCategories();
					    $new2->merchant_id = $last_id;
                        $new2->category_id = $row;
						 $new2->save();
				  }
			  }
			  if(isset($request->payment_type))
			  {
				  $pp_data =explode(',',$request->payment_type);
				   MerchantPaymentProvider :: where('merchant_id',$last_id)->delete();
				  foreach($pp_data as $row)
				  {
					   $new2 = new MerchantPaymentProvider();
					    $new2->merchant_id = $last_id;
                        $new2->payment_provider_name = $row;
						 $new2->save();
				  }
			  }
			  $msg ='Data updated successfully';
			   Session::flash('flash_message', $msg);
			  $res =array('flag'=>true,'msg'=>$msg,'url'=>'');
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
