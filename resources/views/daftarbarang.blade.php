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
              <td>{{ $brg->harga }}</td>
              <td class="text-center">
                <button class="btn btn-icon btn-info mr-2" data-toggle="modal" data-target="#modalEdit-{{$brg->id}}">
                  <i class="fas fa-pen"></i>
                </button>
                <button class="btn btn-icon btn-danger" data-toggle="modal" data-target="#modalDelete-{{$brg->id}}">
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
        <h5 class="modal-title">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('daftar-barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="modal-body">

          <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" id="file" name="gambar_barang" />
            <div id="imagePreview"><img src="" class="rounded pt-1" style="width: 250px" id="gambar"></div>
          </div>

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" required class="form-control" name="nama_barang">
          </div>

          <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" required class="form-control" name="kode_barang">
          </div>

          <div class="form-group">
            <label>Jenis barang</label>
            <select name="jenis_barang_id" class="form-control">
              @foreach ($jenisbarang as $jb)
              <option value="{{$jb->id}}">{{$jb->nama_jenis}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Kode Rak</label>
            <select name="kode_rak_id" class="form-control">
              @foreach ($t_kode_rak as $kdrk)
              <option value="{{$kdrk->id}}">{{$kdrk->kode_rak}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Rak Main Row</label>
            <select name="main_row" class="form-control">
              @foreach ($rak_main as $rk_m)
              <option value="{{$rk_m->id}}">{{$rk_m->nama_main_row}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Rak Sub Row</label>
            <option value="" selected>Pilih salah satu</option>

            <script>
              const mainRowVal = document.getElementById("mainRow");
              const subRowList = document.getElementById("subRowList");
              function createSubRow() {
              for (let i = 0; i < mainRowVal.value; i++) {
              subRowList.innerHTML += `
              <select name="sub_row" class="form-control">
                @foreach ($rak_sub as $rk_s)
                <option value="{{$rk_s->id}}">{{$rk_s->nama_sub_row}}</option>
                @endforeach
              </select>
              `;
            }
          }
            </script>

          </div>

          <div class="form-group">
            <label>Stok Barang</label>
            <input type="text" required class="form-control" name="stok">
          </div>

          <div class="form-group">
            <label>harga Barang</label>
            <input type="text" required class="form-control" name="harga">
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

@foreach ($barang as $brg)
{{-- MODAL EDIT --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalEdit-{{$brg->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('daftar-barang.update', $brg->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="modal-body">

          <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" id="file" name="gambar_barang" />
            <!-- <div id="imagePreview"><img src="" class="rounded pt-1" style="width: 250px" id="gambar"></div> -->
          </div>

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" required class="form-control" name="nama_barang" value="{{$brg->nama_barang}}">
          </div>

          <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" required class="form-control" name="kode_barang" value="{{$brg->kode_barang}}">
          </div>

          <div class="form-group">
            <label>Jenis barang</label>
            <select name="jenis_barang_id" class="form-control">
              <option value="{{$brg->jenis_barang->id}}">{{$brg->jenis_barang->nama_jenis}}</option>
              @foreach ($jenisbarang as $jb)
              <option value="{{$jb->id}}">{{$jb->nama_jenis}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Kode Rak</label>
            <select name="kode_rak" class="form-control">
              <option value="{{$brg->rak->_id}}">{{$brg->rak->kode_rak}}</option>
              @foreach ($rak as $rk)
              <option value="{{$rk->kode_rak}}">{{$rk->kode_rak}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Rak Main Row</label>
            <select name="main_row" class="form-control">
              @foreach ($rak_main as $rk_m)
              @if ($rk_m->id === $brg->rak->main_row_id)
              <option value="{{$rk_m->id}}">{{$rk_m->nama_main_row}}</option>
              @endif
              @endforeach
              @foreach ($rak_main as $rk_m)
              <option value="{{$rk_m->id}}">{{$rk_m->nama_main_row}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Rak Sub Row</label>
            <select name="sub_row" class="form-control">
              @foreach ($rak_sub as $rk_s)
              @if ($rk_s->id === $brg->rak->sub_row_id)
              <option value="{{$rk_s->id}}">{{$rk_s->nama_sub_row}} </option>
              @endif
              @endforeach
              @foreach ($rak_sub as $rk_s)
              <option value="{{$rk_s->id}}">{{$rk_s->nama_sub_row}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Stok Barang</label>
            <input type="text" required class="form-control" name="stok" value="{{$brg->stok}}">
          </div>

          <div class=" form-group">
            <label>harga Barang</label>
            <input type="text" required class="form-control" name="harga" value="{{$brg->harga}}">
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
<div class="modal fade" role="dialog" tabindex="-1" id="modalDelete-{{$brg->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>Yakin ingin menghapus?</p>
      </div>

      <form action="{{ route('daftar-barang.destroy', $brg->id) }}" method="POST">
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
