<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    //
	public function login(Request $request){
		if($request->isMethod('post')){
			$data = $request->input();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
				$user_id = auth()->user()->id;
				//echo "success"; die;
				/*Session::put('adminSession',$data['email']);*/
				return redirect()->route('dashboard', $user_id);
			}else{
				//echo "Faild"; die;
				return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
			}
		}
		return view('admin.login');
		
	}

	public function dashboard(User $user){
		/*if (Session::has('adminSession')){
			//perform all dashboard task
		}else{
			return redirect('/admin')->with('flash_message_error','Please Login to Access');
		}*/
		$data['user'] = $user;

		return view('admin.dashboard', $data);
	}
	
	public function settings(User $user){
		$data['user'] = $user;

		return view('admin.settings', $data);
	}
	
	public function postSettings(Request $request, User $user){
		$request['val_old_password'] = Hash::make($request->val_old_password);
		// validate required fields
		$this->validate($request, [
			'val_old_password' => 'required|exists:users,password',
			'val_new_password' => 'required|same:password_confirm|min:6',
			'val_new_password_confirm' => 'required',
		]);
		
		$admin_profile = User::find($user->id);
		$admin_profile->password = Hash::make($request->val_new_password);
		$admin_profile->save();

		return redirect()->view('admin.settings')->with('flash_message_success','Password changed Successfully');
	}
	
	public function logout(){
		Session::flush();
		return redirect('/admin')->with('flash_message_success','Log Out Successful');
	}
}
