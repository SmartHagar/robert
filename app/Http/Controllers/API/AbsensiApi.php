<?php

namespace App\Http\Controllers\API;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Absensi;

class AbsensiApi extends Controller
{
    function index(Request $request)
    {
        $tgl_absen = $request->tgl_absen;
        $data = Personal::leftJoin('absensi', function ($join) use ($tgl_absen) {
            $join->on('personal.id', '=', 'absensi.personal_id')
                ->whereRaw('absensi.tgl_absen like "%' . $tgl_absen . '%"');
        })
            ->select('personal.*', 'absensi.tgl_absen', 'absensi.keterangan', 'absensi.jam_masuk', 'absensi.jam_pulang', 'absensi.id as absensi_id')
            ->orderBy('absensi.tgl_absen', 'asc')
            ->get();
        return $data;
    }

    // store absensi
    function store(Request $request)
    {
        // check absensi where tgl_absen = $request->tgl_absen and personal_id = $request->personal_id
        $checkAbsensi = Absensi::where('tgl_absen', $request->tgl_absen)
            ->where('personal_id', $request->personal_id)
            ->first();
        // if absensi not found
        $data_req = $request->all();
        if ($checkAbsensi) {
            // destroy absensi
            $checkAbsensi->delete();
        }
        // return 'absensi';
        $data = Absensi::create($data_req);
        return $data;
    }
}
