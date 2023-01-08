<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helper\UploadGambar;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
        }
        else {
            $data['paginate'] = $paginate;

            $data['wisata'] = Wisata::where('nama', 'like', '%' . $cari . '%')
                ->orwhere('alamat', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }
        return view('dashboard.wisata.index', $data);
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

        // $destinationPath = storage_path('uploads/' . date('Y') . '/' . date('m') . '/');
        // $gambar = $request->file('gambar');
        // $gambar_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
        // $gambar->move($destinationPath, $gambar_name);
        $wisata->gambar = UploadGambar::simpan($request->file('gambar'));
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
        $wisata = Wisata::find($id);
        // dd($wisata->user_id);
        $data['wisata'] = $wisata;
        if ($wisata->user_id != '') {

            $data['user1'] = User::find($wisata->user_id);
        }
        else {

            $data['user1'] = User::find(1);
        }
        $data['user'] = DB::table('model_has_roles')
            ->join('users', 'model_has_roles.model_id', 'users.id')
            ->where('model_has_roles.role_id', 3)
            ->get();
        return view('dashboard/wisata/edit', $data);
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
        $wisata->user_id = $request->user_id;

        if ($request->file('gambar')) {
            $image_path = UploadGambar::hapus($wisata->gambar);
            $wisata->gambar = UploadGambar::simpan($request->file('gambar'));
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
        $img1 = UploadGambar::hapus($wisata->gambar);

        $wisata->delete();

        return redirect('admin/wisata');
    }
}