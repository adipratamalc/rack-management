@extends('layouts.app')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Daftar Barang</h1>

    <div class="ml-auto">
      <button class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#modalAdd">
        <i class="fas fa-plus"></i> Tambah Barang
      </button>
    </div>
  </div>

  <div class="card">
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
</section>


{{-- MODAL ADD --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalAdd">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label>Kode Barang</label>
          <input type="text" class="form-control">
        </div>

        <div class="form-group">
          <label>Kode Rak</label>
          <select class="form-control">
            <option>AA</option>
            <option>AB</option>
            <option>AC</option>
          </select>
        </div>

        <div class="form-group">
          <label>Rak Main Row</label>
          <select class="form-control">
            <option>First</option>
            <option>Second</option>
            <option>Third</option>
          </select>
        </div>

        <div class="form-group">
          <label>Rak Sub Row</label>
          <select class="form-control">
            <option>Top</option>
            <option>Middle</option>
            <option>Bottom</option>
          </select>
        </div>
      </div>

      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

{{-- MODAL EDIT --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalEdit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" class="form-control" value="Silver Stone Frag">
        </div>

        <div class="form-group">
          <label>Kode Barang</label>
          <input type="text" class="form-control" value="SRG0001">
        </div>

        <div class="form-group">
          <label>Kode Rak</label>
          <select class="form-control">
            <option>AA</option>
            <option>AB</option>
            <option>AC</option>
          </select>
        </div>

        <div class="form-group">
          <label>Rak Main Row</label>
          <select class="form-control">
            <option>First</option>
            <option>Second</option>
            <option>Third</option>
          </select>
        </div>

        <div class="form-group">
          <label>Rak Sub Row</label>
          <select class="form-control">
            <option>Top</option>
            <option>Middle</option>
            <option>Bottom</option>
          </select>
        </div>
      </div>

      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection
