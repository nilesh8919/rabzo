<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Offer;
use App\Merchant;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		
	 }
  
   public function index()
   {
	   
	   $data =Offer :: join('mt_merchant','mt_merchant.id','=','mt_offers.merchant_id')
				->select('mt_offers.*','mt_merchant.restaurant_name')
				->where('mt_offers.merchant_id',Auth::id())
				->orderby('id','desc')
				->get();
			//	print_r($m_data);exit;
                  return view('admin.offers',[
                'results'=> $data,
            
              
				
                 ]);
   }
    public function profiles()
   {
	   
	   $user =User :: where('status','active')->where('id',Auth::user()->id)->first();
	    return view('admin.profiles',[
		    'user'=> $user,
			'title' =>'Profile'
                 ]);
   }
     public function update_profile(Request $request)
       {
         
        
			  $add = User ::find(Auth::user()->id);
		      $add->name= $request->name;
			 
		      $add->email= $request->email;
             
			  $add->phone_no= $request->phone_no;
			if(isset($request->password))
			{
				  $add->password= bcrypt($request->password);
				  $add->original_password= $request->password;
			}
			 
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully','url'=>'/manage_offers');
		  
		  Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
   
		public function delete_offers(Request $request)
       {
		      $this->validate($request,[
				'id'=>'required',
				 ]);
          $delete = Offer  :: where('id', '=', $request->id)->delete(); 
		  $res =array('flag'=>true,'msg'=>'Data deleted successfully','url'=>'/manage_offers');
           Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
      
}
