<?php

namespace App\Http\Controllers\Admin;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jabatan;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Personal::all();
        return view('admin.personal.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('admin.personal.create', [
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_req = $request->all();
        // remove _token from data_req
        unset($data_req['_token']);
        $data = Personal::create($data_req);
        return redirect()->route('personal.index');
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
        $data = Personal::findOrFail($id);
        $jabatan = Jabatan::all();
        return view('admin.personal.edit', [
            'data' => $data,
            'jabatan' => $jabatan
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
        $data = Personal::findOrFail($id);
        $data->update($data_req);
        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // destroy personal
        $personal = Personal::destroy($id);
        return redirect()->route('personal.index');
    }
}
