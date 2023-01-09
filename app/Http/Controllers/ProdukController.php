<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $paginate = $request->get('paginate');
        if ($paginate == '') {
            $paginate = 10;
        }
        $cari = $request->get('cari');
        if ($cari == '') {
            $data['paginate'] = $paginate;
            $data['produk'] = Produk::orderby('created_at', 'desc')->paginate(10);
        } else {
            $data['paginate'] = $paginate;

            $data['produk'] = Produk::orderby('created_at', 'desc')->where('nama', 'like', '%' . $cari . '%')
                ->orwhere('alamat', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }
        return Inertia::render('Dashboard/Admin/Content/Produk/Index', $data);
        // return view('dashboard/produk/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['produk'] = Produk::find($id);
        return view('dashboard/produk/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->status = $request->status;
        $produk->update();
        return redirect('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $img1 = public_path($produk->gambar);
        if (File::exists($img1)) {
            File::delete($img1);
        }
        $produk->delete();

        return redirect('admin/produk');
    }
}
