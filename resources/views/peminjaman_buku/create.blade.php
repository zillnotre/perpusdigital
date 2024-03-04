@extends('layouts.app')
@section('content')

<form action="{{route('peminjaman_buku.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py3">
                <h6>Form Tambah Data Peminjaman Buku</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Peminjaman ID</label>
                        <input type="number" class="form-control" name="peminjaman_id" value="{{old('peminjaman_id')}}"
                    </div>
                    <br>
                    <div class="form-group">
                        <label>ID User</label>
                        <input type="number" class="form-control" name="user_id" value="{{old('user_id')}}"
                    </div>
                    <br>
                        <label>ID Buku</label>
                        <input type="number" class="form-control" name="buku_id" value="{{old('buku_id')}}"
                </div>
                <br>

                        <label>Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_peminjaman" value="{{old('tanggal_peminjaman')}}"
                </div>
                <br>



                        <label>Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_pengembalian" value="{{old('tanggal_pengembalian')}}"
            </div>
            <br>


                        <label>Status Peminjaman</label>
                        <input type="text" class="form-control" name="status_peminjaman" value="{{old('status_peminjaman')}}"

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
