<?php

namespace App\Http\Controllers;

use App\Models\peminjaman_buku;
use Illuminate\Http\Request;

class peminjaman_bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman_buku = peminjaman_buku::all();
        return view('peminjaman_buku.index', ['peminjaman_buku'=>$peminjaman_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman_buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status_peminjaman' => 'required',

        ]);
        peminjaman_buku::create([
            'user_id' =>$request->user_id,
            'buku_id' =>$request->buku_id,
            'tanggal_peminjaman' =>$request->tanggal_peminjaman,
            'tanggal_pengembalian' =>$request->tanggal_pengembalian,
            'status_peminjaman' =>$request->status_peminjaman,

        ]);
        return redirect('peminjaman_buku')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman_buku  $peminjaman_buku
     * @return \Illuminate\Http\Response
     */
    public function show(peminjaman_buku $peminjaman_buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman_buku  $peminjaman_buku
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman_buku $peminjaman_buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman_buku  $peminjaman_buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjaman_buku $peminjaman_buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman_buku  $peminjaman_buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman_buku $peminjaman_buku)
    {
        //
    }
}
