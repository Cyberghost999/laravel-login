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
        $username = $request->input('Name');
		$email = $request->input('Email');
		$contact = $request->input('Contact');
		$password = $request->input('Password');
		$address = $request->input('address');
		$city = $request->input('city');
		$country = $request->input('country');
		$zip = $request->input('zip');

		$data=array('username'=>$name,'email'=>$email,'contact'=>$contact,'password'=>$password, 'address'=>$address,'city'=>$city,'country'=>$country,'zip'=>$zip);

		DB::table('users')->insert($data);

		return \Redirect::to('/login');

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
}

?>