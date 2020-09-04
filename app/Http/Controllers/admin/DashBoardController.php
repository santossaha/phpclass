<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function dashboard(){
        return view('Backend.dashboard');
    }
    public function login(){
        return view('Backend.login');
    }
    public function auth(){
        return view('backend.layout.login');
    }
    public function register(){
        return view('backend.layout.register');
    }

    /*public function auth(Request $request)
    {
    $msg = [
            'f_name.required' => 'Enter Your  First Name',
            'l_name.required' => 'Enter Your Last Name',
            'email.required' => 'Enter Your Email',
            'password.required' => 'Enter Your Password',
            'c_password.required' => 'Enter Your Confirm Password',
        ];
        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'c_password' => 'required',
        ],$msg);
        $fname = $request->get('f_name');
        $lname = $request->get('l_name');
        $name = $fname.' '.$lname;


        $save = new User();
        $save->name = $name;
        $save->email = $request->get('email');
        $save->password = bcrypt($request->get('password'));
        $save->role = 'Admin';
        $save->type = '1';
        $save->status = 'Active';
        $save->email_verification = 1;
        $save->hash_number = md5('John Doe');
        $save->save();
        return redirect()->route('login');
        //return redirect()->back()->with('success','Admin Added Successfully !!!');
    }*/

    public function Check_login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        $email = $request->get('username');
        $pass = $request->get('password');
        //echo $pass;die;
        if (Auth::attempt(array('email' => $email, 'password' => $pass,'role'=>'Admin'))) {
            $role = Auth::user()->role;
            if($role=='Admin') {
                return redirect(route('admin::dashboard'));
            }
        } else {
            return redirect()->back()->with('error', 'Login Failed !!! Please check Your Email and Password.');
        }
    }

    //Logout

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('news');
    }

}
