@extends('admin.admin')

@section('konten')
<h1>Master Boardgame</h1>

@if (Session::has('pesan'))
    <div class="alert alert-danger">{{ Session::get('pesan') }}</div>
@endif

<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Boardgame ID</label>
        <input type="text" class="form-control" name="hewan_id">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Nama</label>
        <input type="text" class="form-control" name="hewan_nama">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Qty</label>
        <input type="text" class="form-control" name="hewan_umur">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Genre</label>
        <select name="jenis_id" class="form-control">

        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Gambar Product</label>
        <input type="file" class="form-control" name="gambar">
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
