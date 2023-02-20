@extends('layouts.masterDashboard')
@section('content')
    <div class="row justify-content-center">
        @foreach ($news as $n)
        <div class="col-8">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $n->title }}</h5>
                    <p class="card-text">{{ $n->body }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection