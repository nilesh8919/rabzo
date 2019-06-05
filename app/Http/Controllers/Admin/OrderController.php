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

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function index(Request $request)
      {
         
            $data =DB::table('mt_order')->orderby('id','desc')
			->join('mt_merchant','mt_merchant.id','=','mt_order.merchant_id')
			->join('mt_client','mt_client.client_id','=','mt_order.client_id')
			->select('mt_order.*','mt_merchant.restaurant_name','mt_client.first_name','mt_client.last_name')
			->get();
              return view('admin.manage_order',[
                'results'=> $data,
				
                 ]);
      }
 
    

}
