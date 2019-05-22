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
			  
			  
			  $res =array('flag'=>true,'msg'=>'Data updated successfully');
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
              return view('admin.merchant',[
               
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
	   public function delete_merchant_image(Request $request){
			$data1 = MerchantImages :: where('id',$request->id)->first();
			if(file_exists('uploads/'.$data1->images)){
				unlink('uploads/'.$data1->images);
			}
			$data = MerchantImages :: where('id',$request->id)->delete();
			  return response()->json("image removed");
		}
}
