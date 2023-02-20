@extends('layouts.masterDashboard')
@section('content')
    <div class="row">
        @foreach ($pesans as $pesan)
        <div class="col-3 text-center">
          <div class="card border border-primary">
            <div class="card-body">
              <h5 class="card-title">{{ $pesan->hotel->tipe }}</h5>
              <p>Penyewa: {{ $pesan->user->name }}</p>
              <p>Harga Perkamar: {{ $pesan->hotel->harga }}</p>
              <p>Jumlah Sewa: {{ $pesan->jumlah }}</p>
              <h3>Total: {{ $pesan->jumlah * $pesan->hotel->harga }}</h3>
              <a href="/pesan/hapus/{{ $pesan->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
@endsection