<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Size;

class SizeController extends Controller
{
    public function __construct()
    {
     
	 }
   
    public function manage_sizes(Request $request)
      {
          //dd(Auth::id());
				$data =Size :: join('mt_merchant','mt_merchant.id','=','mt_size.merchant_id')
				->select('mt_size.*','mt_merchant.restaurant_name')
				->where('mt_size.merchant_id',Auth::id())
				->orderby('id','desc')
				->get();
			//	print_r($m_data);exit;
                  return view('merchant.size',[
                'results'=> $data,
              
				
                 ]);
      }
     public function create(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = Size::find($request->id);
		      $add->size_name= $request->size_name;
             
			  $add->merchant_id= Auth::id();
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully','url'=>'/manage_sizes');
		  }else{
			  $add =new Size();
             $add->size_name= $request->size_name;
             
			  $add->merchant_id= Auth::id();
			  $add->status= $request->status;
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully','url'=>'/manage_sizes');
		  }
		  Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
   
		public function delete_sizes(Request $request)
       {
		     $this->validate($request,[
				'id'=>'required',
				 ]);
				
          $delete = Size  :: where('id', '=', $request->id)->delete(); 
		  $res =array('flag'=>true,'msg'=>'Data deleted successfully','url'=>'/manage_sizes');
           Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
        
}
