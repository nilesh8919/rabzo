<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Ingredients;

class IngredientsController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
		
	 }
   
    public function manage_ingredients(Request $request)
      {
         
				$data =Ingredients :: join('mt_merchant','mt_merchant.id','=','mt_ingredients.merchant_id')
				->select('mt_ingredients.*','mt_merchant.restaurant_name')
				->where('mt_ingredients.merchant_id',Auth::id())
				->orderby('id','desc')
				->get();
			//	print_r($m_data);exit;
                  return view('merchant.ingredients',[
                'results'=> $data,
              
				
                 ]);
      }
     public function create(Request $request)
       {
         
         if($request->id > 0)
		  {
			  $add = Ingredients::find($request->ingredients_id);
		      $add->ingredients_name= $request->ingredients_name;
             
			  $add->merchant_id= Auth::id();
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully','url'=>'/manage_ingrediants');
		  }else{
			  $add =new Ingredients();
             $add->ingredients_name= $request->ingredients_name;
             
			  $add->merchant_id= Auth::id();
			  $add->status= $request->status;
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully','url'=>'/manage_ingrediants');
		  }
		  Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
   
		public function delete_ingredients(Request $request)
       {
		      $this->validate($request,[
				'id'=>'required',
				 ]);
          $delete = Ingredients  :: where('ingredients_id', '=', $request->id)->delete(); 
		  $res =array('flag'=>true,'msg'=>'Data deleted successfully','url'=>'/manage_ingrediants');
           Session::flash('flash_message', $res['msg']);
           return response()->json($res);
       }
      
}
