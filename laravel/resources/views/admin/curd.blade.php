@extends('admin.admin')

@section('konten')
<h1>Master Boardgame</h1>


@if (Session::has('pesan'))
    <div class="alert alert-danger">{{ Session::get('pesan') }}</div>
@endif

<form action="{{route('boardgame.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Boardgame ID</label>
        <input type="text" class="form-control" name="id">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Nama</label>
        <input type="text" class="form-control" name="boardgame_nama" placeholder="Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Price</label>
        <input type="text" class="form-control" name="boardgame_harga_beli" placeholder="Rp.">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Sales</label>
        <input type="text" class="form-control" name="boardgame_harga_jual" placeholder="Rp.">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Qty</label>
        <input type="text" class="form-control" name="boardgame_stok">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Gambar</label>
        <input type="file" class="form-control" name="boardgame_gambar">
    </div>
    <div class="mb-3">
        <label class="form-label">Boardgame Genre</label>
        <select name="boardgame_genre" class="form-control">
            @foreach ($boardgame_genres as $row)
                <option value="{{ $row->id }}">{{ $row->nama_genre }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-12">
        <textarea name="boardgame_deskripsi" rows="10" cols="173" placeholder="desc"></textarea>
    </div>
    <button type="submit" name="btnTambah" class="btn btn-success">Insert</button>
    <button type="submit" name="btnUbah" class="btn btn-primary">Update</button>
</form>

<hr>

<table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Boardgame</th>
            <th>Boardgame Price</th>
            <th>Boardgame Sales</th>
            <th>Qty</th>
            <th>Image</th>
            <th>Genre</th>
            <th>Desc</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($boardgames as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->boardgame_nama }}</td>
            <td>{{ $row->boardgame_harga_beli }}</td>
            <td>{{ $row->boardgame_harga_jual }}</td>
            <td>{{ $row->boardgame_stok }}</td>
            <td><img src="{{ asset("storage/$row->boardgame_gambar") }}" style="width: 100px;height: 100px;" alt="Tidak ada foto"></td>
            <td>{{ $row->nama_genre}}</td>
            <td>{{ $row->boardgame_deskripsi }}</td>
            <td>
                <a href="{{route('boardgame.delete',[$row->id])}}" class="btn btn-danger">Hapus</a>
                <a href="{{ url("/Crud/detail/$row->id") }}" class="btn btn-warning">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
