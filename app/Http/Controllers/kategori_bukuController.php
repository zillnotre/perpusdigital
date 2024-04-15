<?php

namespace App\Http\Controllers;

use App\Models\kategori_buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kategori_bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $kategori_buku = kategori_buku::all();
    return view('kategori_buku.index', ['kategori_buku'=>$kategori_buku]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_buku.create');
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
            'nama_kategori' => 'required',


        ]);
        kategori_buku::create([
            'nama_kategori' =>$request->nama_kategori,


        ]);
        return redirect('kategori_buku')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori_buku  $kategori_buku
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_buku $kategori_buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori_buku  $kategori_buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kategori_buku::where('id',$id)->first();
        return view('kategori_buku.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori_buku  $kategori_buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required',


        ]);
        $data = ([
            'nama_kategori' =>$request->nama_kategori,


        ]);
        kategori_buku::where('id',$id)->update($data);
        return redirect('kategori_buku')->with('success','Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori_buku  $kategori_buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_buku::where('id',$id)->delete();
        return redirect('kategori_buku')->with('success','Data buku dihapus!');
    }
}
