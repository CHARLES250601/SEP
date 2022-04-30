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
    <div class="mb-3">
        <label class="form-label">Boardgame Deskripsi</label>
        <input type="text" class="form-control" name="boardgame_deskripsi" placeholder="desc">
    </div>
</form>
@endsection
