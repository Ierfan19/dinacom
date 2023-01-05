<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            $data['category'] = Category::orderBy('nama_kategori')
                ->paginate($paginate);
        } else {
            $data['paginate'] = $paginate;
            $data['category'] = Category::where('nama_kategori', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }

        return view('dashboard.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.category.tambah');
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
            'nama_kategori' => 'required',
        ]);
        $category = new Category();
        $category->nama_kategori = $request->get('nama_kategori');
        $category->nama_kategori_en = $request->get('nama_kategori_en');
        $category->save();
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['category'] = Category::find($id);
        return view('dashboard.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    function updateEn(Request $request)
    {
        for ($i = 1; $i <= 12; $i++) {
            $id = $i;
            $id2 = $i + 12;
            $categori_id = Category::find($id);
            $categori_en = Category::find($id2);
            // dd($categori_en);
            $categori_id->nama_kategori_en =  $categori_en->nama_kategori;
            $categori_id->update();
        }
        return 'ok';
    }
    public function update(Request $request)
    {

        $validated = $request->validate([
            'nama_kategori' => 'required',
        ]);
        $category = Category::find($request->get('id'));
        $category->nama_kategori = $request->get('nama_kategori');
        $category->nama_kategori_en = $request->get('nama_kategori_en');
        $category->update();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::find($id);

        $category->delete();
        return redirect('admin/category');
    }
}
