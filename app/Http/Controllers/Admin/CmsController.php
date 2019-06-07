<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Banner;
use App\Option;
use App\Faq;
use Illuminate\Support\Facades\Input;
class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
		//print_r($this->modules);exit;
    }
    public function manage_cms(Request $request)
	{
error_reporting(0);
              $data['website_title'] = Option :: where('option_name','website_title')->pluck('option_value');

             $data['website_logo'] = Option :: where('option_name','website_logo')->pluck('option_value');
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
         
	
              return view('admin.manage_cms',[
                'results'=> $data,
				
                 ]);
	}
    public function manage_banner(Request $request)
      {
         
            $banner =DB::table('banners')->orderby('id','desc')->get();
              return view('admin.add_banner',[
                'banner'=> $banner,
				
                 ]);
      }
     public function storebanner(Request $request)
       {
       
         

             $file=$request->file('bannername');
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

  
              $add_banner= new Banner();
              $add_banner->bannername =$newFileName;
              $add_banner->line1= $request->line1;
              $add_banner->line2= $request->line2;
			 
              $add_banner->bannertext= $request->bannertext;
              $add_banner->status="Active";
              $add_banner->save();

            return response()->json(array('flag'=>true));
 

       }

         public function add_banner_succeess(Request $request)
       {
         
              Session::flash('flash_message', 'Banners Added Successfully');
              return redirect('/manage_banner');

       }
	    public function delete_banner(Request $request)
       {
          
              $imagename = DB::table('banners')->where('id', '=', $request->banner_id)->get(); 
          
             $imagepath = "public/uploadimages/".$imagename[0]->bannername;

            if(unlink($imagepath)){
                  
                 DB::table('banners')->where('id', '=', $request->banner_id)->delete();
                  return response()->json(array('flag'=>true));
            }


       }
	   public function delete_banner_succeess(Request $request)
       {
         
            Session::flash('flash_message', 'Banner Delete Successfully');
           return redirect('/manage_banner');

       }
	    public function active_banner(Request $request)
      {

          $status = DB::table('banners')->where('id', '=', $request->user_id)->get();

            if($status[0]->status=="Active")

            {
              $status='Deactive';
              $flag='true';
            }else{

               $status='Active';
                $flag='false'; 
            } 
                $active=  DB::table('banners')
                ->where('id', $request->user_id)
                ->update([
                        'status' => $status,
                   ] );

                return response()->json(array('flag'=> $flag));
            

       } 
	   public function manage_faq(Request $request)
      {
         $faq =DB::table('faqs')->orderby('id','desc')->get();
              return view('admin.faq',[
                 'results'=> $faq,
				
              ]);
      }
	 
	  public function storefaqs(Request $request)
       {
            $data=$request->all();
           unset($data['_token']);
           $result1_details=$this->mapArrayToObject(new Faq(),$data);
           $result1_details->save();
           return response()->json(array('flag'=>true));
       }
	    public function store_faq_succeess(Request $request)
       {
          Session::flash('flash_message', 'Faqs Added Successfully');
              return redirect('/manage_faq');
       }
	    public function mapArrayToObject($object, $array)
    {
            foreach($array as $key => $value) {
                  $object->$key = $value;
            }
           return $object;
    }
	 public function delete_faq(Request $request)
       {
          $delete = DB::table('faqs')->where('id', '=', $request->id)->delete(); 
          return response()->json(array('flag'=>true));
       }
        public function delete_faq_succeess(Request $request)
       {
            Session::flash('flash_message', 'Faq Deleted Successfully');
              return redirect('/manage_faq');
       }
 public function store_cms(Request $request)
{
     $data=$request->all();
           unset($data['_token']);
          
   if(isset($request->website_title)){
          Option :: where('option_name','website_title')->update(['option_value' => $request->website_title]);
         }

              if(Input::hasFile('website_logo')){
                 $file = $request->file('website_logo');
				 $filename = $file->getClientOriginalName();
                     $newFileName = time().'_'.$filename; 
                        $destinationPath = 'public/uploadimages/';
                       $file->move($destinationPath, $newFileName);
                    
                    Option :: where('option_name','website_logo')->update(['option_value' => $newFileName]);
			   }
            if(isset($request->website_address)){
             Option :: where('option_name','website_address')->update(['option_value' => $request->website_address]);
         }
           if(isset($request->website_contact_email)){
          Option :: where('option_name','website_contact_email')->update(['option_value' => $request->website_contact_email]);
         }
           if(isset($request->website_contact_phone)){
          Option :: where('option_name','website_contact_phone')->update(['option_value' => $request->website_contact_phone]);
         }

           if(Input::hasFile('first_step_image')){
                 $file = $request->file('first_step_image');
				 $filename = $file->getClientOriginalName();
                     $newFileName = time().'_'.$filename; 
                        $destinationPath = 'public/uploadimages/';
                       $file->move($destinationPath, $newFileName);
                       Option :: where('option_name','first_step_image')->update(['option_value' => $newFileName]);
			   }
if(Input::hasFile('second_step_image')){
                 $file = $request->file('second_step_image');
				 $filename = $file->getClientOriginalName();
                     $newFileName = time().'_'.$filename; 
                        $destinationPath = 'public/uploadimages/';
                       $file->move($destinationPath, $newFileName);
                        Option :: where('option_name','second_step_image')->update(['option_value' => $newFileName]);
			   }

if(Input::hasFile('third_step_image')){
                 $file = $request->file('third_step_image');
				 $filename = $file->getClientOriginalName();
                     $newFileName = time().'_'.$filename; 
                        $destinationPath = 'public/uploadimages/';
                       $file->move($destinationPath, $newFileName);
                      Option :: where('option_name','third_step_image')->update(['option_value' => $newFileName]);
			   }
if(isset($request->first_step_heading)){
          Option :: where('option_name','first_step_heading')->update(['option_value' => $request->first_step_heading]);
         }
if(isset($request->first_step_content)){
          Option :: where('option_name','first_step_content')->update(['option_value' => $request->first_step_content]);
         }
if(isset($request->second_step_heading)){
          Option :: where('option_name','second_step_heading')->update(['option_value' => $request->second_step_heading]);
         }
if(isset($request->second_step_content)){
          Option :: where('option_name','second_step_content')->update(['option_value' => $request->second_step_content]);
         }

if(isset($request->third_step_heading)){
          Option :: where('option_name','third_step_heading')->update(['option_value' => $request->third_step_heading]);
         }
if(isset($request->third_step_content)){
          Option :: where('option_name','third_step_content')->update(['option_value' => $request->third_step_content]);
         }
           return response()->json(array('flag'=>true));
}
  public function manage_footer(Request $request)
  {
	   return view('admin.manage_footer',[
              //  'banner'=> $banner,
				
                 ]);
  }
  public function store_cms_success(Request $request)
       {
          Session::flash('flash_message', 'Faqs Added Successfully');
              return redirect('/manage_cms');
       }

}
