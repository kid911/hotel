<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        
        $data = [
            'title' => 'Beranda',
            $date = Carbon::now()->format('j F Y'),
        'date' => $date,
            
        ];
        return view('home.home',$data);
    }

}
