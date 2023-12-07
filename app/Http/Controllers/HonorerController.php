<?php

namespace App\Http\Controllers;

use App\Models\Honorer;
use Illuminate\Http\Request;

class HonorerController extends Controller
{
    function index()
    {
        $data = Honorer::all();
        return view('user.honorer.index', [
            'data' => $data
        ]);
    }
}
