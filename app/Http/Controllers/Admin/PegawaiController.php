<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('admin.pegawai.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_req = $request->all();
        // remove _token from data_req
        unset($data_req['_token']);
        $data = Pegawai::create($data_req);
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pegawai::findOrFail($id);
        return view('admin.pegawai.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_req = $request->all();
        // remove _token from data_req
        unset($data_req['_token']);
        unset($data_req['_method']);
        $data = Pegawai::findOrFail($id);
        $data->update($data_req);
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // destroy pegawai
        $pegawai = Pegawai::destroy($id);
        return redirect()->route('pegawai.index');
    }
}
