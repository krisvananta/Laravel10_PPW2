<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\WelcomeEmail; // Import your Mailable class
use Illuminate\Support\Facades\Mail; // Import the Mail facade

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginRegisterController extends Controller
{
    // instatiate LoginRegisterController instance
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'dashboard'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $emailData = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $request->password
        ];

        Mail::to($user->email)->send(new WelcomeEmail($emailData));

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'You have successfully registered & logged in!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd('User authenticated:', Auth::user(), $request->session()->all());
            return view('auth.dashboard')->with('success', 'You have successfully logged in!');
        }
        
        // If authentication fails, return with error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }

    public function dashboard()
    {
        return view('auth.dashboard');
        
        // dd(Auth::user());
        // if (auth()->check()) {
        //     return view('auth.dashboard');
        // }

        // return redirect()->route('login')->withErrors([
        //     'email' => 'You must be logged in to access the dashboard.',
        // ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'You have successfully logged out bb!');
    }

}
