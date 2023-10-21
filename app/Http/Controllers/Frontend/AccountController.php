<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function registerForm()
    {
        return view('frontend.account.register');
    }

    public function register()
    {
        $user = new User;
        $user->validateAndCreate();
        
        if(Auth::attempt($user))
        {
            return view('backend.admin.dashboard');
        }
    }

    public function loginForm()
    {
        return view('frontend.account.login');
    }

    public function login()
    {

        $credentials = request()->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/admin/dashboard');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
