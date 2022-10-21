@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">LABORATORIUM</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">PENGAJUAN RENCANA ANGGARAN BIAYA</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <a href="/laboratorium/create">TAMBAH</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Uraian</th>
                                <th>Harga Satuan</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Total Biaya</th>
                                <th>Keterangan</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($laboratorium as $e=>$l)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$l->tanggal_pengajuan}}</td>
                                <td>{{$l->uraian}}</td>
                                <td>Rp {{$l->harga_satuan}}</td>
                                <td>{{$l->volume}}</td>
                                <td>{{$l->satuan}}</td>
                                <td>Rp {{$l->total_biaya}}</td>
                                <td>{{$l->keterangan}}</td>
                                <td>
                                    <a href="/laboratorium/{{$l->id}}/edit">Edit</a>
                                    <form action="/laboratorium/{{$l->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                    </div>
                    <!-- ./wrapper -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

@endsection