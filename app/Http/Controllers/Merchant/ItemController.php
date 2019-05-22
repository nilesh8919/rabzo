<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Module;
use App\Http\Controllers\Controller;

use Auth; 
use Session;
use App\Item;
use App\ItemImages;
use App\Categories;
use App\MerchantCategories;
use App\CookingReference;
use App\Size;
use DB;
class ItemController extends Controller
{
    
    public function __construct() {
       // $this->middleware('auth:admin');
	   
	   $merchant_id = Auth::id();
    }

    
    
    public function index()
    {
		
				$data =Item :: orderby('id','desc')
				->join('mt_merchant','mt_merchant.id','=','mt_item.merchant_id')
				->select('mt_item.*','mt_merchant.restaurant_name')
				->get();
			//	print_r($m_data);exit;
                  return view('merchant.item_listing',[
                'results'=> $data,
               
				   ]);
    }
	public function add_item()
	{
		$categories_data =Categories :: where('status','publish')->get();
		$cooking_ref_data =CookingReference :: where('status','publish')->get();
		$size =Size :: where('status','published')->get();
		  return view('merchant.add_item',[
                'categories_data'=> $categories_data,
                'cooking_ref_data'=> $cooking_ref_data,
                'size'=> $size,
				   ]);
	}
	public function edit_item(Request $request)
	{
		$items =Item :: where('id',$request->id)->first();
		$categories_data =Categories :: where('status','publish')->get();
		$cooking_ref_data =CookingReference :: where('status','publish')->get();
		$size =Size :: where('status','published')->get();
		$merchant_categories = MerchantCategories :: where(['item_id'=>$request->id])->get();
		$item_images = ItemImages :: where(['item_id'=>$request->id])->get();
		$cat=array();
		foreach($merchant_categories as $val)
		{
			$cat[]=$val->category_id;
		}
	
			$item_price=unserialize($items->price);
			$item_size=array();
			$price=array();
		foreach($item_price as $key=>$val)
		{
			$item_size[]=$key;
			$price[]=$val;
		}
			
			///print_R($item_price);exit;
		
		  return view('merchant.edit_item',[
                'items'=> $items,
                'categories_data'=> $categories_data,
                'cooking_ref_data'=> $cooking_ref_data,
                'size'=> $size,
				'price' =>$price,
				'item_size' =>$item_size,
				'cat' =>$cat,
				'item_images' =>$item_images
				   ]);
	}
	public function store_item(Request $request)
       {
		   
            $data=$request->all();
           unset($data['_token']);
          // $result1_details=$this->mapArrayToObject(new Package(),$data);
          // $result1_details->save();
		  if($request->id > 0)
		  {
			    $add = Item::find($request->id);
               $add->merchant_id= Auth::id();
               $add->item_name= $request->item_name;
               $add->item_description= $request->item_description;
               $add->status= $request->status;
               $add->ingredients= $request->ingredients;
               $add->item_description= $request->item_description;
               $add->discount= $request->discount;
               $add->photo= $request->cuisine_name;
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			  $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			   if(Input::hasFile('gallery_images')){
                
                   $files = $request->file('photo');
				 
                    $filename = str_replace(' ','_',$files->getClientOriginalName());
                       $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/merchant_item_cat_images/';
                       $files->move($destinationPath, $newFileName);
                        $file_name  =$newFileName;
			       
			   }else{
				    $file_name  ='';
			       
			   }
			   
			    if(isset($request->size))
			  {
				  $size_data =$request->size;
				  $price_data =$request->price;
				  // MerchantCategories :: where('merchant_id',$last_id)->delete();
				  $price_data_arr=array();
				  for($i=0;$i<count($size_data);$i++)
				  {
					  if($price_data[$i] > 0){
					   $price_data_arr[$size_data[$i]]=$price_data[$i];
					  }
				  }
				
			  }
			   $add =new Item();
              
               $add->merchant_id= Auth::id();
               $add->item_name= $request->item_name;
               $add->item_description= $request->item_description;
               $add->status= $request->status;
               $add->ingredients= $request->ingredients;
               $add->item_description= $request->item_description;
               $add->ip_address= $_SERVER['REMOTE_ADDR'];
               $add->discount= $request->discount;
               $add->two_flavors= $request->two_flavors;
               $add->price= serialize($price_data_arr);
               $add->photo= $file_name;
            
             $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			  
			  $last_id = $add->id;
			   if(Input::hasFile('gallery_images')){
                
                   $files = $request->file('gallery_images');
				 foreach ($files as $key => $file) {
                    $filename = $file->getClientOriginalName();

              
                        $newFileName = time().'_'.$filename; 
                        $destinationPath = 'uploads/merchant_item_cat_images/';
                       $file->move($destinationPath, $newFileName);
                             $add_portfolio_image = new ItemImages();
                        $add_portfolio_image->item_id = $last_id;
                        $add_portfolio_image->image_name = $newFileName;
                       
                        $add_portfolio_image->save();
			  
			  	}
			  
			   }
			
			   if(isset($request->categories))
			  {
				  $categories_data =explode(',',$request->categories);
				  // MerchantCategories :: where('merchant_id',$last_id)->delete();
				  foreach($categories_data as $row)
				  {
					   $new2 = new MerchantCategories();
					    $new2->merchant_id = Auth::id();
                        $new2->category_id = $row;
                        $new2->item_id = $last_id;
						
						 $new2->save();
				  }
			  }
			  
			  
			  
			  $res =array('flag'=>true,'msg'=>'Data inserted successfully');
			
		  }
		    
           return response()->json($res);
       }
	     
	     public function delete_item(Request $request){
			  $data = ItemImages  :: where('item_id', '=', $request->id)->delete(); 
			  $data = MerchantCategories  :: where('item_id', '=', $request->id)->delete(); 
			
			  $delete = Item  :: where('id', '=', $request->id)->delete(); 
              Session::flash('flash_message', $request->msg);
              return redirect('/item_listing');
		 }
	    
	     public function store_item_success(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/item_listing');
       }
	   public function delete_item_image(Request $request){
		    $data = ItemImages  :: where('id', '=', $request->id)->first(); 
			
			unlink('uploads/merchant_item_cat_images/'.$data->image_name);
		     ItemImages  :: where('id', '=', $request->id)->delete(); 
			return response()->json('images deleted');
		 }
	
	 
}
