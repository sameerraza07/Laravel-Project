<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            // Authentication passed
            return redirect()->route('dashboard');
        }
         
        // Authentication failed
        return redirect('login')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        if(auth::check())
        {
          return view('dashboard');
        }else{
            return redirect()->route('login');

        }
    }
    public function innerPage()
    {
        if(Auth::check())
        {
          return view('inner');
        }else{
            return redirect()->route('login');

        }
    }
      
    public function logout()
    {
       Auth::logout();
          return view('login');

    }

}
