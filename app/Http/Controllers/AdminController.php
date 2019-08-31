<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
class AdminController extends Controller
{
    //
	public function login(Request $request){
		if($request->isMethod('post')){
			$data = $request->input();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
				//echo "success"; die;
				/*Session::put('adminSession',$data['email']);*/
				return redirect::action('AdminController@dashboard');
			}else{
				//echo "Faild"; die;
				return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
			}
		}
		return view('admin.login');
		
	}

	public function dashboard(){
		/*if (Session::has('adminSession')){
			//perform all dashboard task
		}else{
			return redirect('/admin')->with('flash_message_error','Please Login to Access');
		}*/
		return view('admin.dashboard');
	}
	
	public function settings(){
		return view('admin.settings');
	}
	
	public function chkpassword(Request $request){
		$data = $request->all();
		$val-old-password = $data['val-old-password'];
		$check_password = User::where(['admin'=>'1'])->first();
		if(Hash::check($val-old-password,$check_password->password)){
			echo "true"; die;
		}else {
			echo "false"; die;
		}
	}
	
	public function logout(){
		Session::flush();
		return redirect('/admin')->with('flash_message_success','Log Out Successful');
	}
}
