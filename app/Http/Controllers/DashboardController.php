<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ChartTahun;
use App\Models\Produk;
use App\Models\Comment;
use App\Models\Viewer;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function charttahun()
    {
        $year = ChartTahun::first();
        $data['januari'] = Viewer::where('id', '=', 1)
            ->select('jumlah_viewer')->first();
        $data['februari'] = Viewer::where('id', '=', 2)
            ->select('jumlah_viewer')->first();
        $data['maret'] = Viewer::where('id', '=', 3)
            ->select('jumlah_viewer')->first();
        $data['april'] = Viewer::where('id', '=', 4)
            ->select('jumlah_viewer')->first();
        $data['mei'] = Viewer::where('id', '=', 5)
            ->select('jumlah_viewer')->first();
        $data['juni'] = Viewer::where('id', '=', 6)
            ->select('jumlah_viewer')->first();
        $data['juli'] = Viewer::where('id', '=', 7)
            ->select('jumlah_viewer')->first();
        $data['agustus'] = Viewer::where('id', '=', 8)
            ->select('jumlah_viewer')->first();
        $data['september'] = Viewer::where('id', '=', 9)
            ->select('jumlah_viewer')->first();
        $data['oktober'] = Viewer::where('id', '=', 10)
            ->select('jumlah_viewer')->first();
        $data['november'] = Viewer::where('id', '=', 11)
            ->select('jumlah_viewer')->first();
        $data['desember'] = Viewer::where('id', '=', 12)
            ->select('jumlah_viewer')->first();

        return Response($data);
    }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
