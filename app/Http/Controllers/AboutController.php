<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['about'] = About::all();
        return view('dashboard.about.index', $data);
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['about'] = About::find($id);
        return view('dashboard.about.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'deskripsi' => 'required',
        ]);
        $about = About::find($request->get('id'));
        $about->judul = $request->get('judul');
        $about->deskripsi = $request->get('deskripsi');
        $about->judul_en = $request->get('judul_en');
        $about->deskripsi_en = $request->get('deskripsi_en');

        if ($request->file('images1')) {
            $image_path = public_path($about->images1);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $images1 = $request->file('images1');
            $images1_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $images1->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $images1->move($destinationPath, $images1_name);
            $about->images1 = $images1_name;
        }
        if ($request->file('images2')) {
            $image_path = public_path($about->images2);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $images2 = $request->file('images2');
            $images2_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $images2->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $images2->move($destinationPath, $images2_name);
            $about->images2 = $images2_name;
        }
        if ($request->file('images3')) {
            $image_path = public_path($about->images3);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $images3 = $request->file('images3');
            $images3_name = 'uploads/' . date('Y') . '/' . date('m') . '/' . Str::random(10) . '.' . $images3->getClientOriginalExtension();
            $destinationPath = public_path('uploads/' . date('Y') . '/' . date('m') . '/');
            $images3->move($destinationPath, $images3_name);
            $about->images3 = $images3_name;
        }
        if ($request->get('cekimages1') != '') {

            $image_path = public_path($about->images1);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $about->images1 = '';
        }
        if ($request->get('cekimages2') != '') {

            $image_path = public_path($about->images2);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $about->images2 = '';
        }
        if ($request->get('cekimages3') != '') {

            $image_path = public_path($about->images3);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $about->images3 = '';
        }

        $about->updated_at = Carbon::now('Asia/Jakarta');
        $about->update();
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
