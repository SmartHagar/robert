<?php

namespace App\Http\Controllers\API;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
