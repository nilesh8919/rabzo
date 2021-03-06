<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;
use App\Package;
use App\Cuisine;
use App\Merchant;
use App\MerchantImages;
use App\Categories;
use App\MerchantCategories;
use App\MerchantCuisine;
use App\MerchantPaymentProvider;
use App\MerchantOpenClose;
use Illuminate\Support\Facades\Input;
error_reporting(0);
class MerchantController extends Controller
{
	
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function manage_merchant(Request $request)
	{
		    $data =DB::table('mt_merchant')->leftjoin('mt_packages','mt_packages.id','=','mt_merchant.package_id')
			->select('mt_merchant.*','mt_packages.title AS package_name')
			->orderby('id','desc')->get();
			foreach($data as $key=>$row){
			 $data1 =DB::table('mt_merchant_meta')->where('merchant_key','merchant_login_status')->first();
			
			if(isset($data1->merchant_key)){
			   $data[$key]->merchant_login_status = $data1->merchant_value;
			}
		}
			//print_r($data);exit;
              return view('admin.merchant_listing',[
                'results'=> $data,
               
				
                 ]);
	}
    public function get_price_by_package_id(Request $request){
		$package_data =DB::table('mt_packages')->where('id',$request->package_id)->first();
		return response()->json($package_data);
	}
    public function add_new_merchant(Request $request)
      {
            $categories_data =Categories :: get();
            $cuisine_data =DB::table('mt_cuisine')->get();
            $countries_data =DB::table('mt_location_countries')->get();
            $services_data =DB::table('mt_merchant_services')->get();
            $package_data =DB::table('mt_packages')->get();
            $data =DB::table('mt_merchant')->orderby('id','desc')->get();
            $merchant_cusine_data =DB::table('mt_merchant_cuisine')->get();
            $payment_provider_data =DB::table('mt_payment_provider')->orderBy('sequence','asc')->get();
              return view('admin.merchant',[
                'results'=> $data,
                'cuisine_data'=> $cuisine_data,
                'countries_data'=> $countries_data,
                'services_data'=> $services_data,
                'package_data'=> $package_data,
                'categories_data'=> $categories_data,
                'merchant_cusine_data'=> $merchant_cusine_data,
                'payment_provider_data'=> $payment_provider_data,
				
                 ]);
      }
 
    public function cuisine(Request $request)
      {
         
            $data =DB::table('mt_cuisine')->orderby('id','desc')->get();
              return view('admin.cuisine',[
                'results'=> $data,
				
                 ]);
      }
	   
	 public function store_cuisine(Request $request)
       {
            $data=$request->all();
           unset($data['_token']);
          // $result1_details=$this->mapArrayToObject(new Package(),$data);
          // $result1_details->save();
		  if($request->id > 0)
		  {
			    $add = Cuisine::find($request->id);
               $add->cuisine_name= $request->cuisine_name;
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			  $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			   $add =new Cuisine();
              $add->cuisine_name= $request->cuisine_name;
             $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			  $res =array('flag'=>true,'msg'=>'Data inserted successfully');
			
		  }
		    
           return response()->json($res);
       }
	   
	     public function get_cuisine_data_by_id(Request $request)
		{
			$data =Cuisine :: where('id',$request->id)->orderby('id','desc')->first();
				 
					  return response()->json($data);
		}
	     public function store_cuisine_succeess(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/cuisine');
       }
	    public function delete_cuisine(Request $request)
       {
          $delete = Cuisine :: where('id', '=', $request->id)->delete(); 
          return response()->json(array('flag'=>true));
       }
        public function delete_cuisine_succeess(Request $request)
       {
            Session::flash('flash_message', 'Cuisine Deleted Successfully');
              return redirect('/cuisine');
       }
	    public function store_merchant(Request $request)
       {
            
		  if($request->id > 0 && isset($request->id))
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
			   if(isset($request->is_partners)){
					 $this->add_merchant_values($last_id,'is_partners',$request->is_partners);
				  }
				  // print_r($_POST);exit;
			  if($request->merchant_pan_number){
			     $this->add_merchant_values($last_id,'merchant_pan_number',$request->merchant_pan_number);
			  }
			  if($request->merchant_aadhar_number){
			     $this->add_merchant_values($last_id,'merchant_aadhar_number',$request->merchant_aadhar_number);
			  }
			  if($request->merchant_fssi_number){
			     $this->add_merchant_values($last_id,'merchant_fssi_number',$request->merchant_fssi_number);
			  }
			  if($request->merchant_gst_number){
			     $this->add_merchant_values($last_id,'merchant_gst_number',$request->merchant_gst_number);
			  }
			  if($request->cost_for_two){
			     $this->add_merchant_values($last_id,'cost_for_two',$request->cost_for_two);
			  }
			  if($request->order_limit){
			     $this->add_merchant_values($last_id,'order_limit',$request->order_limit);
			  }
			  
			  
			   if(isset($request->day)){
				  $day =explode(',',$request->day);
				  $start_time =explode(',',$request->start_time);
				  $end_time =explode(',',$request->end_time);
				  $comment =explode(',',$request->comment);
				  $is_open_close =explode(',',$request->is_open_close);
				  MerchantOpenClose :: where('merchant_id',$last_id)->delete();
				  foreach($day as $key=>$row)
				  {
					  $new3 = new MerchantOpenClose(); 
					  $new3->merchant_id = $last_id;
					  $new3->day = $row;
					  $new3->start_time = $start_time[$key];
					  $new3->end_time = $end_time[$key];
					  $new3->end_time = $end_time[$key];
					  $new3->comment = $comment[$key];
					  $new3->is_open_close = $is_open_close[$key];
					  $new3->save();
				  }
			  }
			  
			  
			  
			  $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			  
			  
			if( Merchant :: where('restaurant_name',$request->restaurant_name)->count() > 0)
			{
				$res =array('flag'=>true,'msg'=>'Name already available');
			}else{
			  
			  if(Input::hasFile('logo')){
                
                     $files1 = $request->file('logo');
				
                 $filename = $files1->getClientOriginalName();
//echo $filename;exit;
                  $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/logo/';
                       $files1->move($destinationPath, $newFileName);
                             
			      $logo_file_name =$newFileName;
			  
			   }else{
				   $logo_file_name ='';
			   }
			   $add =new Merchant();
              $add->restaurant_slug= $request->restaurant_slug;
              $add->restaurant_name= $request->restaurant_name;
              $add->owner_name= $request->owner_name;
              $add->restaurant_phone= $request->restaurant_phone;
              $add->contact_phone= $request->contact_phone;
              $add->contact_email= $request->contact_email;
           //   $add->gst_number= $request->gst_number;
             // $add->adhar_number= $request->adhar_number;
            //  $add->pan_number= $request->pan_number;
             // $add->fssi_number= $request->fssi_number;
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
             $add->date_activated= date('Y-m-d H:i:s');
             $add->logo= $logo_file_name;
			
			  $add->username= $request->username;
			  $add->password= md5($request->password);
			  $add->activation_key= $this->generateRandomString(6);
          
             $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			  
			  $last_id =$add->id;
			   if(Input::hasFile('images')){
                

                $files = $request->file('images');
				
               
                foreach ($files as $key => $file) {
                    $filename = $file->getClientOriginalName();

              
                        $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/';
                       $file->move($destinationPath, $newFileName);
                             $add_portfolio_image = new MerchantImages();
                        $add_portfolio_image->merchant_id = $last_id;
                        $add_portfolio_image->images = $filename;
                       
                        $add_portfolio_image->save();
			  
			  
			  
			  
					}
			  
			   }
			  if(isset($request->cuisine))
			  {
				  $cuisine_data =explode(',',$request->cuisine);
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
			  if(!empty($logo_file_name)){
				    if(isset($request->is_partners)){
					 $this->add_merchant_values($last_id,'is_partners',$request->is_partners);
				  }
			  }
			  
			  if($request->merchant_pan_number){
			     $this->add_merchant_values($last_id,'merchant_pan_number',$request->merchant_pan_number);
			  }
			  if($request->merchant_aadhar_number){
			     $this->add_merchant_values($last_id,'merchant_aadhar_number',$request->merchant_aadhar_number);
			  }
			  if($request->merchant_fssi_number){
			     $this->add_merchant_values($last_id,'merchant_fssi_number',$request->merchant_fssi_number);
			  }
			  if($request->merchant_gst_number){
			     $this->add_merchant_values($last_id,'merchant_gst_number',$request->merchant_gst_number);
			  }
			  if($request->cost_for_two){
			     $this->add_merchant_values($last_id,'cost_for_two',$request->cost_for_two);
			  }
			  if($request->order_limit){
			     $this->add_merchant_values($last_id,'order_limit',$request->order_limit);
			  }
			  if(isset($request->day)){
				  $day =explode(',',$request->day);
				  $start_time =explode(',',$request->start_time);
				  $end_time =explode(',',$request->end_time);
				  $comment =explode(',',$request->comment);
				    $is_open_close =explode(',',$request->is_open_close);
				
				  foreach($day as $key=>$row)
				  {
					  $new3 = new MerchantOpenClose(); 
					  $new3->merchant_id = $last_id;
					  $new3->day = $row;
					  $new3->start_time = $start_time[$key];
					  $new3->end_time = $end_time[$key];
					  $new3->comment = $comment[$key];
					  $new3->is_open_close = $is_open_close[$key];
						 
							$new3->save();
				  }
			  }
		  }  
			  
			  
			  $res =array('flag'=>true,'msg'=>'Data inserted successfully');
		  }
	  
		    
           return response()->json($res);
       }
	    public function store_merchant_success(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/manage_merchant');
       }
	   public function delete_merchant(Request $request)
       {
          $delete = Merchant :: where('id', '=', $request->id)->delete(); 
          $delete = MerchantImages :: where('merchant_id', '=', $request->id)->delete(); 
          return response()->json(array('flag'=>true));
       }
        public function delete_merchant_success(Request $request)
       {
            Session::flash('flash_message', 'Merchant Deleted Successfully');
              return redirect('/manage_merchant');
       }
	    public function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
     }
	  public function manage_categories(Request $request)
      {
         
            $data =Categories :: orderby('id','desc')->get();
              return view('admin.merchant_categories',[
                'results'=> $data,
				
                 ]);
      }
	   
	 public function store_categories(Request $request)
       {
          
          // $result1_details=$this->mapArrayToObject(new Package(),$data);
          // $result1_details->save();
		  if($request->id > 0)
		  {
			    $add = Categories::find($request->id);
             
              $add->save();
			  $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			  
			  if(Input::hasFile('photo')){
                 $file = $request->file('photo');
				
                $filename = $file->getClientOriginalName();

                 $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/categories';
                       $file->move($destinationPath, $newFileName);
                         $file_name = $newFileName;
                    
			   }else{
				   $file_name ='';
			   }
			  
			   $add =new Categories();
              $add->category_name= $request->category_name;
              $add->category_description= $request->category_description;
              $add->photo= $file_name;
              $add->status= $request->status;
              $add->spicydish= $request->spicydish;
             
              $add->save();
			  $res =array('flag'=>true,'msg'=>'Data inserted successfully');
			
		  }
		    
           return response()->json($res);
       }
	    public function store_categories_success(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/manage_categories');
       }
       public function delete_categories(Request $request)
       {
          $delete = Categories :: where('id', '=', $request->id)->delete(); 
         
       }
       
        public function delete_categories_success(Request $request)
       {
            Session::flash('flash_message', 'Categories Deleted Successfully');
              return redirect('/manage_categories');
       }
	   public function get_merchant_by_id(Request $request)
      {
            $categories_data =DB::table('mt_category')->get();
            $cuisine_data =DB::table('mt_cuisine')->get();
            $countries_data =DB::table('mt_location_countries')->get();
            $services_data =DB::table('mt_merchant_services')->get();
            $package_data =DB::table('mt_packages')->get();
            $merchant_data =DB::table('mt_merchant')->where('id',$request->id)->first();
            $merchant_meta_data =DB::table('mt_merchant_meta')->where('merchant_id',$request->id)->get();
            $merchant_cuisine_data =DB::table('mt_merchant_cuisine')->where('merchant_id',$request->id)->get();
            $merchant_categories_data =DB::table('mt_merchant_categories')->where('merchant_id',$request->id)->get();
            $merchant_image_data =DB::table('mt_merchant_images')->where('merchant_id',$request->id)->get();
            $merchant_pp_data =MerchantPaymentProvider :: where('merchant_id',$request->id)->get();
            $merchant_open_close_data =MerchantOpenClose :: where('merchant_id',$request->id)->get();
			
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
			foreach($merchant_meta_data as $row)
			{
				$m_key = $row->merchant_key;
				$merchant_data->$m_key = $row->merchant_value;
			}
			//print_r($merchant_open_close_data);exit;
              return view('admin.merchant',[
               
                'id'=>$request->id,
                'cuisine_data'=> $cuisine_data,
                'countries_data'=> $countries_data,
                'services_data'=> $services_data,
                'package_data'=> $package_data,
                'categories_data'=> $categories_data,
                'merchant_data'=> $merchant_data,
                'merchant_meta_data'=> $merchant_meta_data,
                'merchant_cuisine_data'=> $arr1,
                'merchant_categories_data'=> $arr2,
                'merchant_image_data'=> $merchant_image_data,
                'merchant_pp_data'=> $arr3,
                'merchant_open_close_data'=> $merchant_open_close_data,
				
                 ]);
      }
	   public function delete_merchant_image(Request $request){
			$data1 = MerchantImages :: where('id',$request->id)->first();
			if(file_exists('uploads/'.$data1->images)){
				unlink('uploads/'.$data1->images);
			}
			$data = MerchantImages :: where('id',$request->id)->delete();
			  return response()->json("image removed");
		}
			protected function merchantAutoLogin(Request $request)
		{
			//echo $request->id;exit;
			$user = \App\Merchant::where('id',$request->id)->first();
         // $user->login_from ='admin';
	//if  (Auth::attempt(['username' => $request->username, 'password' => md5($request->password)])) {
			if ($user) {
				Auth::login($user);
				 $data['ResponseCode'] = "200";
			   $data['ResponseMessage'] = "Successfully login";
				
			}else{
				 $data['ResponseCode'] = "400";
			   $data['ResponseMessage'] = "Invalid credentials";
			}
		   return response()->json($data);
		}
		public function add_merchant_values($merchant_id,$key,$value)
		{
			 $d1 = DB :: table('mt_merchant_meta')->where(['merchant_key'=>$key,'merchant_id'=>$merchant_id])->first();
				   if(isset($d1))
				   {
					     DB :: table('mt_merchant_meta')->where(['merchant_key'=>$key,'merchant_id'=>$merchant_id])
				        ->update([
					      'merchant_value' => $value
					   ]);
				   }else{
					     DB :: table('mt_merchant_meta')
				        ->insert([
					      'merchant_value' => $value,
					      'merchant_key' => $key,
					      'merchant_id' => $merchant_id,
					   ]);
				   }
		}
}
