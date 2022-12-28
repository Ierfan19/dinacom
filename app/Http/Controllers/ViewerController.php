<?php

namespace App\Http\Controllers;

use App\Models\Viewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function show(Viewer $viewer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function edit(Viewer $viewer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $date = date('m');
        if ($date == 01) {
            $id = 1;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 02) {
            $id = 2;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 03) {
            $id = 3;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 04) {
            $id = 4;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 05) {
            $id = 5;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 06) {
            $id = 6;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 07) {
            $id = 7;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == '08') {
            $id = 8;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == '09') {
            $id = 9;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 10) {
            $id = 10;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 11) {
            $id = 11;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
        if ($date == 12) {
            $id = 12;
            $viewer = Viewer::find($id);
            $viewer->jumlah_viewer = $viewer->jumlah_viewer + 1;
            $viewer->update();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    function resetjumlah()
    {
        DB::table('viewer')->update(['jumlah_viewer' => 0]);
        return redirect('/admin');
    }
    public function destroy(Viewer $viewer)
    {
        //
    }
}
