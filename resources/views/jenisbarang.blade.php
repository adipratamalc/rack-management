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
                <button class="btn btn-icon btn-info mr-2" data-toggle="modal" data-target="#modalEdit-{{$jns->id}}">
                  <i class="fas fa-pen"></i>
                </button>
                <button type="submit" class="btn btn-icon btn-danger" data-toggle="modal"
                  data-target="#modalDelete-{{$jns->id}}">
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

      <form action="{{ route('jenis-barang.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Jenis</label>
            <input type="text" class="form-control" name="nama_jenis">
          </div>
        </div>

        <div class="modal-footer bg-whitesmoke br">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@foreach ($jenis_barang as $jns)
{{-- MODAL EDIT --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalEdit-{{$jns->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Jenis Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Nama Jenis</label>
          <input type="text" class="form-control" value="{{$jns->nama_jenis}}">
        </div>
      </div>

      <form action="">
        <div class="modal-footer bg-whitesmoke br">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- MODAL DELETE --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalDelete-{{$jns->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Jenis Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>Yakin ingin menghapus?</p>
      </div>

      <form action="{{ route('jenis-barang.destroy', $jns->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="modal-footer bg-whitesmoke br">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

@endsection
