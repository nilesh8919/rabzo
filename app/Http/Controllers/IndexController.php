<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;
use View;
use Illuminate\Support\Facades\Input;
use App\Banner;
use App\Option;
use App\Faq;
use App\Review;
use App\Merchant;
use App\OrderDetails;
use App\Categories;
use App\Cuisine;
use App\Offer;
use App\Item;
use App\Size;

class IndexController extends Controller
{
    public function __construct()
    {
		 View::share( 'website_title', Option :: where('option_name','website_title')->pluck('option_value')); 
		 View::share( 'website_logo',Option :: where('option_name','website_logo')->pluck('option_value')); 
		
     }
    public function index(Request $request)
	{
error_reporting(0);
            
      $data['website_address'] = Option :: where('option_name','website_address')->pluck('option_value');
        $data['website_contact_email'] = Option :: where('option_name','website_contact_email')->pluck('option_value');
        
          $data['website_contact_phone'] =  Option :: where('option_name','website_contact_phone')->pluck('option_value');
           $data['first_step_image'] = Option :: where('option_name','first_step_image')->pluck('option_value');
			 $data['second_step_image'] =   Option :: where('option_name','second_step_image')->pluck('option_value');
			  $data['third_step_image'] =     Option :: where('option_name','third_step_image')->pluck('option_value');
			  $data['first_step_heading'] = Option :: where('option_name','first_step_heading')->pluck('option_value');
           $data['first_step_content'] = Option :: where('option_name','first_step_content')->pluck('option_value');
         $data['second_step_heading'] =  Option :: where('option_name','second_step_heading')->pluck('option_value');
         $data['second_step_content'] =   Option :: where('option_name','second_step_content')->pluck('option_value');
          $data['third_step_heading'] =  Option :: where('option_name','third_step_heading')->pluck('option_value');
        $data['third_step_content'] =   Option :: where('option_name','third_step_content')->pluck('option_value');
          $data['banner']  =Banner :: limit('1')->get();
		  
          $data['review']  =Review :: join('mt_merchant','mt_merchant.id','=','mt_review.merchant_id')
		  ->join('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
		  ->select('mt_merchant.restaurant_name','mt_merchant.restaurant_slug','mt_merchant_images.images','mt_review.*')
		  //->where('rating','>','4')->orderBy('mt_review.id','desc')->limit('4')->get();
		 ->where('rating','>','4')->where('mt_review.status','=','publish')->where('mt_merchant.status','Active')->groupBy('mt_merchant_images.merchant_id')->orderBy('mt_review.rating','desc')->limit('8')->get();
		// print_r($data['review']);exit;
		
		    $data['featured']  = Merchant :: join('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
		    ->select('mt_merchant.*','mt_merchant_images.images')->where('is_featured','1')
		->groupBy('mt_merchant_images.merchant_id')->get();
		//print_r(count($data['featured']));exit;
		    $data['merchant_logo']  =DB :: table('mt_merchant')
			->join('mt_merchant_meta','mt_merchant_meta.merchant_id','=','mt_merchant.id')
			->select('logo','mt_merchant.restaurant_name','mt_merchant_meta.merchant_key')->where('mt_merchant_meta.merchant_key','=','is_partners')->where('mt_merchant_meta.merchant_value','=','yes')->where('status','Active')->limit('8')->get();
			//dd($data['merchant_logo']);
			
			$data['sell_items']  = DB :: table('mt_order_details')->join('mt_item','mt_item.id','=','mt_order_details.item_id')
			->join('mt_item_images','mt_item_images.item_id','=','mt_item.id')
		    ->select('mt_item.*','mt_item_images.image_name',DB::raw('count(mt_order_details.item_id) AS cnt'))
		  ->groupBy('mt_order_details.item_id')->orderBy('mt_order_details.item_id','desc')->limit('4')->get();
	//dd($data['sell_items']);
              return view('welcome',[
                'results'=> $data,
				
                 ]);
	}
	public function restaurant(Request $request)
	{
          error_reporting(0);
           
	
		    $data['category']  = Categories :: where('status','publish')->get();
		    $data['cuisine']  = Cuisine :: get();
			$data['featured']  = Merchant :: join('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
			->select('mt_merchant.*','mt_merchant_images.images')
			  ->where('is_featured','=','1')->where('status','active')
		  ->groupBy('mt_merchant_images.merchant_id')->get();
		 // print_r($data['featured']);exit;
		  
		    $data['merchant']  = Merchant :: leftjoin('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
			  ->select('mt_merchant.*','mt_merchant_images.images')
		 ->groupBy('mt_merchant_images.merchant_id')->get();
		// print_r($data['merchant']);exit;
		  foreach( $data['merchant'] as $key=>$value)
		  {
			  $current_date = date('Y-m-d');
			  $offers =Offer :: where('status','active')
			  ->where('merchant_id','=',$value->id)
			  ->first();
			  if($offers->valid_from >= $current_date ){
                			  $data['merchant'][$key]->offers =$offers;
			  }else if($offers->valid_to <= $current_date){
				  	  $data['merchant'][$key]['offers'] =$offers;
			  }
		  }
	//print_r($data['merchant']);exit;
              return view('restaurant',[
                'results'=> $data,
				
                 ]);
	}
	
	public function restaurant_details(Request $request)
	{

      error_reporting(0);
              $data['category']  = Categories :: where('status','publish')->get();
		    $data['cuisine']  = Cuisine :: get();
        $data['website_contact_email'] = Option :: where('option_name','website_contact_email')->pluck('option_value');
        
          $data['merchant']  = Merchant :: join('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
			  ->select('mt_merchant.*','mt_merchant_images.images')->where('restaurant_name',$request->name)
		 ->groupBy('mt_merchant_images.merchant_id')->first();
	
              return view('restaurant_details',[
                'results'=> $data,
				
                 ]);
	}
   public function get_item_data(Request $request)
	{
		
		  $this->validate($request, [
           "merchant_id" => 'required',
         
        ]);
			 $qry  = Item :: where('mt_item.status','publish')
			 ->join('mt_merchant','mt_merchant.id','=','mt_item.merchant_id')
			 ->leftjoin('mt_merchant_categories','mt_merchant_categories.merchant_id','=','mt_merchant.id')
			 ->leftjoin('mt_category','mt_category.id','=','mt_merchant_categories.category_id')
			 ->leftjoin('mt_merchant_cuisine','mt_merchant_cuisine.merchant_id','=','mt_item.merchant_id')
			 ->select('mt_item.*')
			 ->where('mt_item.merchant_id',$request->merchant_id);
			 if(!empty($request->location)){
			     $qry->where('mt_merchant.city', 'LIKE', '%' . $request->location . '%');
			     //$qry->where('city',$request->location);
			  }
			   if(!empty($request->category)){
			     $qry->where('mt_category.category_name', 'LIKE', '%' . $request->category . '%');
			  }
			  if(!empty($request->cuisine)){
			     $qry->where('mt_merchant_cuisine.cuisine_id',$request->cuisine);
			   }
			    if(!empty($request->food_categories)){
					//print_r($request->food_categories);exit;
				 $qry->whereIn('mt_merchant_categories.category_id',$request->food_categories);
			   }
			    $qry->groupBy('mt_item.id');
			 $data = $qry->get();
			 foreach($data as $key=>$value)
			 {
				 $data1 =unserialize($value->price);
				$data_arr=array();
				foreach($data1 as $key1=>$value1)
				{
					$size= Size :: where(['status'=>'published','id'=>$key1])->first();
					$data_arr[]=array(
					   "size_name" =>$size->size_name,
					   "price" =>$value1
					);
				}
				 
				 $data[$key]->prices =$data_arr;
			 }
		return response()->json($data);
	}
 public function get_item_price(Request $request)
	{
		
		  $this->validate($request, [
           "item_id" => 'required',
         
        ]);
			 $data  = Item :: where('status','publish')->where('id',$request->item_id)->first();
			 $data1 =unserialize($data->price);
				$data_arr=array();
				foreach($data1 as $key1=>$value1)
				{
					$size= Size :: where(['status'=>'published','id'=>$key1])->first();
					$data_arr[]=array(
					   "size_name" =>$size->size_name,
					   "price" =>$value1
					);
				}
				 $prices =$data_arr;
			
		return response()->json($prices);
	}
	public function get_merchant_data(Request $request)
	{

		  
			 $qry  = Merchant :: join('mt_merchant_images','mt_merchant_images.merchant_id','=','mt_merchant.id')
			 ->leftjoin('mt_merchant_categories','mt_merchant_categories.merchant_id','=','mt_merchant.id')
			 ->leftjoin('mt_category','mt_category.id','=','mt_merchant_categories.category_id')
			 ->leftjoin('mt_merchant_cuisine','mt_merchant_cuisine.merchant_id','=','mt_merchant.id')
			  ->select('mt_merchant.*','mt_merchant_images.images');
			  $qry->where('mt_merchant.status','active');
			  if(!empty($request->location)){
			     $qry->where('mt_merchant.city', 'LIKE', '%' . $request->location . '%');
			     //$qry->where('city',$request->location);
			  }
			   if(!empty($request->category)){
			     $qry->where('mt_category.category_name', 'LIKE', '%' . $request->category . '%');
			  }
			  if(!empty($request->cuisine)){
			     $qry->where('mt_merchant_cuisine.cuisine_id',$request->cuisine);
			   }
			    if(!empty($request->food_categories)){
					//print_r($request->food_categories);exit;
				 $qry->whereIn('mt_merchant_cuisine.cuisine_id',$request->food_categories);
			   }
		 $qry->groupBy('mt_merchant_images.merchant_id');
		 
		 $data=$qry->get();
		  
		return response()->json($data);
	}
	public function get_merchant_available_location(Request $request)
	{
		 $data  = Merchant :: select(DB::raw('DISTINCT city'))->get();
		/* echo $data[0]->city;exit;
		 $d1=array();
		 foreach($data as $row)
		 {
			 $d1['name'] =$row->city;
		 }
		 print_r($d1);exit;*/
		return response()->json($data);
   }
  
  
   public function get_merchant_available_restaurant(Request $request)
	{
		 $data1  = Cuisine :: select(DB::raw('DISTINCT cuisine_name'));
		 $data2  = Merchant :: select(DB::raw('DISTINCT restaurant_name AS cuisine_name'));
		
		 $data3 = $data1->union($data2)->get();
		return response()->json($data3);
   }
   
    public function partners_with_us(Request $request)
   {
	         return view('partners_with_us',[
              //  'results'=> $data,
				
                 ]);
   }
}
