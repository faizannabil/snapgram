<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class HomeController extends Controller
{
    // Menampilkan halaman utama dengan daftar foto
    public function index()
    {
        $photos = Photo::all();
        return view('home', compact('photos'));
    }
}
