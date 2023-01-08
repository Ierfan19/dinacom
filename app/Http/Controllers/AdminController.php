<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HasRole;
use App\Models\Role;

class AdminController extends Controller
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
            $data['user'] = User::where('id', '!=', Auth()->User()->id)->paginate($paginate);
        }
        else {
            $data['paginate'] = $paginate;

            $data['user'] = User::where('id', '!=', 1)->where('name', 'like', '%' . $cari . '%')
                ->orwhere('email', 'like', '%' . $cari . '%')
                ->orwhere('no_telp', 'like', '%' . $cari . '%')
                ->paginate($paginate);
        }
        return view('dashboard/user/index', $data);
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['hasrole'] = HasRole::where('model_id', $id)->first();
        // dd($data['hasrole']);
        $data['role'] = Role::all();
        return view('dashboard.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $role = Role::find($request->role);
        HasRole::where('model_id', $request->id)->delete();
        User::find($request->id)->assignRole($role->name);
        return redirect('admin/user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $produk = Produk::where('user_id', $id)->exists();
        $produk2 = Produk::where('user_id', $id)->get();
        if ($produk == true) {
            $produk2->delete();
        }
        return redirect('admin/user');
    }
}