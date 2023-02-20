<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Pesan;

class PesanController extends Controller
{
    function index() {
        return view('pesan.index', [
            'title' => 'Pesan',
            'hotels' => Hotel::paginate(5)
        ]);
    }

    function tambah(Request $request, $id) {
        $validated = $request->validate([
            'jumlah' => 'required'
        ]);
        $validated['hotel_id'] = $id;
        $validated['user_id'] = auth()->user()->id;
        Pesan::create($validated);
        return redirect('/pemesanan');
    }

    function pemesanan() {
        return view('pesan.pemesanan', [
            'title' => 'Pemesanan',
            'pesans' => Pesan::with(['user', 'hotel'])->where('user_id', auth()->user()->id)->paginate(6)
        ]);
    }

    function hapus(Pesan $pesan) {
        $pesan->delete();
        return redirect('/pemesanan');
    }
}
