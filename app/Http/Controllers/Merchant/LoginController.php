<?php

namespace App\Http\Controllers\Merchant;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	protected function attemptLogin(Request $request)
	{
		$user = \App\Merchant::whereUsername($request->username)
					->wherePassword(md5($request->password))
					->first();

//if  (Auth::attempt(['username' => $request->username, 'password' => md5($request->password)])) {
		if ($user) {
			Auth::login($user);
			 $data['ResponseCode'] = "200";
		   $data['ResponseMessage'] = "Successfully login";
		    
		}else{
			 $data['ResponseCode'] = "400";
		   $data['ResponseMessage'] = "Invalid credentials";
		}
       return response()->json($data);
	}
	
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
}
