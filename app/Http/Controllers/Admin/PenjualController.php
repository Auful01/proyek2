<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penjual;
use App\Models\User;

class PenjualController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::penjual()->get();
        return view('dashboard.admin.Penjual.index', compact('data'));
    }
}
