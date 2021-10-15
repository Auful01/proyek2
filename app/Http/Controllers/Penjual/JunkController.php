<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JunkCategory;
use App\Models\Junk;
use App\Models\JunkUser;

class JunkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JunkUser::with(['user', 'junk.junk_category'])->where('user_id', auth()->user()->id)->get();
        return view('dashboard.penjual.junk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = JunkCategory::active()->get();
        $junk = Junk::get();
        return view('dashboard.penjual.junk.create', compact('category', 'junk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $payload['user_id'] = auth()->user()->id;
        $data = JunkUser::create($payload);
        return redirect()->route('penjual.barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = JunkUser::with(['user', 'junk.junk_category'])->find($id);
        return view('dashboard.penjual.junk.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = JunkCategory::active()->get();
        $junk = Junk::get();
        $data = JunkUser::with(['user', 'junk.junk_category'])->find($id);
        return view('dashboard.penjual.junk.edit', compact('data', 'category', 'junk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = JunkUser::find($id);
        $data->update($request->all());
        return redirect()->route('penjual.barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JunkUser::find($id);
        $data->delete();
        return redirect()->route('penjual.barang');
    }
}
