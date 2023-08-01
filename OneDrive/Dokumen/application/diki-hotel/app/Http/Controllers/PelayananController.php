<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;



class PelayananController extends Controller
{
    public function index()
    {
        

        $data = [
            
            'title' => 'Halaman Pelayanan',
            'users' => User::all(),
            $date = Carbon::now()->format('j F Y'),
            'date' => $date,
        ];

        // Tampilkan view "pelayanan.pelayanan" dengan data yang telah diproses
        return view('pelayanan.pelayanan', $data);
    }
}
