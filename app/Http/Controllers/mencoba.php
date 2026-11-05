<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class mencoba extends Controller
{
    public function index(): View
    {
        $nama = 'Gilang';
$umur = 20;

        return view('coba.nyoba', ['nama' => $nama, 'umur' => $umur]);
    }
 
}
