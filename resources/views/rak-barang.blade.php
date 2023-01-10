@extends('layouts.app')

@section('content')

<section class="section">
  <div class="section-header">
    <h1> Rak Ke-{{$rak->kode_rak}}, {{$rak->nama_main_row}} & {{$rak->nama_sub_row}}</h1>
    <div class="ml-auto">
      <a href="/cari" class="btn btn-icon icon-left btn-primary">
        <i class="fas fa-arrow-left"></i> Kembali
      </a>
    </div>
  </div>

  <div class="section-body">
    <div class="column">
      <div class="col-12 d-flex flex-column mb-3">

      </div>

      <div class="col-12">
        @forelse ($barang as $brg)
        <a class="custom-link" href="{{ route('barang.show', $brg->id) }}">
          <div class="card p-2 mb-3 d-flex flex-md-row justify-content-around card-custom">
            <img src="{{ asset('/storage/barang/'.$brg->gambar_barang) }}" width="100" height="100" class="text-center">

            <div class="d-flex flex-column">
              <span class="text-primary">Kode</span>
              <p class="h5 text-dark">{{$brg->kode_barang}}</p>
            </div>

            <div class="d-flex flex-column">
              <span class="text-primary">Nama</span>
              <p class="h5 text-dark">{{$brg->nama_barang}}</p>
            </div>

            <div class="d-flex flex-column">
              <span class="text-primary">Jenis</span>
              <p class="h5 text-dark">{{$brg->jenis_barang->nama_jenis}}</p>
            </div>

            <div class="d-flex flex-column">
              <span class="text-primary">Stok</span>
              <p class="h5 text-dark">{{$brg->stok}}</p>
            </div>

            <div class="d-flex flex-column">
              <span class="text-primary">Harga</span>
              <p class="h5 text-dark">Rp {{ number_format(intval($brg->harga)) }}</p>
            </div>
          </div>
        </a>

        @empty

        <div class="card p-3 d-flex justify-content-center align-items-center">
          <p class="h5 font-italic text-center text-danger">Barang tidak ditemukan</p>
        </div>

        @endforelse
      </div>
    </div>
  </div>
</section>
@endsection
