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
	  // echo Auth::id();exit;
	  
	   if(empty(Auth::id()))
	   {
		  return view('merchant.login');
	   }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 // $this->modules = $this->get_modules();
		// print_r($this->modules);exit;
		
        return view('merchant/home');
    }
	  public function logout(Request $request){

        
        Auth::logout();
        auth()->logout();
         Session::forget('email');
       return redirect('/merchant');
    }
}
