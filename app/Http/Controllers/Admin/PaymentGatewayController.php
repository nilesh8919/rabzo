<?php
namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
use DB;

use App\Option;

class PaymentGatewayController extends Controller
{
    //
    public function manage_payumoney(Request $request)
    {
    	error_reporting(0);
    	$data1 = Option :: where('option_name','admin_payu_enabled')->first(); 
    	$data['admin_payu_enabled'] = $data1->option_value;
    	$data2= Option :: where('option_name','admin_payu_mode')->first(); 
    	$data['admin_payu_mode'] = $data2->option_value;
    	$data3 = Option :: where('option_name','admin_payu_key')->first(); 
    	$data['admin_payu_key'] = $data3->option_value;
    	$data4 = Option :: where('option_name','admin_payu_salt')->first(); 
    	$data['admin_payu_salt'] = $data4->option_value;

    

    	 return view('admin.manage_payumoney',[
                'results'=> $data,
				
                 ]);
    }
	
	 public function store_payumoney(Request $request)
       {
			 if(count(Option :: where('option_name','admin_payu_enabled')->get()) > 0)
			 {
				 Option :: where('option_name','admin_payu_enabled')
				 ->update([
					 'option_value' => $request->admin_payu_enabled,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_payu_enabled',
					 'option_value' => $request->admin_payu_enabled,
				 ]);
			 }

			  if(count(Option :: where('option_name','admin_payu_mode')->get()) > 0)
			 {
				 Option :: where('option_name','admin_payu_mode')
				 ->update([
					 'option_value' => $request->admin_payu_mode,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_payu_mode',
					 'option_value' => $request->admin_payu_mode,
				 ]);
			 }

			  if(count(Option :: where('option_name','admin_payu_key')->get()) > 0)
			 {
				 Option :: where('option_name','admin_payu_key')
				 ->update([
					 'option_value' => $request->admin_payu_key,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_payu_key',
					 'option_value' => $request->admin_payu_key,
				 ]);
			 }

			  if(count(Option :: where('option_name','admin_payu_salt')->get()) > 0)
			 {
				 Option :: where('option_name','admin_payu_salt')
				 ->update([
					 'option_value' => $request->admin_payu_salt,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_payu_salt',
					 'option_value' => $request->admin_payu_salt,
				 ]);
			 }
                     $msg ="data updated";

         
			    Session::flash('flash_message', $msg);
              return redirect('/manage_payumoney');
       }
       public function manage_paytm(Request $request)
    {
    	error_reporting(0);
    	$data1 = Option :: where('option_name','admin_paytm_enabled')->first(); 
    	$data['admin_paytm_enabled'] = $data1->option_value;
    	$data2= Option :: where('option_name','admin_paytm_mode')->first(); 
    	$data['admin_paytm_mode'] = $data2->option_value;
    	$data3 = Option :: where('option_name','admin_paytm_key')->first(); 
    	$data['admin_paytm_key'] = $data3->option_value;
    	$data4 = Option :: where('option_name','admin_paytm_salt')->first(); 
    	$data['admin_paytm_salt'] = $data4->option_value;

    

    	 return view('admin.manage_paytm',[
                'results'=> $data,
				
                 ]);
    }
	
	 public function store_paytm(Request $request)
       {
			 if(count(Option :: where('option_name','admin_paytm_enabled')->get()) > 0)
			 {
				 Option :: where('option_name','admin_paytm_enabled')
				 ->update([
					 'option_value' => $request->admin_paytm_enabled,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_paytm_enabled',
					 'option_value' => $request->admin_paytm_enabled,
				 ]);
			 }

			  if(count(Option :: where('option_name','admin_paytm_mode')->get()) > 0)
			 {
				 Option :: where('option_name','admin_paytm_mode')
				 ->update([
					 'option_value' => $request->admin_paytm_mode,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_paytm_mode',
					 'option_value' => $request->admin_paytm_mode,
				 ]);
			 }

			  if(count(Option :: where('option_name','admin_paytm_key')->get()) > 0)
			 {
				 Option :: where('option_name','admin_paytm_key')
				 ->update([
					 'option_value' => $request->admin_paytm_key,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_paytm_key',
					 'option_value' => $request->admin_paytm_key,
				 ]);
			 }

			  if(count(Option :: where('option_name','admin_paytm_salt')->get()) > 0)
			 {
				 Option :: where('option_name','admin_paytm_salt')
				 ->update([
					 'option_value' => $request->admin_paytm_salt,
				 ]);
			 }else{
				 Option :: insert([
					'option_name' => 'admin_paytm_salt',
					 'option_value' => $request->admin_paytm_salt,
				 ]);
			 }
                    $msg ="data updated";

         
			    Session::flash('flash_message', $msg);
              return redirect('/manage_paytm');
       }
        

}
