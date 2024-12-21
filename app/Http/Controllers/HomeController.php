<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('composant.dashboard');
    }

    public function vehicule()
    {
        return view('composant.vehicule');
    }
}
