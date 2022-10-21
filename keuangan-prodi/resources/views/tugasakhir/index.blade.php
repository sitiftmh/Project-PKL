@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">TUGAS AKHIR</h1>
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
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">PENGAJUAN RENCANA ANGGARAN BIAYA</h3>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        <a href="/tugasakhir/create">TAMBAH</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <td>Tanggal Pengajuan</td>
                                <th>Uraian</th>
                                <th>Harga Satuan</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Total Biaya</th>
                                <th>Keterangan</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($tugasakhir as $e=>$t)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$t->tanggal_pengajuan}}</td>
                                <td>{{$t->uraian}}</td>
                                <td>Rp. {{$t->harga_satuan}}</td>
                                <td>{{$t->volume}}</td>
                                <td>{{$t->satuan}}</td>
                                <td>Rp. {{$t->total_biaya}}</td>
                                <td>{{$t->keterangan}}</td>
                                <td>
                                    <a href="/tugasakhir/{{$t->id}}/edit">Edit</a>
                                    <form action="/tugasakhir/{{$t->id}}" method="POST">
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
    </div>
</section>

@endsection