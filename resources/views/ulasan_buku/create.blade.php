@extends('layouts.app')
@section('content')

<form action="{{route('ulasan_buku.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py3">
                <h6>Form Tambah Data Peminjaman Buku</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>ID User</label>
                        <input type="number" class="form-control" name="user_id" value="{{old('user_id')}}"
                    </div>
                    <br>
                        <label>ID Buku</label>
                        <input type="number" class="form-control" name="buku_id" value="{{old('buku_id')}}"
                </div>
                <br>

                        <label>Ulasan</label>
                        <input type="text" class="form-control" name="ulasan" value="{{old('ulasan')}}"
                </div>
                <br>



                        <label>Rating</label>
                        <input type="number" class="form-control" name="rating" value="{{old('rating')}}"
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
