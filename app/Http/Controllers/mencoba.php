<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class mencoba extends Controller
{
    public function index(string $woi): View
    {
        $umur = 20;

        return view('coba.nyoba', [
            'namq' => $woi,
            'umur' => $umur,
        ]);
    }
}
