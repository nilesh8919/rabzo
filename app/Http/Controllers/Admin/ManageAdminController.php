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
use App\User;

class ManageAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
  
    public function index(Request $request)
      {
         
            $data =DB::table('users')->where('type','admin')->orderby('id','desc')
				->get();
				
		
              return view('admin.manage_admin',[
                'results'=> $data,
				
                 ]);
      }
	    public function add_new_admin(Request $request)
		{
			 return view('admin.add_new_admin',[
                
				
                 ]);
		}
	    public function save_new_admin(Request $request)
	{
				 if($request->id > 0 && isset($request->id))
				  {
					  
                   
			
						$add = User::find($request->id);
							$add->name=$request->name;
						$add->username=$request->username;
						if(isset($request->password) && count($request->password) > 0){
						$add->password=$request->password;
						
						}
						$add->email=$request->email;
							$add->status=$request->status;
					$add->save();
					$id= $request->id;
					$res =array('flag'=>true,'msg'=>'Data updated successfully');
			   }else{
				   
				   
				    $add = new User();
				$add->name=$request->name;
				$add->username=$request->username;
						$add->password=$request->password;
						$add->email=$request->email;
				$add->status=$request->status;
				$add->type='admin';
				$add->save();
				$id= $add->id;
				
				
				   $res =array('flag'=>true,'msg'=>'Data added successfully');
			   }
			   
			
		    Session::flash('flash_message', $res['msg']);
		   return response()->json($res);
	}
	
	public function get_admin_by_id(Request $request)
	{
		  $data =DB::table('users')->where('id',$request->id)
				->first();
		
		 return view('admin.add_new_admin',[
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
