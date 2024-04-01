@extends('layouts.app')
@section('content')

<form action="{{route('kategori_buku.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py3">
                <h6>Form Tambah Kategori Buku</h6>
                </div>
                <div class="card-body">

                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" value="{{old('nama_kategori')}}"
                    </div>
                    
                <br>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
