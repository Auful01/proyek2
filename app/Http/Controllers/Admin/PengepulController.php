<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengepul;
use App\Models\User;

class PengepulController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::pengepul()->get();
        return view('dashboard.admin.pengepul.index', compact('data'));
    }
}
