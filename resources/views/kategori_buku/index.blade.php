@extends('layouts/app')
@section('content')

@if(session('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori Buku</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" href="{{route('kategori_buku.create')}}">Tambah Buku</a>

                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                    <th>No</th>
                                                         <th>Nama Kategori Buku</th>
                                                                    <th>Aksi</th>

                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php $no= 1 ?>
                                                                    @foreach($kategori_buku as $kategori_buku)
                                                                    <tr>
                                                                        <td>{{$no++}}</td>
                                                                        <td>{{$kategori_buku->nama_kategori}}</td>

                                                                        <td><a class="btn btn-sm btn-primary" href="{{url('kategori_buku/'.$kategori_buku->id.'/edit')}}">Edit</a>
                                                <form action="{{url('kategori_buku/'.$kategori_buku->id)}}" method="POST" style="display: inline-block">
                                                @csrf
                                            @method('delete')
                                        <button class="btn btn sm btn-danger" onclick="return confirm ('Apakah anda ingin menghapus data ini?')">Delete</button></form>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.container-fluid -->

                                        </div>
                                        @endsection
                                        <!-- End of Main Content -->

                                        <!-- Footer -->

                                        <!-- End of Footer -->






