<?php

namespace App\Http\Controllers;

use App\Models\Jenis_barang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $jenis_barang = Jenis_barang::latest()->paginate(5);

    return view('jenisbarang', compact('jenis_barang'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //validasi
    $validated = $request->validate([
      'nama_jenis' => 'required',
    ]);

    $jenisbrg = new Jenis_barang();
    $jenisbrg->nama_jenis = $request->nama_jenis;
    $jenisbrg->save();
    return redirect()->route('jenis-barang.index')
      ->with('success', 'Data berhasil dibuat!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $jenisbrg = Jenis_barang::findOrFail($id);
    $jenisbrg->delete();
    return redirect()->route('jenis-barang.index')
      ->with('success', 'Data berhasil dihapus!');
  }
}
