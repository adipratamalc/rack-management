<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Rak_main_row;
use App\Models\Rak_sub_row;
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
        return view('daftarrak', compact('rak', 'rak_main', 'rak_sub'));
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
        //create post

        // Rak::create([
        //     'main_row_id' => $request->main_row_id,
        //     'sub_row_id' => $request->sub_row_id,
        //     'kode_rak' => $request->kode_rak
        // ]);

        // //redirect to index
        // return redirect()->route('daftar-rak.index')->with('success', 'Data Berhasil Disimpan!');
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
