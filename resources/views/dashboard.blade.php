@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Halaman Utama</h1>
  </div>

  <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>

  {{-- DAFTAR BARANG DASHBOARD --}}
  <div class="mt-4 d-flex justify-content-between">
    <span class="h5 text-primary">Barang Terbaru</span>
    <a href="/barang" class="btn btn-icon icon-right">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="card mt-1">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jenis Barang</th>
              <th scope="col">Stok</th>
              <th scope="col">Harga</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($barang as $brg)
            <tr>
              <th scope="row">{{ ++$i }}</th>
              <td>{{ $brg->kode_barang }}</td>
              <td>{{ $brg->nama_barang }}</td>
              <td>{{ $brg->jenis_barang->nama_jenis }}</td>
              <td>{{ $brg->stok }}</td>
              <td>Rp {{ number_format(intval($brg->harga)) }}</td>
              <td class="text-center">
                <a href="{{ route('barang.show', $brg->id) }}" class="btn btn-icon btn-warning mr-2">
                  <i class="fas fa-eye"></i>
                </a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- DAFTAR RAK DASHBOARD --}}
  <div class="mt-4 d-flex justify-content-between">
    <span class="h5 text-primary">Rak Terbaru</span>
    <a href="/rak" class="btn btn-icon icon-right">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="row mt-1">
    @foreach($kode_rak as $kdrk)
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card py-3">

        <div class="px-3 d-flex justify-content-between">
          <h6 class="h5 font-weight-bold text-primary">RAK {{$kdrk->kode_rak}}</h6>
          <div>
            <span class="badge badge-success">Baru</span>
          </div>
        </div>

        @foreach ($rak_main as $rm)
        <div class="px-3">
          <div class="main-row">
            <p class="h5 mb-2 mt-2">{{$rm->nama_main_row}}</p>
            <div class="pr-2 pl-2 pb-1 pt-1 bg-light text-center">
              @foreach ($rak_sub as $rs)
              <div class="bg-secondary mb-1 mt-1 p-1">{{$rs->nama_sub_row}}</div>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
    @endforeach
  </div>
</section>
@endsection
