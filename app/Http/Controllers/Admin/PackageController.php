<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Package;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function manage_packages(Request $request)
      {
         
            $data =DB::table('mt_packages')->orderby('id','desc')->get();
              return view('admin.packages',[
                'results'=> $data,
				
                 ]);
      }
    
	  public function store_packages(Request $request)
       {
            $data=$request->all();
           unset($data['_token']);
         if($request->id > 0)
		  {
			  $add = Package::find($request->id);
		      $add->title= $request->title;
              $add->description= $request->description;
			  $add->price= $request->price;
			  $add->promo_price= $request->promo_price;
			  $add->expiration= $request->expiration;
			  $add->expiration_type= $request->expiration_type;
			  $add->unlimited_post= $request->unlimited_post;
			  $add->post_limit= $request->post_limit;
			  $add->ip_address= $_SERVER['REMOTE_ADDR'];
              $add->status= $request->status;
              $add->sell_limit= $request->sell_limit;
            //  $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			  $add =new Package();
              $add->title= $request->title;
              $add->description= $request->description;
			  $add->price= $request->price;
			  $add->promo_price= $request->promo_price;
			  $add->expiration= $request->expiration;
			  $add->expiration_type= $request->expiration_type;
			  $add->unlimited_post= $request->unlimited_post;
			  $add->post_limit= $request->post_limit;
			  $add->ip_address= $_SERVER['REMOTE_ADDR'];
              $add->status= $request->status;
              $add->sell_limit= $request->sell_limit;
              $add->date_created= date('Y-m-d H:i:s');
              $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully');
		  }
           return response()->json($res);
       }
	    public function get_package_data_by_id(Request $request)
		{
			$data =DB::table('packages')->where('id',$request->id)->orderby('id','desc')->first();
			  return response()->json($data);
		}
	    public function store_package_succeess(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/manage_packages');
       }
	    public function mapArrayToObject($object, $array)
    {
            foreach($array as $key => $value) {
                  $object->$key = $value;
            }
           return $object;
    }
	 public function delete_package(Request $request)
       {
          $delete = DB::table('packages')->where('id', '=', $request->id)->delete(); 
          return response()->json(array('flag'=>true));
       }
        public function delete_package_succeess(Request $request)
       {
            Session::flash('flash_message', 'Package Deleted Successfully');
              return redirect('/manage_packages');
       }

}
