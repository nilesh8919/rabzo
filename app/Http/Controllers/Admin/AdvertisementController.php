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
use App\Advertisement;
use Illuminate\Support\Facades\Input;

class AdvertisementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
	 }
   
    public function manage_advertisement(Request $request)
      {
         
				$data =DB::table('mt_advertisement')->orderby('id','desc')
				->leftjoin('mt_merchant','mt_merchant.id','=','mt_advertisement.merchant_id')
				->select('mt_advertisement.*','mt_merchant.restaurant_name')
				->get();
			//	print_r($m_data);exit;
                  return view('admin.manage_advertisement',[
                'results'=> $data,
                
				
                 ]);
      }
     public function store(Request $request)
       {
         
         if($request->id > 0)
		  {
			    if(Input::hasFile('images')){
			  $file=$request->file('images');
             $destinationPath=public_path().'/uploadimages/';
             $fileName = $file->getClientOriginalName();
             $newFileName = time().'_'.$fileName; 
             $ext=pathinfo($newFileName,PATHINFO_EXTENSION);

             if($ext=='jpg'||$ext=='jpeg'||$ext=='JPG'||$ext=='JPEG'||$ext=='png'||$ext=='PNG'
              ||$ext=='gif'||$ext=='GIF')
             {
               if($ext=='jpg'||$ext=='jpeg'||$ext=='JPG'||$ext=='JPEG')
               {
                  $src=imagecreatefromjpeg($file);
               } 
                if($ext=='png'|| $ext=='PNG')
               {
                  $src=imagecreatefrompng($file);
               }
                if($ext=='gif'||$ext=='GIF')
               {
                $src=imagecreatefromgif($file);
               }

               list($width_min,$height_min)=getimagesize($file);
                imagecopyresampled($src, $src, 0, 0, 0, 0, $width_min, $height_min, 
                  $width_min, $height_min);  
             }
             imagejpeg($src,$destinationPath.$newFileName,80);
				}  
			  
			  $add = Advertisement::find($request->id);
		      $add->title= $request->title;
		      $add->description= $request->description;
			  if(!empty($newFileName)){
                $add->images= $newFileName;
			  }
			  $add->link= $request->link;
			 
			   $add->status= $request->status;
			 
            //  $add->date_created= date('Y-m-d H:i:s');
            //  $add->date_modified= date('Y-m-d H:i:s');
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data updated successfully');
		  }else{
			  
			  $file=$request->file('images');
             $destinationPath=public_path().'/uploadimages/';
             $fileName = $file->getClientOriginalName();
             $newFileName = time().'_'.$fileName; 
             $ext=pathinfo($newFileName,PATHINFO_EXTENSION);

             if($ext=='jpg'||$ext=='jpeg'||$ext=='JPG'||$ext=='JPEG'||$ext=='png'||$ext=='PNG'
              ||$ext=='gif'||$ext=='GIF')
             {
               if($ext=='jpg'||$ext=='jpeg'||$ext=='JPG'||$ext=='JPEG')
               {
                  $src=imagecreatefromjpeg($file);
               } 
                if($ext=='png'|| $ext=='PNG')
               {
                  $src=imagecreatefrompng($file);
               }
                if($ext=='gif'||$ext=='GIF')
               {
                $src=imagecreatefromgif($file);
               }

               list($width_min,$height_min)=getimagesize($file);
                imagecopyresampled($src, $src, 0, 0, 0, 0, $width_min, $height_min, 
                  $width_min, $height_min);  
             }
             imagejpeg($src,$destinationPath.$newFileName,80);
			  
			  
			  $add =new Advertisement();
               $add->title= $request->title;
		      $add->description= $request->description;

              $add->images= $newFileName;
			  $add->link= $request->link;
			 
			   $add->status= $request->status;
              $add->created_at= date('Y-m-d H:i:s');
             
              $add->save();
			   $res =array('flag'=>true,'msg'=>'Data inserted successfully');
		  }
           return response()->json($res);
       }
     public function store_advertisement_succeess(Request $request)
       {
          Session::flash('flash_message', $request->msg);
              return redirect('/manage_advertisement');
       }
    public function get_advertisement_data_by_id(Request $request)
		{
			$data =Advertisement  :: where('id',$request->id)->orderby('id','desc')->first();
			  return response()->json($data);
		}
		public function delete(Request $request)
       {
          $delete = Advertisement  :: where('id', '=', $request->id)->delete(); 
          return response()->json(array('flag'=>true));
       }
        public function delete_advertisement_succeess(Request $request)
       {
            Session::flash('flash_message', 'Voucher Deleted Successfully');
              return redirect('/manage_advertisement');
       }
}
