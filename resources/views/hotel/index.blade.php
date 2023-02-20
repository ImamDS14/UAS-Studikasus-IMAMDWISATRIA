@extends('layouts.masterDashboard')
@section('content')
<button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#tambahModal">
  Tambah
</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tipe</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($hotels as $hotel)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $hotel->tipe }}</td>
            <td>{{ $hotel->harga }}</td>
            <td>{{ $hotel->jumlah }}</td>
            <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahModal"
                onclick="setData('{{ $hotel->id }}', '{{ $hotel->tipe }}', '{{ $hotel->harga }}', '{{ $hotel->jumlah }}')">
                Ubah
              </button>
              <a href="/hotel/{{ $hotel->id }}" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  
  <div class="d-flex justify-content-center mt-5">
      {!! $hotels->links() !!}
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
        <form action="/hotel" method="post" id="tambahForm">
          @csrf
          <div class="mb-3">
            <label>Tipe</label>
            <input type="text" name="tipe" class="form-control">
          </div>
          <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
          </div>
          <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control">
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

<!-- Modal -->
<div class="modal fade" id="ubahModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="ubahForm">
          @csrf
          @method('put')
          <div class="mb-3">
            <label>Tipe</label>
            <input type="text" name="tipe" class="form-control" id="tipeEdit">
          </div>
          <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" id="hargaEdit">
          </div>
          <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" id="jumlahEdit">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="ubahForm">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  function setData(id, tipe, harga, jumlah) {
    ubahForm.action = '/hotel/' + id;
    tipeEdit.value = tipe;
    hargaEdit.value = harga;
    jumlahEdit.value = jumlah;
  }
</script>
@endsection