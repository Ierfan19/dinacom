<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Helper\UploadGambar;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::where('user_id', Auth()->User()->id)->get();
        $data['event'] = Event::where(function ($query) use ($wisata) {
            foreach ($wisata as $key) {
                // you can use orWhere the first time, doesn't need to be ->where
                $query->orWhere('wisata_id', $key->id);
            }
        })->get();
        return view('user.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['wisata'] = Wisata::where('user_id', Auth()->User()->id)->get();
        return view('user.event.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->nama = $request->nama;
        $event->keterangan = $request->keterangan;
        $event->tgl = $request->tgl;
        $event->wisata_id = $request->wisata_id;
        $event->tgl_end = $request->tgl;
        $event->gambar = UploadGambar::simpan($request->file('gambar'));
        $event->save();
        return redirect('user/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['event'] = Event::find($id);
        $data['wisata'] = Wisata::where('user_id', Auth()->User()->id)->get();
        return view('user.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $event = Event::find($request->id);
        $event->nama = $request->nama;
        $event->keterangan = $request->keterangan;
        $event->tgl = $request->tgl;
        $event->wisata_id = $request->wisata_id;
        $event->tgl_end = $request->tgl;
        if ($request->file('gambar')) {
            $image_path = UploadGambar::hapus($event->gambar);
            $event->gambar = UploadGambar::simpan($request->file('gambar'));
        }
        $event->update();
        return redirect('user/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
    //
    }
}