<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Helper\UploadGambar;

class DashuserController extends Controller
{
    function produk()
    {
        $id = Auth()->User()->id;
        $data['produk'] = Produk::where('user_id', $id)->get();
        return view('user/produk/index', $data);
    }
    function tambahproduk()
    {
        return view('user.produk.tambah');
    }
    function editproduk($id)
    {
        $id = Crypt::decrypt($id);
        $produk = Produk::find($id);
        $data['produk'] = $produk;
        if ($produk->user_id != Auth()->User()->id) {
            return 'Kesalahan';
        }

        return view('user.produk.edit', $data);
    }
    function storeproduk(Request $request)
    {
        $produk = new Produk();

        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->alamat = $request->alamat;
        $produk->contact = $request->contact;
        $produk->user_id = $request->user_id;
        $produk->status = 0;

        // $destinationPath = storage_path('uploads/' . date('Y') . '/' . date('m') . '/');
        // $gambar = $request->file('gambar');
        // $gambar_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
        // $gambar->move($destinationPath, $gambar_name);
        $produk->gambar = UploadGambar::simpan($request->file('gambar'));
        $produk->save();
        return redirect('user/produk');
    }
    function updateproduk(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->alamat = $request->alamat;
        $produk->contact = $request->contact;
        $produk->user_id = $request->user_id;
        $produk->status = 0;
        if ($request->file('gambar')) {
            $image_path = UploadGambar::hapus($produk->gambar);
            // $gambar = $request->file('gambar');
            // $gambar_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
            // $destinationPath = storage_path('uploads/' . date('Y') . '/' . date('m') . '/');
            // $gambar->move($destinationPath, $gambar_name);
            $produk->gambar = UploadGambar::simpan($request->file('gambar'));
        }
        $produk->save();
        return redirect('user/produk');
    }
    function hapusproduk($id)
    {

        $produk = Produk::find($id);
        if ($produk->user_id != Auth()->User()->id) {
            return 'Kesalahan';
        }
        $img1 = UploadGambar::hapus($produk->gambar);
        $produk->delete();

        return redirect('user/produk');
    }
    function profile()
    {
        $profile = User::find(Auth()->User()->id);
        $data['profile'] = $profile;
        return view('user/profile/index', $data);
    }
    function editprofile(Request $request)
    {
        $profile = User::find($request->id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->no_telp = $request->no_telp;
        $profile->alamat = $request->alamat;
        $profile->update();

        return redirect('user/profile');
    }
}