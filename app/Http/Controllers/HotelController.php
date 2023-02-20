<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    function index() {
        return view('hotel.index', [
            'title' => 'Hotel',
            'hotels' => Hotel::paginate(10)
        ]);
    }

    function tambah(Request $request) {
        $validated = $request->validate([
            'tipe' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        Hotel::create($validated);

        return redirect('/hotel');
    }

    function hapus(Hotel $hotel) {
        $hotel->delete();
        return redirect('/hotel');
    }

    function ubah(Request $request, Hotel $hotel) {
        $hotel->tipe = $request->tipe;
        $hotel->harga = $request->harga;
        $hotel->jumlah = $request->jumlah;
        $hotel->save();

        return redirect('/hotel');
    }
}
