<?php

namespace App\Http\Controllers;

use App\Models\Viewer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Wisata;

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
    function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }
    function get_client_browser()
    {
        $browser = '';
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
            $browser = 'Netscape';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
            $browser = 'Firefox';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
            $browser = 'Chrome';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
            $browser = 'Opera';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
            $browser = 'Internet Explorer';
        else
            $browser = 'Other';
        return $browser;
    }
    public function store(Request $request)
    {

        $adaviewer = Viewer::where('ip', $request->ip())
            ->where('device', $_SERVER['HTTP_USER_AGENT'])
            ->whereMonth('created_at', date('m'))
            ->exists();
        if ($adaviewer) {
            return '';
        }
        else {

            $viewer = new Viewer();
            $viewer->created_at = Carbon::now('Asia/Jakarta');
            $viewer->ip = $request->ip();
            $viewer->browser = self::get_client_browser();
            $viewer->device = $_SERVER['HTTP_USER_AGENT'];
            $viewer->save();
        }
    }
    function viewerwisata($id, Request $request)
    {

        $adaviewer = Viewer::where('ip', $request->ip())
            ->where('device', $_SERVER['HTTP_USER_AGENT'])
            ->where('wisata_id', $id)
            ->whereMonth('created_at', date('m'))
            ->exists();
        if ($adaviewer) {
            return '';
        }
        else {

            $viewer = new Viewer();
            $viewer->created_at = Carbon::now('Asia/Jakarta');
            $viewer->ip = $request->ip();
            $viewer->wisata_id = $id;
            $viewer->browser = self::get_client_browser();
            $viewer->device = $_SERVER['HTTP_USER_AGENT'];
            $viewer->save();
        }
        $wisata = Wisata::find($id);
        $wisata->viewer = Viewer::where('wisata_id', $id)->count();
        $wisata->update();
    }
    function viewerproduk($id, Request $request)
    {

        $adaviewer = Viewer::where('ip', $request->ip())
            ->where('device', $_SERVER['HTTP_USER_AGENT'])
            ->where('produk_id', $id)
            ->whereMonth('created_at', date('m'))
            ->exists();
        if ($adaviewer) {
            return '';
        }
        else {

            $viewer = new Viewer();
            $viewer->created_at = Carbon::now('Asia/Jakarta');
            $viewer->ip = $request->ip();
            $viewer->produk_id = $id;
            $viewer->browser = self::get_client_browser();
            $viewer->device = $_SERVER['HTTP_USER_AGENT'];
            $viewer->save();
        }
        $post = Produk::find($id);
        $post->viewer = Viewer::where('produk_id', $id)->count();
        $post->update();
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
    public function update(Request $request, Viewer $viewer)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viewer $viewer)
    {
    //
    }
}