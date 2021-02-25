@extends('layouts.index')

@section('konten')
<div class="container">

<div class="card mb-3" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-8">
      <img src="/image/{{ $produk -> gambar }} "alt="Card image cap" style="width: 100%">
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title">{{ $produk -> nama_barang }}</h5>
        <p class="card-text">Stok : <br>{{ $produk -> stok }}</p>
        <p class="card-text">Harga : <br>{{ $produk -> harga }}</p>
        <p class="card-text">Keterangan : <br>{{ $produk -> keterangan }}</p>

        <p class="card-text">
            <a class="btn btn-primary" href="/produk/{{ $produk->id }}/edit" role="button">Edit</a>

                <form action="/produk/{{ $produk->id }}" method="post">
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-small btn-danger">Hapus</button>
                </form>
        </p>

      </div>
    </div>
  </div>
</div>


</div>
@endsection
