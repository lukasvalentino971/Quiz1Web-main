<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\januarysold;

class DataTransaction extends Controller
{
    function index()
    {
        $data=januarysold::all();
        return view('Table2',['data' => $data]);
    }
}
