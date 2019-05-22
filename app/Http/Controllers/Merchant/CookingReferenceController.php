<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\CookingReference;

class CookingReferenceController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		
	 }
   
    public function cooking_reference(Request $request)
      {
         
				$data =CookingReference :: join('mt_merchant','mt_merchant.id','=','mt_cooking_ref.merchant_id')
				->select('mt_cooking_ref.*','mt_merchant.restaurant_name')
				->where('mt_cooking_ref.merchant_id',Auth::id())
				->orderby('id','desc')
				->get();
			//	print_r($m_data);exit;
                  return view('merchant.cooking_reference',[
                'results'=> $data,
              
				
                 ]);
      }
     public function create(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = CookingReference::find($request->cook_id);
		      $add->cooking_name= $request->cooking_name;
             
			  $add->merchant_id= Auth::id();
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully','url'=>'/cooking_reference');
		  }else{
			  $add =new CookingReference();
             $add->cooking_name= $request->cooking_name;
             
			  $add->merchant_id= Auth::id();
			  $add->status= $request->status;
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully','url'=>'/cooking_reference');
		  }
		  Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
   
		public function delete_cooking_reference(Request $request)
       {
          $delete = CookingReference  :: where('cook_id', '=', $request->id)->delete(); 
		  $res =array('flag'=>true,'msg'=>'Data deleted successfully','url'=>'/cooking_reference');
           Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
        public function delete_voucher_succeess(Request $request)
       {
            Session::flash('flash_message', 'Voucher Deleted Successfully');
              return redirect('/manage_voucher');
       }
}
