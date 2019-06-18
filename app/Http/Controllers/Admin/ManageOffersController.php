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

class ManageOffersController extends Controller
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
    public function add_offers_master()
   {
	   
	   $merchant =Merchant :: where('status','active')->get();
	    return view('admin.add_offers',[
		    'merchant'=> $merchant,
			'title' =>'Add new offer'
                 ]);
   }
     public function create(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = Offer::find($request->id);
		      $add->offer_percentage= $request->offer_percentage;
			  if(isset($request->valid_from)){
		      $add->valid_from= date("Y-m-d", strtotime($request->valid_from) );
			  }
			   if(isset($request->valid_to)){
		      $add->valid_to= date("Y-m-d", strtotime($request->valid_to) );
			   }
		      $add->status= $request->status;
             
			  $add->merchant_id= $request->merchant_id;
			  if(isset($request->applicable_to)){
			    $add->applicable_to= $request->applicable_to; }
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully','url'=>'/manage_offers');
		  }else{
			  $add =new Offer();
             $add->offer_percentage= $request->offer_percentage;
		    if(isset($request->valid_from)){
		      $add->valid_from= date("Y-m-d", strtotime($request->valid_from) );
			  }
			   if(isset($request->valid_to)){
		      $add->valid_to= date("Y-m-d", strtotime($request->valid_to) );
			   }
		      $add->status= $request->status;
             
			  $add->merchant_id= $request->merchant_id;
			 if(isset($request->applicable_to)){
			    $add->applicable_to= $request->applicable_to; }
			   $add->status= $request->status;
			 
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully','url'=>'/manage_offers');
		  }
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
