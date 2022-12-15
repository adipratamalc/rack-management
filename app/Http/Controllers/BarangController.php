<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis_barang;
use App\Models\Kode_rak;
use App\Models\Rak;
use App\Models\Rak_main_row;
use App\Models\Rak_sub_row;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $jenisbarang = Jenis_barang::orderBy('nama_jenis', 'ASC')->get();
        $rak = Rak::all();
        $rak_main = Rak_main_row::orderBy('nama_main_row', 'ASC')->get();
        $rak_sub = Rak_sub_row::orderBy('nama_sub_row', 'ASC')->get();
        $kode_rak = Kode_rak::orderBy('kode_rak', 'ASC')->get();
        return view('daftarbarang', compact('barang', 'jenisbarang', 'rak', 'rak_main', 'rak_sub', 'kode_rak'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'gambar_barang'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // upload image
        $image = $request->file('gambar_barang');
        if ($image !== null) {
            $image->storeAs('public/barang', $image->hashName());
            $gambar_barang = $image->hashName();
        } else {
            $gambar_barang = "no-image.jpg";
        }

        // get rak id
        $get_rak_id = Rak::where('kode_rak_id', $request->kode_rak_id)
            ->where('main_row_id', $request->main_row)
            ->where('sub_row_id', $request->sub_row)
            ->get('id');

        foreach ($get_rak_id as $rkid) {
            $rak_id = $rkid->id;
        }

        //create post
        Barang::create([
            'rak_id'            => $rak_id,
            'jenis_barang_id'   => $request->jenis_barang_id,
            'kode_barang'       => $request->kode_barang,
            'nama_barang'       => $request->nama_barang,
            'gambar_barang'     => $gambar_barang,
            'stok'              => $request->stok,
            'harga'             => $request->harga
        ]);

        //redirect to index
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        $rak = Rak::findOrFail($barang->rak_id);
        $rak_kode = Kode_rak::findOrFail($rak->kode_rak_id);
        $rak_main = Rak_main_row::findOrFail($rak->main_row_id);
        $rak_sub = Rak_sub_row::findOrFail($rak->sub_row_id);

        $rak_mains = Rak_main_row::orderBy('nama_main_row', 'ASC')->get();
        $rak_subs = Rak_sub_row::orderBy('nama_sub_row', 'ASC')->get();

        return view('detailbarang', compact('barang', 'rak', 'rak_kode', 'rak_main', 'rak_sub', 'rak_mains', 'rak_subs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        //validate form
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // get rak id
        $get_rak_id = Rak::where('kode_rak_id', $request->kode_rak_id)
            ->where('main_row_id', $request->main_row)
            ->where('sub_row_id', $request->sub_row)
            ->get('id');

        foreach ($get_rak_id as $rkid) {
            $rak_id = $rkid->id;
        }

        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('gambar_barang');
            if ($image !== null) {
                $image->storeAs('public/barang', $image->hashName());
                $gambar_barang = $image->hashName();
            } else {
                $gambar_barang = "no-image.jpg";
            }
            $barang->update([
                'rak_id'            => $rak_id,
                'jenis_barang_id'   => $request->jenis_barang_id,
                'kode_barang'       => $request->kode_barang,
                'nama_barang'       => $request->nama_barang,
                'gambar_barang'     => $gambar_barang,
                'stok'              => $request->stok,
                'harga'             => $request->harga
            ]);
        } else {
            $barang->update([
                'rak_id'            => $rak_id,
                'jenis_barang_id'   => $request->jenis_barang_id,
                'kode_barang'       => $request->kode_barang,
                'nama_barang'       => $request->nama_barang,
                'stok'              => $request->stok,
                'harga'             => $request->harga
            ]);
        }

        //redirect to index
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
