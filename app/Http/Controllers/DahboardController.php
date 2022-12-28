<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis_barang;
use App\Models\Kode_rak;
use App\Models\Rak;
use App\Models\Rak_main_row;
use App\Models\Rak_sub_row;

class DahboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $barang = Barang::latest()->paginate(5);
    $jenisbarang = Jenis_barang::orderBy('nama_jenis', 'ASC')->get();

    $rak = Rak::latest()->paginate(5);
    $rak_main = Rak_main_row::all();
    $rak_sub = Rak_sub_row::all();
    $kode_rak = Kode_rak::orderBy('created_at', 'DESC')->paginate(4);

    return view('dashboard', compact('barang', 'jenisbarang', 'rak', 'rak_main', 'rak_sub', 'kode_rak'))->with('i', 0);
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
    //
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
    //
  }
}
