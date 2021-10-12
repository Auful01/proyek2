<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function layanan()
    {
        return view('user.layanan');
    }

    public function tentang()
    {
        return view('user.tentang');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function registrasi()
    {
        return view('user.register');
    }

    public function loginUser()
    {
        return view('user.login');
    }

    public function marketplace()
    {
        return view('user.marketplace');
    }
}
