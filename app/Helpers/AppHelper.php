<?php
namespace App\Helpers;
use App\Module;
use App\MerchantImages;
use Auth;
use DB;
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
	public static function add_keys_values($key,$value)
		{
			 $d1 = DB :: table('mt_option')->where(['option_name'=>$key])->first();
				   if(isset($d1))
				   {
					    $data= DB :: table('mt_option')->where(['option_name'=>$key])
				        ->update([
					      'option_value' => $value
					   ]);
				   }else{
					   $data=  DB :: table('mt_option')
				        ->insert([
					      'option_value' => $value,
					      'option_name' => $key,
					    
					   ]);
				   }
				   return $data;
		}
	public static function get_values_from_keys($key)
		{
		
			 $data1 = DB :: table('mt_option')->where('option_name',$key)->first();
			 if(isset($data1))
			 {
				 return $data1->option_value;
			 }else{
				  return '';
			 }
				
				  
		}
}