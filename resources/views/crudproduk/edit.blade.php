@extends('layouts.index')

@section('konten')
<div class="container">

    <form role="form" style="max-width: 90%" action="/dashboard" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Produk</label>
            <input class="form-control" id="nama_barang" name="nama_barang"
            value="{{ old('nama_barang') ? old('nama_barang') :$produk ->nama_barang }}">
                @error("nama_barang")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input class="form-control" name="harga" value="{{ old('harga') ? old('harga') :$produk ->harga }}">
                @error("harga")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input class="form-control" name="stok" value="{{ old('stok') ? old('stok') :$produk ->stok }}">
                @error("stok")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input class="form-control" name="keterangan" value="{{ old('keterangan') ? old('keterangan') :$produk ->keterangan }}">
                 @error("keterangan")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" value="{{ old('gambar') ? old('gambar') :$produk ->gambar }}">
                @error("gambar")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>


</div>
@endsection
