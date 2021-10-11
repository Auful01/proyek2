<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JunkRequest;
use App\Models\Junk;
use App\Models\CategoryJunk;

class JunkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Junk::with(['category_junk'])->get();

        return view('admin.junk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ['' => '-- Pilih Kategori --'] + CategoryJunk::pluck('category_name', 'id')->toArray();
        return view('admin.junk.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JunkRequest $request)
    {
        $payload = $request->all();
        Junk::create($request->all());

        return redirect('junk')->with('status', 'Junk successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Junk::with(['category_junk'])->findOrFail($id);
        $category = ['' => '-- Pilih Kategori --'] + CategoryJunk::pluck('category_name', 'id')->toArray();
        return view('admin.junk.edit', compact('data', 'category'));
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
        $payload = $request->all();
        $data = Junk::findOrfail($id);

        $data->update($payload);
        return redirect('junk')->with('status', 'Junk successfully changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Junk::destroy($id);
        return redirect('junk')->with('status', 'Junk successfully deleted!');
    }
}
