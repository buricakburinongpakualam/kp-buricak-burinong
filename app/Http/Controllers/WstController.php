<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Wst;
use Illuminate\Http\Request;

class WstController extends Controller
{
    public function index()
    {
        $title = '';

        return view('home', [
            'title' => 'Semua Wisata' . $title,
            'posts' => Wst::all()
        ]);
    }

    public function show($slug)
    {
        $wst= Wst::where('slug', $slug)->first();
        $cek= Photo::where('slug', $slug)->first();
        $photo= Photo::where('slug', $slug)->get();
        return view('detail', [
            'post' => $wst,
            'cek' => $cek,
            'photo' => $photo
        ]);
    }
}
