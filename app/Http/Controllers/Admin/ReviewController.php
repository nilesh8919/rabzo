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

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function manage_reviews(Request $request)
      {
         
            $data =DB::table('mt_review')->orderby('id','desc')
			->join('mt_merchant','mt_merchant.id','=','mt_review.merchant_id')
			->select('mt_review.*','mt_merchant.restaurant_name')
			->get();
              return view('admin.review',[
                'results'=> $data,
				
                 ]);
      }
 
    

}
