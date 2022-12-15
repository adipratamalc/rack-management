@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Daftar Rak</h1>

    <div class="ml-auto">
      <button class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#modalAdd">
        <i class="fas fa-plus"></i> Tambah Rak
      </button>
    </div>
  </div>

  @include('layouts.partials.flashmsg')

  <div class="section-body">
    <div class="row">
      @foreach($kode_rak as $kdrk)
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card py-3">

          <div class="px-3 d-flex justify-content-between">
            <h6 class="h5 font-weight-bold text-primary">RAK {{$kdrk->kode_rak}}</h6>
            <div>
              <button class="btn btn-icon btn-info" data-toggle="modal" data-target="#modalEdit-{{$kdrk->id}}">
                <i class="fas fa-pen"></i>
              </button>
              <button class="btn btn-icon btn-danger" data-toggle="modal" data-target="#modalDelete-{{$kdrk->id}}">
                <i class="fas fa-trash"></i>
              </button>
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
  </div>
</section>

{{-- MODAL ADD --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalAdd">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Rak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('rak.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">
          <div class="form-group">
            <label>Kode Rak</label>
            <input type="text" class="form-control" name="kode_rak">
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

@foreach ($kode_rak as $kdrk)
{{-- MODAL EDIT --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalEdit-{{$kdrk->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Rak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('rak.update', $kdrk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="modal-body">
          <div class="form-group">
            <label>Kode Rak</label>
            <input type="text" required class="form-control" name="kode_rak" value="{{$kdrk->kode_rak}}">
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

{{-- MODAL DELETE --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalDelete-{{$kdrk->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Rak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>Yakin ingin menghapus rak {{$kdrk->kode_rak}}?</p>
      </div>

      <form action="{{ route('rak.destroy', $kdrk->id) }}" method="POST">
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