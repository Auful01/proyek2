<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLoginAdmin()
    {
        return view('auth.admin.login');
    }

    public function showLoginUser()
    {
        return view('auth.user.login');
    }

    public function showRegister()
    {
        return view('auth.user.register');
    }

    public function login(Request $request)
    {
        if(auth()->attempt(array('email' => $request->email, 'password' => $request->password)))
        {
            // if(auth()->user()->status = 'NONAKTIF'){
            //     return redirect()->back()->with('error','Akun anda sedang di verifikasi oleh admin, Dimohon menunggu.');
            // }else{
                if (auth()->user()->role == 'adm') {
                    return redirect()->route('admin.dashboard');
                }else if(auth()->user()->role == 'pgl'){
                    return redirect()->route('pengepul.dashboard');
                } else if(auth()->user()->role == 'slr'){
                    return redirect()->route('penjual.dashboard');
                }
        }else{
            return redirect()->back()->with('error','Email atau password salah.');
        }
    }

    public function register(Request $request)
    {
        $payload = $request->all();
        $payload['password'] = \Hash::make($payload['password']);
        User::create($payload);
        return redirect()->back()->with('success', 'Register berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
