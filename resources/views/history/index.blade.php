@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($artiChunk as $arti  )
                            <div class="col card mb-1 ml-1 mr-1 ">
                                <img class="card-img-top" src="/image/{{ $arti -> gambar }}" alt="Card image cap" style="height: 18rem; width: 20rem;" >
                                <div class="card-body">
                                    <h2>  {{ $arti -> nama_barang }} </h2>
                                    <p>  {{ $arti ['subject'] }} </p>
                                    <p>  {{ $arti ['stok'] }} </p>
                                    <p>  {{ $arti ['harga'] }} </p>
                                    <a href="/artikel/{{ $arti->slug }}" class="btn btn-info btn-sm stretched-link">Detail</a>

                                </div>
                            </div>

                            @endforeach --}}
                            <?php $no = 1; ?>

                            @foreach($pesanans as $pesanan)

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Sudah Pesan & Belum dibayar
                                    @else
                                    Sudah dibayar
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
