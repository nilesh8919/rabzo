<?php
namespace App\Helpers;
use App\Module;
use App\MerchantImages;
use Auth;
class AppHelper
{
      public function get_modules()
    {
		
       $qry = Module::where(['status' => 'active'])
                        ->select('id','modules_name')
                        ->with(['sub_modules' => function($query){
                            $query->where('status','=','active');
                            $query->select('id','module_id','sub_module_name','sub_module_routes','icons');
                           
                        }]);
                       $qry->orderBy('sequence_no','asc');
                      $lists = $qry->get();
						//print_r($lists);exit;
        return $lists;
    }
     public function get_merchant_image()
    {
    
         if(Auth::id()){
       $qry = MerchantImages:: select('merchant_id','images')
             ->with(['merchant'=>function($qry1){
                $qry1->select('id','restaurant_name');
             }])
              ->where('merchant_id',Auth::id());
                      
                      $lists = $qry->first();
            //print_r($lists);exit;
        return $lists;
      }else{
        return $lists=array();
      }
    }
	
}