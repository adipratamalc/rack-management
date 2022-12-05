@extends('layouts.app')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Daftar Jenis Barang</h1>

    <div class="ml-auto">
      <button class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#modalAdd">
        <i class="fas fa-plus"></i> Tambah Jenis
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
              <th scope="col">Nama Jenis</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jenis_barang as $jns)
            <tr>
              <th scope="row">{{ ++$i }}</th>
              <td>{{$jns->nama_jenis}}</td>
              <td class="text-center">
                <button class="btn btn-icon btn-info mr-2" data-toggle="modal" data-target="#modalEdit">
                  <i class="fas fa-pen"></i>
                </button>
                <button class="btn btn-icon btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
            @endforeach
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
        <h5 class="modal-title">Tambah Jenis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Nama Jenis</label>
          <input type="text" class="form-control">
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
          <label>Nama Jenis</label>
          <input type="text" class="form-control" value="Ring">
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