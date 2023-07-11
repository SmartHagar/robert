<?php

namespace App\Http\Controllers\Admin;

use App\Models\Honorer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personal;

class HonorerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Honorer::all();
        return view('admin.honorer.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal = Personal::with(['pegawai', 'honorer'])
            ->whereDoesntHave('pegawai')
            ->whereDoesntHave('honorer')
            ->get();
        return view('admin.honorer.create', [
            'personal' => $personal
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
        $data = Honorer::create($data_req);
        return redirect()->route('honorer.index');
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
        $data = Honorer::findOrFail($id);
        $personal = Personal::all();
        return view('admin.honorer.edit', [
            'data' => $data,
            'personal' => $personal
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
        $data = Honorer::findOrFail($id);
        $data->update($data_req);
        return redirect()->route('honorer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // destroy honorer
        $honorer = Honorer::destroy($id);
        return redirect()->route('honorer.index');
    }
}
