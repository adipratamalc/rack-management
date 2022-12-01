@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Cari Barang</h1>
    </div>

    <div class="section-body">
      <form class="px-5">
        <div class="d-flex w-100">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </form>

      <div class="px-5 mt-3">
        <div class="text-center p-2 bg-light">
          <span class="h5">Posisi <b>Gelang 23FWDDK</b> berada pada <b>“RAK A, First Row - Middle”</b></span>
        </div>
      </div>

      <div class="row d-flex justify-content-center mt-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card py-3">
            <div class="px-3">
              <h6 class="h5 font-weight-bold text-primary">RAK A</h6>
            </div>

            <div class="px-3">
              <div class="main-row">
                <p class="h5 mb-1">First</p>
                <div class="p-2 bg-light text-center border border-danger">
                  <div class="bg-secondary mb-2 p-1">Top</div>
                  <div class="bg-danger mb-2 p-1 text-white">Middle</div>
                  <div class="bg-secondary p-1">Bottom</div>
                </div>
              </div>

              <div class="main-row mt-3">
                <p class="h5 mb-1">Second</p>
                <div class="p-2 bg-light text-center">
                  <div class="bg-secondary mb-2 p-1">Top</div>
                  <div class="bg-secondary mb-2 p-1">Middle</div>
                  <div class="bg-secondary p-1">Bottom</div>
                </div>
              </div>

              <div class="main-row mt-3">
                <p class="h5 mb-1">Third</p>
                <div class="p-2 bg-light text-center">
                  <div class="bg-secondary mb-2 p-1">Top</div>
                  <div class="bg-secondary mb-2 p-1">Middle</div>
                  <div class="bg-secondary p-1">Bottom</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection