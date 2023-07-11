<?php

namespace App\Http\Controllers\Admin;

use App\Models\Absensi;
use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tgl_absen = $request->tgl_absen;
        $data = Personal::leftJoin('absensi', function ($join) use ($tgl_absen) {
            $join->on('personal.id', '=', 'absensi.personal_id')
                ->whereRaw('absensi.tgl_absen like "%' . $tgl_absen . '%"');
        })
            ->select('personal.*', 'absensi.tgl_absen', 'absensi.keterangan', 'absensi.jam_masuk', 'absensi.jam_pulang', 'absensi.id as absensi_id')
            ->orderBy('personal.nama', 'asc')
            ->get();
        return view('admin.absensi.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_req = $request->all();
        // remove _token from data_req
        unset($data_req['_token']);
        $data = Absensi::create($data_req);
        return redirect()->route('absensi.index');
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
        $data = Absensi::findOrFail($id);
        return view('admin.absensi.edit', [
            'data' => $data,
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
        $data = Absensi::findOrFail($id);
        $data->update($data_req);
        return redirect()->route('absensi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // destroy absensi
        $absensi = Absensi::destroy($id);
        return redirect()->route('absensi.index');
    }
}
