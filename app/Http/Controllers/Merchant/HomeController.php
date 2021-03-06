<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Module;
use App\Http\Controllers\Controller;
use Auth; 
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
       // $this->middleware('auth:admin');
	  //echo Auth::id();exit;
	 //  Session::put('user_id',  Auth::id());
	
	  /* if(empty(Session::get('user_id')))
	   {
		 return redirect()->action('Merchant\LoginController@merchant_login');
	   }*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if(empty(Auth::id()))
	   {
		 return redirect()->action('Merchant\LoginController@merchant_login');
	   }
		 // $this->modules = $this->get_modules();
		// print_r($this->modules);exit;
		
        return view('merchant/home');
    }
	  public function logout(Request $request){

       // $request->session()->flush();
        Auth::logout();
        auth()->logout();
         Session::forget('email');
       return redirect('/merchant');
    }
}
