{{-- @extends('layouts.app')
@section('content')

<form action="{{url('buku/'.$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py3">
                <h6>Form Edit Data Buku</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" class="form-control" name="judul" value="{{$data->judul}}"
                    </div>
                    <br>

                        <label>Nama Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="{{$data->penulis}}"
                </div>
                <br>



                        <label>Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="{{$data->penerbit}}"
            </div>
            <br>


                        <label>Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" value="{{$data->tahun_terbit}}"

                </div>
                <br>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection --}}
