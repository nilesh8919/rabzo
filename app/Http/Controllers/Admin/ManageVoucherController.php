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
use App\Voucher;
use App\Merchant;

class ManageVoucherController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		
	 }
   
    public function add_voucher_master(Request $request)
	{
		  $merchant =Merchant :: where('status','active')->get();
		 return view('admin.add_voucher',[
                'merchant'=> $merchant,
              'title' =>'Add new voucher'
				
                 ]);
		
	}
    public function manage_voucher(Request $request)
      {
         
				$data =DB::table('mt_voucher_new')->orderby('id','desc')
				->join('mt_merchant','mt_merchant.id','=','mt_voucher_new.merchant_id')
				->select('mt_voucher_new.*','mt_merchant.restaurant_name')
			//	->where('mt_voucher_new.merchant_id',Auth::id())
				->get();
			//	print_r($m_data);exit;
                  return view('admin.voucher',[
                'results'=> $data,
              
				
                 ]);
      }
     public function store_voucher(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = Voucher::find($request->id);
		      $add->voucher_name= $request->voucher_name;
              $add->voucher_type= $request->voucher_type;
			  $add->amount= $request->amount;
			 // $add->expiration= $request->expiration;
			   $add->expiration= date("Y-m-d", strtotime($request->expiration));
			  $add->merchant_id= $request->merchant_id;
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			  $add =new Voucher();
             $add->voucher_name= $request->voucher_name;
              $add->voucher_type= $request->voucher_type;
			  $add->amount= $request->amount;
			   $add->expiration= date("Y-m-d", strtotime($request->expiration) );
			  $add->merchant_id=$request->merchant_id;
			  $add->status= $request->status;
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully');
		  }
           return response()->json($res);
       }
     public function store_voucher_succeess(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/manage_voucher');
       }
    public function get_voucher_data_by_id(Request $request)
		{
			 $merchant =Merchant :: where('status','active')->get();
			$data =Voucher  :: where('id',$request->id)->orderby('id','desc')->first();
			 // return response()->json($data);
			 
			  return view('admin.add_voucher',[
                'merchant'=> $merchant,
              'title' =>'Edit voucher'
				
                 ]);
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
