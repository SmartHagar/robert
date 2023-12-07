<?php

namespace App\Http\Controllers;

use App\Models\Honorer;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $honorer = Honorer::count();
        $pegawai = Pegawai::count();
        return view('user.dashboard.index', [
            'honorer' => $honorer,
            'pegawai' => $pegawai
        ]);
    }
}
