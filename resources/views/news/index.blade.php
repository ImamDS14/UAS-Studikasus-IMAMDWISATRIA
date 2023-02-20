@extends('layouts.masterDashboard')
@section('content')
<button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#tambahModal">
    Tambah
  </button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($news as $n)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $n->title }}</td>
            <td>{{ $n->body }}</td>
            <td>
                <a href="/news/{{ $n->id }}" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center mt-5">
    {!! $news->links() !!}
  </div>

  <!-- Modal -->
<div class="modal fade" id="tambahModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/news" method="post" id="tambahForm">
            @csrf
            <div class="mb-3">
              <label>Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
              <label>Body</label>
              <textarea name="body" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" form="tambahForm">Submit</button>
        </div>
      </div>
    </div>
  </div>
@endsection