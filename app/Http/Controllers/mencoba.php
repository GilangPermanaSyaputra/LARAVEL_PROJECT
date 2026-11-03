<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mencoba extends Controller
{
    public function index()
    {
        $nama = 'Gilang ganteng';
        return view('coba.nyoba',['nama' => $nama]);
    }
}
