
@extends('layouts.app2')

@section('content')
{{-- <header> --}}

{{-- @include('dummy') --}}
{{-- </header> --}}


<div class="container">
    <div class="row justify-content-center">
        @foreach($barangs as $barang)
        <div class="col-md-3 mb-4">
            <div class="card"  >
                <label for="cart">
                    <img src="{{ url('image') }}/{{ $barang->gambar }}" class="card-img-top" style="height: 18rem;" alt="...">
                </label>
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    {{-- <strong>Stok :</strong> {{ number_format($barang->stok) }} <br> --}}
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary" ><i class="fa fa-shopping-cart" ></i> Pesan</a>
              </div>
            </div>
        </div>



    @endforeach

    </div>

        <div class ="row justify-content-center ">
            {{ $barangs->onEachSide(5)->links() }}
            </div>




@endsection
