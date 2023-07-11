<?php

namespace App\Http\Controllers\Pimpinan;

use App\Models\Honorer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HonorerController extends Controller
{
    function index()
    {
        $data = Honorer::all();
        return view('pimpinan.honorer.index', [
            'data' => $data
        ]);
    }
}
