<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Helper\UploadGambar;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
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
            $data['galery'] = Galery::orderby('created_at', 'desc')->paginate(10);
        }
        else {
            $data['paginate'] = $paginate;

            $data['galery'] = Galery::orderby('created_at', 'desc')->where('nama', 'like', '%' . $cari . '%')
                ->orwhere('tgl', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }
        return view('dashboard.galery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galery.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function tgl($tgl)
    {

        $parseit = date("d F Y", strtotime($tgl));
        return $parseit;

    }
    public function store(Request $request)
    {
        $galery = new Galery();
        $galery->nama = $request->nama;
        // $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
        // $gambar = $request->file('gambar');
        // $gambar_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
        // $gambar->move($destinationPath, $gambar_name);

        // $file = $request->file('gambar');
        // $ext = $file->getClientOriginalExtension();
        // $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        // // $filesize = $file->getClientSize() / 1024;
        // $file_path = 'uploads/' . date('Y-m');

        // //Create Directory Monthly
        // Storage::makeDirectory($file_path);

        // $filename = Str::slug($filename, '_') . '.' . $ext;

        // $filename = Str::slug($filename, '_') . '.' . $ext;
        // Storage::disk('public' . $file_path, $file, $filename);        dd(UploadGambar::simpan($request->file('gambar')));
        $galery->gambar = UploadGambar::simpan($request->file('gambar'));

        $tgl = Carbon::now('Asia/Jakarta');
        $galery->tgl = self::tgl($tgl);
        $galery->status = 1;
        $galery->save();
        return redirect('admin/galery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['galery'] = Galery::find($id);
        return view('dashboard.galery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $galery = Galery::find($request->id);
        $galery->status = $request->status;
        $galery->update();
        return redirect('admin/galery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galery = Galery::find($id);
        $img1 = storage_path($galery->gambar);
        if (File::exists($img1)) {
            File::delete($img1);
        }
        $galery->delete();

        return redirect('admin/galery');
    }
}