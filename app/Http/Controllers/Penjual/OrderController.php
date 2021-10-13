<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JunkUser;

class OrderController extends Controller
{
    public function index()
    {
        $data = JunkUser::with(['junk.junk_category', 'user', 'user_junk'])->where('user_id', auth()->user()->id);
        return view('dashboard.penjual.order', compact('data'));
    }
}
