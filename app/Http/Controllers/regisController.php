<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class regisController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('Auth.register');
    }

    public function tambahRegis(Request $request){


        $data=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Bcrypt($request->password)
        ]);
        return redirect('/login')->with('success', 'Registrasi berhasil');
    }

    public function loginpage(){
        return view('Auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        // dd($request);
        $credential=$request->only('email','password');

        if(Auth::attempt($credential)){
            return redirect('/');
        }
        return redirect('/login')->with('success', 'Login details are not valid');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');

    }

}
