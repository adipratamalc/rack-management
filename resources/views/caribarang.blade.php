@extends('layouts.app')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Cari Barang</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-6 d-flex flex-column mb-3">
          <form>
            <div class="d-flex w-100">
              <input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">

              <button class="btn bg-white btn-rounded ml-2" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>

        <div class="col-12 col-md-6">
          <div class="card p-3 d-flex justify-content-center align-items-center" style="height: 400px">
            <p class="h5 font-italic text-center">Informasi RAK akan tampil disini</p>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</div>
@endsection
