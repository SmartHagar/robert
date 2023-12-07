<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index()
    {
        $data = Pegawai::all();
        return view('user.pegawai.index', [
            'data' => $data
        ]);
    }
}
