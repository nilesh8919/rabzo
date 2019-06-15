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
use App\DeliveryBoy;

class EmailTemplatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
  
    public function index(Request $request)
      {
         
            $data =DB::table('mt_email_templates')->orderby('id','desc')
				->get();
				
			
              return view('admin.email_templates',[
                'results'=> $data,
				
                 ]);
      }
	    public function add_new_delivery_boy(Request $request)
		{
			 return view('admin.add_delivery_boy',[
                
				
                 ]);
		}
	    public function save_delivery_boy(Request $request)
	{
				 if($request->id > 0 && isset($request->id))
				  {
					  
                   
			
						$add = DeliveryBoy::find($request->id);
						$add->username=$request->username;
						$add->password=$request->password;
						$add->ip_address=$_SERVER['REMOTE_ADDR'];
						$add->status=$request->status;
					$add->save();
					$id= $request->id;
					$res =array('flag'=>true,'msg'=>'Data updated successfully');
			   }else{
				   
				   
				    $add = new DeliveryBoy();
				$add->username=$request->username;
				$add->password=$request->password;
				$add->ip_address=$_SERVER['REMOTE_ADDR'];
				$add->status=$request->status;
				$add->save();
				$id= $add->id;
				
				
				   $res =array('flag'=>true,'msg'=>'Data added successfully');
			   }
			   
			  if(isset($request->boy_mobile_number)){
				  $this->add_meta_values($id,'boy_mobile_number',$request->boy_mobile_number);
				}
				if(isset($request->boy_email_id)){
				  $this->add_meta_values($id,'boy_email_id',$request->boy_email_id);
				}
				if(isset($request->boy_name)){
				  $this->add_meta_values($id,'boy_name',$request->boy_name);
				}
				if(isset($request->boy_delivery_area)){
				  $this->add_meta_values($id,'boy_delivery_area',$request->boy_delivery_area);
				}
				if(isset($request->boy_bike_number)){
				  $this->add_meta_values($id,'boy_bike_number',$request->boy_bike_number);
				}
				if(isset($request->boy_address)){
				  $this->add_meta_values($id,'boy_address',$request->boy_address);
				}
				if(isset($request->boy_delivery_pincode)){
				  $this->add_meta_values($id,'boy_delivery_pincode',$request->boy_delivery_pincode);
				}
				if(isset($request->boy_date_of_birth)){
				  $this->add_meta_values($id,'boy_date_of_birth',$request->boy_date_of_birth);
				}
				if(isset($request->boy_pan_card_number)){
				  $this->add_meta_values($id,'boy_pan_card_number',$request->boy_pan_card_number);
				}
				if(isset($request->boy_aadhar_card_number)){
				  $this->add_meta_values($id,'boy_aadhar_card_number',$request->boy_aadhar_card_number);
				}
				if(isset($request->boy_license_card_number)){
				  $this->add_meta_values($id,'boy_license_card_number',$request->boy_license_card_number);
				} 
			  
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
	}
	
	public function get_delivery_boy_by_id(Request $request)
	{
		  $data =DB::table('mt_delivery_boy')->where('id',$request->id)
				->first();
		
		$data1 =DB::table('mt_delivery_boy_meta')->where('delivery_boy_id',$request->id)->get();
				
				foreach($data1 as $row1)
				{
					$keys= $row1->meta_key ;
					$data->$keys = $row1->meta_value;
				}
		 return view('admin.add_delivery_boy',[
                'results'=>$data
				
                 ]);
	}
	public function delete_delivery_boy(Request $request)
	{
		$this->validate($request,[
	    'id'=>'required',
	     
	  ]);
		 $data =DB::table('mt_delivery_boy')->where('id',$request->id)->delete();
		 $data =DB::table('mt_delivery_boy_meta')->where('delivery_boy_id',$request->id)->delete();
		   Session::flash('flash_message', $res['msg']);
		    $res =array('flag'=>true,'msg'=>'Data deleted successfully');
		   return response()->json($res);
	}
 public function add_meta_values($id,$key,$value)
		{
			 $d1 = DB :: table('mt_delivery_boy_meta')->where(['delivery_boy_id'=>$id,'meta_key'=>$key])->first();
				   if(isset($d1))
				   {
					     DB :: table('mt_delivery_boy_meta')->where(['delivery_boy_id'=>$id,'meta_key'=>$key])
				        ->update([
					      'meta_value' => $value
					   ]);
				   }else{
					     DB :: table('mt_delivery_boy_meta')
				        ->insert([
					      'delivery_boy_id' => $id,
					      'meta_key' => $key,
					      'meta_value' => $value,
					    
					   ]);
				   }
		}
    

}
