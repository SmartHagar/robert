<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index()
    {
        $data = Pegawai::all();
        return view('pimpinan.pegawai.index', [
            'data' => $data
        ]);
    }
}
