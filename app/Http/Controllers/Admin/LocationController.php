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
use App\Review;
use App\Client;
use App\Cities;
use AppHelper;



class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function index(Request $request)
      {
        
        $data = Cities :: get();
          // print_r($data);exit;
              return view('admin.manage_cities',[
                'results'=> $data,
				
                 ]);
      }
	  public function add_area_in_km(Request $request)
	  {
		  Cities :: where('city_id',$request->id)->update([
		    "area_in_km" =>$request->area_in_km
		  ]);
		  
		  
		   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
	  }
	 public function add_smtp_settings(Request $request)
	  {
		  if(isset($request->smtp_host))
		  {
			 AppHelper :: add_keys_values('smtp_host',$request->smtp_host);
		  }
		  if(isset($request->smtp_username))
		  {
			   AppHelper :: add_keys_values('smtp_username',$request->smtp_username);
		  }
		  if(isset($request->smtp_password))
		  {
			   AppHelper :: add_keys_values('smtp_password',$request->smtp_password);
		  }
		  if(isset($request->smtp_port))
		  {
			   AppHelper :: add_keys_values('smtp_port',$request->smtp_port);
		  }
		  if(isset($request->smtp_secure))
		  {
			   AppHelper :: add_keys_values('smtp_secure',$request->smtp_secure);
		  }
		  
		   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
		  
	  }
	  
	   public function add_social_settings(Request $request)
	  {
		  if(isset($request->facebook_url))
		  {
			 AppHelper :: add_keys_values('facebook_url',$request->facebook_url);
		  }
		  if(isset($request->instagram_url))
		  {
			   AppHelper :: add_keys_values('instagram_url',$request->instagram_url);
		  }
		  if(isset($request->google_url))
		  {
			   AppHelper :: add_keys_values('google_url',$request->google_url);
		  }
		  if(isset($request->linkedin_url))
		  {
			   AppHelper :: add_keys_values('linkedin_url',$request->linkedin_url);
		  }
		
		  
		   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
		  
	  }
 /*public function add_settings_values($key,$value)
		{
			 $d1 = DB :: table('mt_option')->where(['merchant_key'=>$key])->first();
				   if(isset($d1))
				   {
					     DB :: table(mt_option)->where(['merchant_key'=>$key])
				        ->update([
					      'merchant_value' => $value
					   ]);
				   }else{
					     DB :: table('mt_merchant_meta')
				        ->insert([
					      'merchant_value' => $value,
					      'merchant_key' => $key,
					    
					   ]);
				   }
		}*/
    

}
