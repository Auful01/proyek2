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
        return view('dashboard.admin.penjual.index', compact('data'));
    }

    public function edit($id)
    {
        $data = User::penjual()->find($id);
        return view('dashboard.admin.penjual.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::penjual()->find($id);
        $data->update($request->all());
        return redirect()->route('admin.penjual');
    }
}
