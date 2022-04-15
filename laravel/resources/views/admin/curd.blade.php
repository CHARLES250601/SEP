@extends('admin.admin')

@section('konten')
<h1>Master Boardgame</h1>

@if (Session::has('pesan'))
    <div class="alert alert-danger">{{ Session::get('pesan') }}</div>
@endif

<form action="{{route('boardgame.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Boardgame Nama</label>
        <input type="text" class="form-control" name="boardgame_nama">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Price</label>
        <input type="text" class="form-control" name="boardgame_harga_beli">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Sales</label>
        <input type="text" class="form-control" name="boardgame_harga_jual">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Qty</label>
        <input type="text" class="form-control" name="boardgame_stok">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Gambar</label>
        <input type="text" class="form-control" name="boardgame_gambar">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Genre</label>
        <select name="boardgame_genre" class="form-control">
            @foreach ($boardgame_genres as $row)
                <option value="{{ $row->id }}">{{ $row->nama_genre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Deskripsi</label>
        <input type="text" class="form-control" name="boardgame_deskripsi">
    </div>
    <button type="submit" name="btnTambah" class="btn btn-success">Insert</button>
    <button type="submit" name="btnUbah" class="btn btn-primary">Ubah</button>
</form>

<hr>

<table class="table table-dark">
    <thead>

    </thead>
    <tbody>

    </tbody>
</table>
@endsection
