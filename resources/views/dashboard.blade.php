@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Halaman Utama</h1>
  </div>

  <h2>Selamat Datang Semuanya, Admin Logi!</h2>

  {{-- DAFTAR BARANG DASHBOARD --}}
  <div class="card mt-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jenis Barang</th>
              <th scope="col">Harga</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>SRG001</td>
              <td>Silver Stone Frag</td>
              <td>Gelang</td>
              <td>IDR 200.000</td>
              <td class="text-center">
                <button class="btn btn-icon btn-info mr-2" data-toggle="modal" data-target="#modalEdit">
                  <i class="fas fa-pen"></i>
                </button>
                <button class="btn btn-icon btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>SRG001</td>
              <td>Silver Stone Frag</td>
              <td>Gelang</td>
              <td>IDR 200.000</td>
              <td class="text-center">
                <button class="btn btn-icon btn-info mr-2" data-toggle="modal" data-target="#modalEdit">
                  <i class="fas fa-pen"></i>
                </button>
                <button class="btn btn-icon btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>SRG001</td>
              <td>Silver Stone Frag</td>
              <td>Gelang</td>
              <td>IDR 200.000</td>
              <td class="text-center">
                <button class="btn btn-icon btn-info mr-2" data-toggle="modal" data-target="#modalEdit">
                  <i class="fas fa-pen"></i>
                </button>
                <button class="btn btn-icon btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- DAFTAR RAK DASHBOARD --}}
  <div class="row">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card py-3">
        <div class="px-3">
          <h6 class="h5 font-weight-bold text-primary">RAK A</h6>
        </div>

        <div class="px-3">
          <div class="main-row">
            <p class="h5 mb-1">First</p>
            <div class="p-2 bg-light text-center">
              <div class="bg-secondary mb-2 p-1">Top</div>
              <div class="bg-secondary mb-2 p-1">Middle</div>
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
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card py-3">
        <div class="px-3">
          <h6 class="h5 font-weight-bold text-primary">RAK A</h6>
        </div>

        <div class="px-3">
          <div class="main-row">
            <p class="h5 mb-1">First</p>
            <div class="p-2 bg-light text-center">
              <div class="bg-secondary mb-2 p-1">Top</div>
              <div class="bg-secondary mb-2 p-1">Middle</div>
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
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card py-3">
        <div class="px-3">
          <h6 class="h5 font-weight-bold text-primary">RAK A</h6>
        </div>

        <div class="px-3">
          <div class="main-row">
            <p class="h5 mb-1">First</p>
            <div class="p-2 bg-light text-center">
              <div class="bg-secondary mb-2 p-1">Top</div>
              <div class="bg-secondary mb-2 p-1">Middle</div>
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
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card py-3">
        <div class="px-3">
          <h6 class="h5 font-weight-bold text-primary">RAK A</h6>
        </div>

        <div class="px-3">
          <div class="main-row">
            <p class="h5 mb-1">First</p>
            <div class="p-2 bg-light text-center">
              <div class="bg-secondary mb-2 p-1">Top</div>
              <div class="bg-secondary mb-2 p-1">Middle</div>
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
</section>
@endsection
