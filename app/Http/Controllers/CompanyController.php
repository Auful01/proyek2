<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
