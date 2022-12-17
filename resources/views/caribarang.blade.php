@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Cari Barang</h1>
  </div>

  <div class="section-body">
    <div class="column">
      <div class="col-12  d-flex flex-column mb-3">
        <form action="{{ route('search') }}" method="GET">
          <div class="d-flex w-100">
            <input class="form-control form-control-lg" name="search" type="search" placeholder="Search"
              aria-label="Search">

            <button type="submit" class="btn bg-white btn-rounded ml-2">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </div>

      <div class="col-12 ">
        <div class="card p-3 d-flex justify-content-center align-items-center">
          <p class="h5 font-italic text-center">Hasil pencarian akan tampil disini</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection
