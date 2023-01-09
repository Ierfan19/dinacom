<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;

class WisataController extends Controller
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
            $data['wisata'] = Wisata::paginate($paginate);
        } else {
            $data['paginate'] = $paginate;

            $data['wisata'] = Wisata::where('nama', 'like', '%' . $cari . '%')
                ->orwhere('alamat', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }

        return Inertia::render('Dashboard/Admin/Content/Wisata/Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.wisata.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata = new Wisata();
        $wisata->nama = $request->nama;
        $wisata->deskripsi = $request->deskripsi;

        $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
        $gambar = $request->file('gambar');
        $gambar_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
        $gambar->move($destinationPath, $gambar_name);
        $wisata->gambar = $gambar_name;
        $wisata->created_at = Carbon::now('Asia/Jakarta');
        $wisata->alamat = $request->alamat;
        $wisata->viewer = 0;
        $wisata->save();
        return redirect('admin/wisata');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['wisata'] = Wisata::find($id);
        return Inertia::render('Dashboard/Admin/Content/Wisata/Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $wisata = Wisata::find($request->id);
        $wisata->nama = $request->nama;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->alamat = $request->alamat;

        if ($request->file('gambar')) {
            $image_path = public_path($wisata->gambar);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $gambar = $request->file('gambar');
            $gambar_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $gambar->move($destinationPath, $gambar_name);
            $wisata->gambar = $gambar_name;
        }
        $wisata->update();
        return redirect('admin/wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $wisata = Wisata::find($id);
        $img1 = public_path($wisata->gambar);
        if (File::exists($img1)) {
            File::delete($img1);
        }
        $wisata->delete();

        return redirect('admin/wisata');
    }
}
