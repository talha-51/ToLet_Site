<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function bedSpace()
    {
        $bedSpaces = DB::table('bed_space')->get();
        return view('bedSpace')->with('bedSpaces', $bedSpaces);
    }

    public function room()
    {
        $rooms = DB::table('room')->get();
        return view('room')->with('rooms', $rooms);
    }

    public function flat()
    {
        $flats = DB::table('flat')->get();
        return view('flat')->with('flats', $flats);
    }
}
