<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
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
            $data['comment'] = Comment::orderBy('created_at', 'desc')
                ->paginate($paginate);
        } else {
            $data['paginate'] = $paginate;
            $data['comment'] = Comment::where('pertanyaan', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }

        return view('dashboard.comment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.comment.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pertanyaan' => 'required',
        ]);
        $comment = new Comment();
        $comment->nama = $request->get('nama');
        $comment->email = $request->get('email');
        $comment->pertanyaan = $request->get('pertanyaan');
        $comment->is_show = 0;
        $comment->created_at = Carbon::now('Asia/Jakarta');
        $comment->updated_at = Carbon::now('Asia/Jakarta');
        $comment->save();
        return redirect('admin/comment');
    }
    public function kirimPesan(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pertanyaan' => 'required',
        ]);
        $comment = new Comment();
        $comment->nama = $request->get('nama');
        $comment->email = $request->get('email');
        $comment->pertanyaan = $request->get('pertanyaan');
        $comment->is_show = 0;
        $comment->created_at = Carbon::now('Asia/Jakarta');
        $comment->updated_at = Carbon::now('Asia/Jakarta');
        $comment->save();

        Session::flash('success', 'Your Message Sent');
        return redirect('/guestbook');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data['comment'] = Comment::find($id);
        return view('dashboard.comment.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['comment'] = Comment::find($id);
        return view('dashboard.comment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {

        // $validated = $request->validate([
        //     'jawaban' => 'required',
        // ]);
        $comment = Comment::find($request->get('id'));
        $comment->jawaban = $request->get('jawaban');
        $comment->is_show = $request->get('is_show');
        $comment->updated_at = Carbon::now('Asia/Jakarta');
        $comment->update();
        return redirect('admin/comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment');
    }
}
