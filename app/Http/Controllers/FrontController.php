<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Inertia\Inertia;
use DB;
use App\Models\Produk;

class FrontController extends Controller
{
    // Wisata
    function indexWisata()
    {
        $data['wisata'] = Wisata::limit(10)->get();
        $data['galleries'] = DB::table('galery')->get();
        return Inertia::render('Index', $data);
    }

    function getWisata($nama)
    {
        $data['singleWisata'] = DB::table('wisata')->where('nama', $nama)->first();

        return Inertia::render('Pages/Single-Post/Index', $data);
    }   

    // Product
    function indexProduct() 
    {
        $data['products'] = DB::table('produk')->limit(15)->get();

        return Inertia::render('Pages/Product/Index', $data);
    }

    function getProduct($nama) 
    {
        $data['product'] = DB::table('produk')->where('nama', $nama)->first();

        return Inertia::render('Pages/Product/Single-Product/Index', $data);
    }

    // Contact Us
    function indexContactUs()
    {
        return Inertia::render('Pages/Contact-Us/Index');
    }

    // Event
    function indexEvent() {
        return Inertia::render('Pages/Event/Index');
    }
}
