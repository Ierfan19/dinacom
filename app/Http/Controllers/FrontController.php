<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\Produk;
use App\Models\Assets;

class FrontController extends Controller
{
    function index()
    {
        $data['wisata'] = Wisata::limit(10)->get();
        $data['wisata2'] = Wisata::limit(4)->get();
        $data['wisata3'] = Wisata::limit(2)->get();
        $data['galery'] = Galery::limit(10)->get();
        return view('frontend/index', $data);
    }
    function wisata(Request $request)
    {
        $paginate = $request->get('paginate');
        if ($paginate == '') {
            $paginate = 10;
        }
        $cari = $request->get('cari');
        if ($cari == '') {
            $data['paginate'] = $paginate;
            $data['wisata'] = Wisata::limit(4)->paginate($paginate);
        }
        else {
            $data['paginate'] = $paginate;

            $data['wisata'] = Wisata::limit(4)->where('nama', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }
        $data['wisata2'] = Wisata::limit(4)->get();
        $data['galery'] = Galery::limit(10)->get();
        // $data['wisata3'] = Wisata::limit(2)->get();
        return view('frontend/wisata', $data);
    }
    function produk(Request $request)
    {
        $paginate = $request->get('paginate');
        if ($paginate == '') {
            $paginate = 10;
        }
        $cari = $request->get('cari');
        if ($cari == '') {
            $data['paginate'] = $paginate;
            $data['produk'] = Produk::limit(4)->paginate($paginate);
        }
        else {
            $data['paginate'] = $paginate;

            $data['produk'] = Produk::limit(4)->where('nama', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }
        $data['produk2'] = Produk::limit(4)->get();
        $data['galery'] = Galery::limit(10)->get();
        // $data['produk3'] = Wisata::limit(2)->get();
        return view('frontend/produk', $data);
    }
    function detailwisata($nama)
    {
        $data['wisata'] = Wisata::where('nama', $nama)->first();
        $data['wisata2'] = Wisata::limit(4)->get();
        $data['galery'] = Assets::where('wisata_id', $data['wisata']->id)->get();
        return view('frontend/detail_wisata', $data);
    }
    function detailproduk($nama)
    {
        $data['produk'] = Produk::where('nama', $nama)->first();
        $data['produk2'] = Produk::limit(4)->get();
        $data['galery'] = Assets::where('produk_id', $data['produk']->id)->get();
        return view('frontend/detail_produk', $data);
    }

}