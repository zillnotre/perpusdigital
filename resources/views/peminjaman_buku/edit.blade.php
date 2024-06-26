@extends('layouts.app')
@section('content')

<form action="{{url('peminjaman_buku/'.$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py3">
                <h6>Form Edit Data Peminjaman Buku</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>User ID</label>
                        <input type="text" class="form-control" name="user_id" value="{{$data->user_id}}"
                    </div>
                    <br>

                        <label>Buku ID</label>
                        <input type="text" class="form-control" name="buku_id" value="{{$data->buku_id}}"
                </div>
                <br>



                        <label>Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_peminjaman" value="{{$data->tanggal_peminjaman}}"
            </div>
            <br>


                        <label>Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_pengembalian" value="{{$data->tanggal_pengembalian}}"

                </div>
                <br>
                <label>Status Peminjaman</label>
                        <input type="text" class="form-control" name="status_peminjaman" value="{{$data->status_peminjaman}}"
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
