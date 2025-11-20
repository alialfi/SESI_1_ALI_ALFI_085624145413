@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Barang</h3>
    <form method="POST" action="{{ route('barang.update', $barang->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" name="nama" class="form-control" value="{{ old('name', $barang->nama) }}" required>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
