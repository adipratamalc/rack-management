@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Detail Barang</h1>
    <div class="ml-auto">
      <a href="{{url()->previous()}}" class="btn btn-icon icon-left btn-primary">
        <i class="fas fa-arrow-left"></i> Kembali
      </a>
    </div>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-6 d-flex flex-column">
        <h2 class="title-product text-primary">{{$barang->nama_barang}}</h2>
        <div class="d-flex flex-column align-items-center">
          <img alt="image" src="{{ asset('images/'.$barang->gambar_barang) }}" class="img-fluid w-50">
        </div>

        <div class="d-flex flex-column">
          <p class="h4">Rp {{ number_format(intval($barang->harga)) }}</p>
          <p class="h5 font-italic">{{$barang->jenis_barang->nama_jenis}}</p>
          <p class="h5">Stok: <span class="text-primary">{{$barang->stok}}</span></p>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="text-center p-4 bg-light rounded mb-2">
          <span class="h5">Posisi <b>{{$barang->nama_barang}} - {{$barang->kode_barang}}</b> berada pada <b>
              “RAK {{$rak_kode->kode_rak}}, {{$rak_main->nama_main_row}} - {{$rak_sub->nama_sub_row}}”</b></span>
        </div>

        <div class="card py-3">
          <div class="px-3">
            <h6 class="h5 font-weight-bold text-primary">RAK {{$rak_kode->kode_rak}}</h6>
          </div>

          <div class="px-3">
            @foreach ($rak_mains as $rm)
            <div class="main-row mt-3">
              <p class="h5 mb-1">{{$rm->nama_main_row}}</p>
              <div class="p-2 bg-light text-center border {{ $rak->main_row_id === $rm->id ? " border-danger" : "" }}">
                @foreach ($rak_subs as $rs)
                <div class="bg-secondary mb-2 p-1 {{ $rak->sub_row_id === $rs->id && $rak->main_row_id === $rm->id ? "
                  bg-danger text-white" : "" }}">
                  {{$rs->nama_sub_row}}
                </div>
                @endforeach
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
