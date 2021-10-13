<?php

namespace App\Http\Controllers\Pengepul;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::with(['user', 'user_junk' => function ($query) {
            $query->with('junk.junk_category', 'user');
        }])->where('user_id', auth()->user()->id)->get();
        return view('dashboard.pengepul.order.index', compact('data'));
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        $payload['user_id'] = auth()->user()->id;
        $data = Order::create($payload);

        return redirect()->route('pengepul.order');
    }

    public function edit($id)
    {
        $data = Order::with(['user', 'user_junk' => function ($query) {
            $query->with('junk.junk_category', 'user');
        }])->findOrFail($id);
        return view('dashboard.pengepul.order.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $payload = $request->all();
        
        $order = Order::findOrFail($id);
        $order->update($payload);

        return redirect()->route('pengepul.order');
    }
}
