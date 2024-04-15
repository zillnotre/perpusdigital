<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $buku = buku::all();
        return view('buku.index', ['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',

        ]);
        buku::create([
            'judul' =>$request->judul,
            'penulis' =>$request->penulis,
            'penerbit' =>$request->penerbit,
            'tahun_terbit' =>$request->tahun_terbit,

        ]);
        return redirect('buku')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Buku::where('id',$id)->first();
        return view('buku.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',

    ]);
    $data = ([
        'judul' =>$request->judul,
        'penulis' =>$request->penulis,
        'penerbit' =>$request->penerbit,
        'tahun_terbit' =>$request->tahun_terbit,

    ]);
    Buku::where('id',$id)->update($data);
    return redirect('buku')->with('success','Data berhasil dirubah!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id',$id)->delete();
        return redirect('buku')->with('success','Data buku dihapus!');
    }

}
