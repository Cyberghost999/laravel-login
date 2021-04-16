<?php
namespace App\Http\Controllers\user;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
Use Redirect;
use Input;


use DB;
class UserController extends Controller{

	public function home(){
		return \View::make('home');
	}

	public function getLogin(){
		return \View::make('login');
	}

	public function getRegister(){
		return \View::make('signup');
	}

	public function postLogin(Request $request){
		$Name = $request->input('Name');
		$Password = $request->input('Password');

		


			$ValidateUser=DB::table('users')->where(['username'=>$Name,'password'=>$Password])->get();

			if(count($ValidateUser)>0)
			{	
				session_start();
				$_SESSION['data'] = $ValidateUser;
				return redirect('/dashboard');
			    
					
				}
			else{
				return \View::make('login');
			}

			

			
		}
	


	public function postRegister(Request $request){
        $username = $request->input('name');
		$email = $request->input('email');
		$contact = $request->input('contact');
		$password = $request->input('password');
		$address = $request->input('address');
		$city = $request->input('city');
		$country = $request->input('country');
		$zip = $request->input('zip');
		$state = $request->input('state');

		$data=array('username'=>$username,'email'=>$email,'contact'=>$contact,'password'=>$password, 'address'=>$address,'city'=>$city,'country'=>$country,'zip'=>$zip, 'state'=>$state);

		// print_r($data);
		$duplicate=DB::table('users')->where(['email'=>$email])->get();
		if (count($duplicate)>0){
			echo '<script type="text/javascript">alert("Email Already Exists"); </script>';
			return view('signup');
		}
		DB::table('users')->insert($data);

		return Redirect::to('/login');

}
	public function dash(Request $request){
		session_start();
		if (isset($_SESSION['data'])){
			return view('dashboard',);
		}
		else {
			return redirect('/login');
		}
	}
	public function logout(){
		session_start();
		session_destroy();
		return redirect('/');
	}
}

?>