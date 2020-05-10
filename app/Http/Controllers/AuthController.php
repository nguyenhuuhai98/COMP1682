<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }


    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
