@extends('layouts.index')

@section('konten')
<div class="container">

    <form role="form" style="max-width: 90%" action="/dashboard" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Produk</label>
            <input class="form-control" name="nama_barang">
                @error("nama_barang")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input class="form-control" name="harga">
                @error("harga")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input class="form-control" name="stok">
                @error("stok")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input class="form-control" name="keterangan">
                 @error("keterangan")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar">
                @error("gambar")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>


</div>
@endsection
