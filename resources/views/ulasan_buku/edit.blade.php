@extends('layouts.app')
@section('content')

<form action="{{url('ulasan_buku/'.$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py3">
                <h6>Form Edit Data Ulasan Buku</h6>
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



                        <label>Ulasan</label>
                        <input type="text" class="form-control" name="ulasan" value="{{$data->ulasan}}"
            </div>
            <br>


                        <label>Rating</label>
                        <input type="number" class="form-control" name="rating" value="{{$data->rating}}"

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
