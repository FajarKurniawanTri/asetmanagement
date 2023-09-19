<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
{
    Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'role' => 'required|in:user,admin' // Pastikan hanya 'user' atau 'admin'
    ])->validate();

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role // Set peran sesuai input form
    ]);

    return redirect()->route('login');
}

    

    public function login()
    {
        return view('auth/login');
    }
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
    
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        
        // Tambahkan kondisi untuk pengarahan berdasarkan peran (role) pengguna
        if (Auth::user()->role == 'user') {
            return redirect()->route('u_dashboard');
        } elseif (Auth::user()->role == 'admin') {
            return redirect()->route('dashboard');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/login');
    }
 
}
