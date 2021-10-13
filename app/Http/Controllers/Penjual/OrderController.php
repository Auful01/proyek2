<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JunkUser;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::with(['user', 'user_junk' => function ($query) {
            $query->with('junk.junk_category', 'user');
        }])->whereHas('user_junk', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        return view('dashboard.penjual.order.index', compact('data'));
    }
}
