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
