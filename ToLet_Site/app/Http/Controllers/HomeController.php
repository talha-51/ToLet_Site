<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function bedSpace()
    {
        return view('bedSpace');
    }

    public function room()
    {
        return view('room');
    }

    public function flat()
    {
        return view('flat');
    }
}
