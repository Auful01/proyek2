<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JunkUser;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.home');
    }

    public function service()
    {
        return view('company.service');
    }

    public function about()
    {
        return view('company.about');
    }

    public function contact()
    {
        return view('company.contact');
    }

    public function pengepul()
    {
        return view('company.pengepul');
    }

    public function penjual()
    {
        $data = JunkUser::with(['junk.junk_category', 'user', 'order'])->doesnthave('order')->get();
        
        return view('company.penjual', compact('data'));
    }
}
