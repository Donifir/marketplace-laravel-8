@extends('layouts.index')

@section('konten')
<div class="container">

    <a class="btn btn-primary" href="create-produk" role="button">Create Produk</a>

<form style="padding-top: 20px">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Status</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($produk as $produks)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $produks -> nama_barang }}</td>
                    <td>
                           @if ($produks -> stok >0)
                               tersedia
                           @else
                               tidak
                           @endif
                    </td>
                    <td>{{ $produks -> harga }}</td>
                    <td><a href="/produk/{{ $produks->id}}" class="btn btn-info  stretched-link">Detail</a></td>

                </tr>
          @endforeach
        </tbody>
      </table>

</form>


</div>
@endsection
