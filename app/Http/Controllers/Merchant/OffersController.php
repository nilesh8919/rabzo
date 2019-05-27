<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Offer;

class OffersController extends Controller
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
                  return view('merchant.offers',[
                'results'=> $data,
              
				
                 ]);
   }
   
     public function create(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = Offer::find($request->id);
		      $add->offer_percentage= $request->offer_percentage;
		      $add->valid_from= $request->valid_from;
		      $add->valid_to= $request->valid_to;
		      $add->status= $request->status;
             
			  $add->merchant_id= Auth::id();
			  $add->applicable_to= $request->applicable_to;
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully','url'=>'/manage_offers');
		  }else{
			  $add =new Offer();
             $add->offer_percentage= $request->offer_percentage;
		      $add->valid_from= $request->valid_from;
		      $add->valid_to= $request->valid_to;
		      $add->status= $request->status;
             
			  $add->merchant_id= Auth::id();
			  $add->applicable_to= $request->applicable_to;
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
