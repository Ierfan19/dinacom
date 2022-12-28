<?php

namespace App\Http\Controllers;

use App\Models\AssetImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class AssetImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slider'] = AssetImage::all();
        $data['icon'] = AssetImage::first();
        return view('dashboard.asset_image.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.asset_image.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        $asset = new AssetImage();

        $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
        // $icon = $request->file('icon');
        // $icon_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $icon->getClientOriginalExtension();
        // $icon->move($destinationPath, $icon_name);

        // $logo = $request->file('logo');
        // $logo_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $logo->getClientOriginalExtension();
        // $logo->move($destinationPath, $logo_name);

        $slide = $request->file('slide');
        $slide_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $slide->getClientOriginalExtension();
        $slide->move($destinationPath, $slide_name);

        // $asset->favicon = $icon_name;
        // $asset->logo = $logo_name;
        $asset->slide_header = $slide_name;
        $asset->save();
        return redirect('admin/asset-image');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetImage  $assetImage
     * @return \Illuminate\Http\Response
     */
    public function show(AssetImage $assetImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetImage  $assetImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['slider'] = AssetImage::find($id);
        return view('dashboard.asset_image.edit', $data);
    }

    public function editIconLogo($id)
    {

        $data['icon'] = AssetImage::find($id);
        return view('dashboard.asset_image.editIconLogo', $data);
    }
    public function updateIconLogo(Request $request)
    {

        $validated = $request->validate([
            'favicon' => 'required',
            'logo' => 'required',
        ]);
        $asset = AssetImage::find($request->get('id'));

        if ($request->file('favicon')) {
            $image_path = public_path($asset->favicon);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $favicon = $request->file('favicon');
            $favicon_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $favicon->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $favicon->move($destinationPath, $favicon_name);
            $asset->favicon = $favicon_name;
        }
        if ($request->file('logo')) {
            $image_path = public_path($asset->logo);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $logo = $request->file('logo');
            $logo_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $logo->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $logo->move($destinationPath, $logo_name);
            $asset->logo = $logo_name;
        }
        $asset->updated_at = Carbon::now('Asia/Jakarta');

        $asset->update();

        return redirect('admin/asset-image');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetImage  $assetImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validated = $request->validate([
            'slide_header' => 'required'
        ]);
        $asset = AssetImage::find($request->get('id'));

        if ($request->file('slide_header')) {
            $image_path = public_path($asset->slide_header);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $slide_header = $request->file('slide_header');
            $slide_header_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $slide_header->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $slide_header->move($destinationPath, $slide_header_name);
            $asset->slide_header = $slide_header_name;
        }

        $asset->updated_at = Carbon::now('Asia/Jakarta');

        $asset->update();

        return redirect('admin/asset-image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetImage  $assetImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $asset = AssetImage::find($id);
        $img1 = public_path($asset->favicon);
        if (File::exists($img1)) {
            File::delete($img1);
        }
        $img2 = public_path($asset->logo);
        if (File::exists($img2)) {
            File::delete($img2);
        }
        $img3 = public_path($asset->slide_header);
        if (File::exists($img3)) {
            File::delete($img3);
        }
        $asset->delete();

        return redirect('admin/asset-image');
    }
}
