<?php

namespace App\Http\Controllers;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function menampilkanData ()
    {
       return view('rutecontroller');
    }

    {
       return view('rutecontroller');
    }
    {
        $namaSekolah = Rute::$namaSekolah;
       return view('rutemodel', compact('namaSekolah'));
    }

}
