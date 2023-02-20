<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    function index() {
        return view('news.index', [
            'title' => 'news',
            'news' => News::paginate(6)
        ]);
    }

    function tambah(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        News::create($validated);
        return redirect('/news');
    }

    function hapus(News $news) {
        $news->delete();
        return redirect('/news');
    }
}