<?php

namespace App\Http\Controllers;

use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Dashboard()
    {
        if(Session::has('user')) {
            return view('dashboard');
        }
        return redirect('/login');
    }
    
    public function Register(Request $request)
    {
        if(!($user = User::where(['email'=>$request->email])->first())) {
            $user = User::where(['number'=>$request->number])->first();
        }
        if(!$user) {
            if($request->psw == $request->rpsw){
                $register = new User();
                $register->name = $request->name;
                $register->email = $request->email;
                $register->number = $request->number;
                $register->address = $request->address;
                $register->password = Hash::make($request->psw);
                $register->save();
            }else{
                return redirect()->back()->with('msg','password not match..!');
            }
            return redirect('/login')->with('msg','You Have Successfully Registered..!');
        } else {
            return redirect('/login')->with('msg','User Already Exist..!');
        }
        
    }

    public function Login(Request $request)
    {
        if(!($user = User::where(['email'=>$request->userid])->first())) {
            $user = User::where(['number'=>$request->userid])->first();
        }
        if (!$user || !Hash::check($request->psw, $user->password)) {
            return redirect()->back()->with('msg','Invalid UserId or Password..!');
        } else {
            $request->session()->put('user', $user);
            return redirect('/dashboard')->with('msg','You Have Successfully Logged In');
        }
    }

    public function LoginV2(Request $request)
    {
        $user = User::where(['email'=>$request->email,'number'=>$request->number])->first();
        if (!$user || !Hash::check($request->psw, $user->password)) {
            return redirect()->back()->with('msg','Please Enter Correct Credentials..!');
        } else {
            $request->session()->put('user', $user);
            return redirect('/dashboard')->with('msg','You Have Successfully Logged In');
        }
    }

}
