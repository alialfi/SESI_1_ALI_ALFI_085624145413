@extends('layouts.app')

@section('content')
    <h3>Tambah Barang</h3>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Kode</label>
            <input type="text" class="form-control" name="kode" id="kode" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" id="stok" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" required>
        </div>
       

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
