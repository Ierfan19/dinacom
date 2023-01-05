<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Inertia\Inertia;
use DB;

class FrontController extends Controller
{
    function index()
    {
        $data['wisata'] = Wisata::limit(10)->get();
        return Inertia::render('Index', $data);
    }

    function getWisata($nama)
    {
        $data['singleWisata'] = DB::table('wisata')->where('nama_wisata', $nama)->first();

        return Inertia::render('Pages/Single-Post/Index', $data);
    }   
}
