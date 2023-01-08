<?php

namespace App\Helper;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\File;

class UploadGambar
{
    public static function simpan($name)
    {
        $img = $name;
        // dd($img);
        $filenameWithExt = $img->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $img->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . Str::random(5) . time() . '.' . $extension;
        // dd($filenameSimpan);
        $img->storeAs('public/' . date('Y') . '/' . date('m'), $filenameSimpan);
        return 'uploads/' . date('Y') . '/' . date('m') . '/' . $filenameSimpan;

    }
    public static function hapus($img)
    {

        $path = public_path($img);
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}