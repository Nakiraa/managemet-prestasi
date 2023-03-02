<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() 
    {
        $category = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();
        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }

    public function detail($slug)
    {
        $category = Kategori::all();

        $artikel = Artikel::where('slug', $slug)->first();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'category' => $category
        ]);
    }
}
