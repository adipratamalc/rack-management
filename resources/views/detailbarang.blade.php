@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Detail Barang</h1>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-6 d-flex flex-column">
        <h2 class="title-product text-primary">Cincin 23FWDDK</h2>
        <div class="d-flex flex-column align-items-center">
          <img alt="image" src="../assets/img/product-ex.png" class="img-fluid w-50">
        </div>

        <div class="d-flex flex-column">
          <p class="h4">IDR 200.000</p>
          <p class="h5 font-italic">Ring</p>
          <p class="h5">Stok: <span class="text-primary">7</span></p>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="text-center p-4 bg-light rounded mb-2">
          <span class="h5">Posisi <b>Cincin 23FWDDK</b> berada pada <b>“RAK A, First Row - Middle”</b></span>
        </div>

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
@endsection
