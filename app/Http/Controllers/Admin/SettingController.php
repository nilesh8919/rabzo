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
use AppHelper;



class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function website_settings(Request $request)
      {
		  $helpers = new \App\Helpers\AppHelper;
         $data['send_email_id'] = $helpers->get_values_from_keys('send_email_id');
      /*   $data['owner_email_id'] = AppHelper :: get_values_from_keys('owner_email_id');
         $data['smtp_host'] = AppHelper :: get_values_from_keys('smtp_host');
		 $data['smtp_username'] = AppHelper :: get_values_from_keys('smtp_username');
         $data['smtp_password'] = AppHelper :: get_values_from_keys('smtp_password');
         $data['smtp_port'] = AppHelper :: get_values_from_keys('smtp_port');
         $data['smtp_secure'] = AppHelper :: get_values_from_keys('smtp_secure');
       
	   $data['facebook_url'] = AppHelper :: get_values_from_keys('facebook_url');
		 $data['instagram_url'] = AppHelper :: get_values_from_keys('instagram_url');
         $data['google_url'] = AppHelper :: get_values_from_keys('google_url');
         $data['linkedin_url'] = AppHelper :: get_values_from_keys('linkedin_url');
        // $data['smtp_secure'] = AppHelper :: get_values_from_keys('smtp_secure');*/
		$data['owner_email_id'] = $helpers->get_values_from_keys('owner_email_id');
         $data['smtp_host'] = $helpers->get_values_from_keys('smtp_host');
		 $data['smtp_username'] = $helpers->get_values_from_keys('smtp_username');
         $data['smtp_password'] = $helpers->get_values_from_keys('smtp_password');
         $data['smtp_port'] = $helpers->get_values_from_keys('smtp_port');
         $data['smtp_secure'] = $helpers->get_values_from_keys('smtp_secure');
       
	   $data['facebook_url'] = $helpers->get_values_from_keys('facebook_url');
		 $data['instagram_url'] = $helpers->get_values_from_keys('instagram_url');
         $data['google_url'] = $helpers->get_values_from_keys('google_url');
         $data['linkedin_url'] = $helpers->get_values_from_keys('linkedin_url');
        // $data['smtp_secure'] = AppHelper :: get_values_from_keys('smtp_secure');
          // print_r($data);exit;
              return view('admin.website_settings',[
                'results'=> $data,
				
                 ]);
      }
	  public function add_email_settings(Request $request)
	  {
		  $helpers = new \App\Helpers\AppHelper;
		  if(isset($request->send_email_id))
		  {
			 $helpers->add_keys_values('send_email_id',$request->owner_email_id);
		  }
		  if(isset($request->owner_email_id))
		  {
			   $helpers->add_keys_values('owner_email_id',$request->owner_email_id);
		  }
		  
		   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
	  }
	 public function add_smtp_settings(Request $request)
	  {
		  $helpers = new \App\Helpers\AppHelper;
		  if(isset($request->smtp_host))
		  {
			 $helpers->add_keys_values('smtp_host',$request->smtp_host);
		  }
		  if(isset($request->smtp_username))
		  {
			   $helpers->add_keys_values('smtp_username',$request->smtp_username);
		  }
		  if(isset($request->smtp_password))
		  {
			   $helpers->add_keys_values('smtp_password',$request->smtp_password);
		  }
		  if(isset($request->smtp_port))
		  {
			   $helpers->add_keys_values('smtp_port',$request->smtp_port);
		  }
		  if(isset($request->smtp_secure))
		  {
			   $helpers->add_keys_values('smtp_secure',$request->smtp_secure);
		  }
		  
		   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
		  
	  }
	  
	   public function add_social_settings(Request $request)
	  {
		  $helpers = new \App\Helpers\AppHelper;
		  if(isset($request->facebook_url))
		  {
			 $helpers->add_keys_values('facebook_url',$request->facebook_url);
		  }
		  if(isset($request->instagram_url))
		  {
			   $helpers->add_keys_values('instagram_url',$request->instagram_url);
		  }
		  if(isset($request->google_url))
		  {
			   $helpers->add_keys_values('google_url',$request->google_url);
		  }
		  if(isset($request->linkedin_url))
		  {
			   $helpers->add_keys_values('linkedin_url',$request->linkedin_url);
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
