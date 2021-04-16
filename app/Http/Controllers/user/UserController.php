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
				$_SESSION['name'] = $Name;
				return \View::make('dashboard');
			    
					
				}
			else{
				return \View::make('login');
			}

			

			
		}
	


	public function postRegister(Request $request){
        $Name = $request->input('Name');
		$Email = $request->input('Email');
		$Contact = $request->input('Contact');
		$Password = $request->input('Password');

		$data=array('username'=>$Name,'email'=>$Email,'contact'=>$Contact,'password'=>$Password);

		DB::table('users')->insert($data);

		return \Redirect::to('/login');

}
	public function dash(Request $request){

		if (isset($_SESSION['data'])){
			$data = $request->session()->all();
			return view('dashboard', compact('data'));
		}
	}
}

?>