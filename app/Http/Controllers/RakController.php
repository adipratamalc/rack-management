<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Rak_main_row;
use App\Models\Rak_sub_row;
use App\Models\Kode_rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rak = Rak::all();
        $rak_main = Rak_main_row::all();
        $rak_sub = Rak_sub_row::all();
        $kode_rak = Kode_rak::orderBy('kode_rak', 'ASC')->get();
        return view('daftarrak', compact('rak', 'rak_main', 'rak_sub', 'kode_rak'));
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
        $kode_rak_tb = Kode_rak::create([
            'kode_rak' => $request->kode_rak
        ]);

        $rak_main = Rak_main_row::orderBy('id', 'ASC')->get();
        $rak_sub = Rak_sub_row::orderBy('id', 'ASC')->get();
        foreach ($rak_main as $rm) {
            foreach ($rak_sub as $rs) {
                Rak::create([
                    'main_row_id' => $rm->id,
                    'sub_row_id' => $rs->id,
                    'kode_rak_id' => $kode_rak_tb->id
                ]);
            }
        }

        //redirect to index
        return redirect()->route('daftar-rak.index')->with('success', 'Data Berhasil Disimpan!');
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
        $kode_rak = Kode_rak::findOrFail($id);
        $kode_rak->update([
            'kode_rak' => $request->kode_rak
        ]);

        //redirect to index
        return redirect()->route('daftar-rak.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rak::where('kode_rak_id', $id)->delete();
        Kode_rak::findOrFail($id)->delete();

        return redirect()->route('daftar-rak.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
