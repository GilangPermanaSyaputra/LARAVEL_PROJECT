<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class mencoba extends Controller
{
    public function index(): View
    {
        $nama = 'Gilang ganteng';

        return view('coba.nyoba', ['nama' => $nama]);
    }
}
