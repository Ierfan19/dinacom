<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ChartTahun;
use App\Models\Produk;
use App\Models\Comment;
use App\Models\Viewer;
use Illuminate\Foundation\Auth\User;
use App\Models\Wisata;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user->hasRole('admin'));
        if ($user->hasRole('admin')) {

            $data['produk'] = Produk::count();
            $data['wisata'] = Wisata::count();
            $data['user'] = User::count();
            $data['tahun'] = ChartTahun::first();
            return view('dashboard.index', $data);
        }
        else {
            return redirect('/user');
        }
    }
    function chartviewer()
    {
        $year = ChartTahun::first();
        $data['januari1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 1)
            ->count();
        $data['februari1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 2)
            ->count();
        $data['maret1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 3)
            ->count();
        $data['april1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 4)
            ->count();
        $data['mei1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 5)
            ->count();
        $data['juni1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 6)
            ->count();
        $data['juli1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 7)
            ->count();
        $data['agustus1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 8)
            ->count();
        $data['september1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 9)
            ->count();
        $data['oktober1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 10)
            ->count();
        $data['november1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 11)
            ->count();
        $data['desember1'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 12)
            ->count();

        $data['januari'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 1)
            ->count();
        $data['februari'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 2)
            ->count();
        $data['maret'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 3)
            ->count();
        $data['april'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 4)
            ->count();
        $data['mei'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 5)
            ->count();
        $data['juni'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 6)
            ->count();
        $data['juli'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 7)
            ->count();
        $data['agustus'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 8)
            ->count();
        $data['september'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 9)
            ->count();
        $data['oktober'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 10)
            ->count();
        $data['november'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 11)
            ->count();
        $data['desember'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('wisata_id', '!=', '')
            ->whereMonth('created_at', '=', 12)
            ->count();
        return Response($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function charttahun()
    {
        $year = ChartTahun::first();
        $user = Auth()->User()->id;
        $produk = Produk::where('user_id', $user)->get();
        $data['januari'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 1)
            ->where('produk_id', $produk->id)

            ->count();
        $data['februari'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 2)
            ->count();
        $data['maret'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 3)
            ->count();
        $data['april'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 4)
            ->count();
        $data['mei'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 5)
            ->count();
        $data['juni'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 6)
            ->count();
        $data['juli'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 7)
            ->count();
        $data['agustus'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 8)
            ->count();
        $data['september'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 9)
            ->count();
        $data['oktober'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 10)
            ->count();
        $data['november'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 11)
            ->count();
        $data['desember'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->whereMonth('created_at', '=', 12)
            ->count();
        return Response($data);
    }
    public function create()
    {
    //
    }
    function charttahunuser()
    
{
        $year = ChartTahun::first();
        $user = Auth()->User()->id;
        $produk = Produk::where('user_id', $user)->get();

        $data['januari'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 1)
            ->count();
        $data['februari'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 2)
            ->count();
        $data['maret'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 3)
            ->count();
        $data['april'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 4)
            ->count();
        $data['mei'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 5)
            ->count();
        $data['juni'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 6)
            ->count();
        $data['juli'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 7)
            ->count();
        $data['agustus'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 8)
            ->count();
        $data['september'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 9)
            ->count();
        $data['oktober'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 10)
            ->count();
        $data['november'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 11)
            ->count();
        $data['desember'] = Viewer::whereYear('created_at', '=', $year->tahun)
            ->where('produk_id', '!=', '')
            ->whereMonth('created_at', '=', 12)
            ->count();

        return Response($data);
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

    function editChartTahun($id, Request $request)
    {
        // $tahun = ChartTahun::find($id);
        // $tahun->tahun = Request::get('tahun');
        ChartTahun::where('id', $id)->update([
            'tahun' => $request->tahun
        ]);
        // dd(Request::get('tahun'));
        return redirect('/admin');
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