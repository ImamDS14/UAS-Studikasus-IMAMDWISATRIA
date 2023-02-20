<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class DashboardController extends Controller
{
    function index() {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'news' => News::paginate(6)
        ]);
    }
}
