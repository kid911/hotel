<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Hotel',
            $date = Carbon::now()->format('j F Y'),
        'date' => $date,
        ];

        // Tampilkan view "pelayanan.pelayanan" dengan data yang telah diproses
        return view('about.about', $data);
    }
}
