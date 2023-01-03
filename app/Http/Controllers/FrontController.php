<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        $data['wisata'] = Wisata::limit(10)->get();
        return view('frontend/index');
    }
}
