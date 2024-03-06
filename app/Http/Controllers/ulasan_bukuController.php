<?php

namespace App\Http\Controllers;

use App\Models\ulasan_buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ulasan_bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulasan_buku = ulasan_buku::all();
        return view('ulasan_buku.index', ['ulasan_buku'=>$ulasan_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ulasan_buku.create');
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
            'ulasan' => 'required',
            'rating' => 'required',

        ]);
        ulasan_buku::create([
            'user_id' =>$request->user_id,
            'buku_id' =>$request->buku_id,
            'ulasan' =>$request->ulasan,
            'rating' =>$request->rating,

        ]);
        return redirect('ulasan_buku')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ulasan_buku  $ulasan_buku
     * @return \Illuminate\Http\Response
     */
    public function show(ulasan_buku $ulasan_buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ulasan_buku  $ulasan_buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ulasan_buku::where('id',$id)->first();
        return view('ulasan_buku.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ulasan_buku  $ulasan_buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'ulasan' => 'required',
            'rating' => 'required',

        ]);
        $data =([
            'user_id' =>$request->user_id,
            'buku_id' =>$request->buku_id,
            'ulasan' =>$request->ulasan,
            'rating' =>$request->rating,

        ]);
        ulasan_buku::where('id',$id)->update($data);
    return redirect('ulasan_buku')->with('success','Data berhasil dirubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ulasan_buku  $ulasan_buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ulasan_buku::where('id',$id)->delete();
        return redirect('ulasan_buku')->with('success','Data buku dihapus!');
    }
}
