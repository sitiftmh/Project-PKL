@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PRAKTIK KERJA LAPANGAN</h1>
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
                        <a href="/pkl/create">TAMBAH</a>
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
                            @foreach($pkl as $e=>$p)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$p->tanggal_pengajuan}}</td>
                                <td>{{$p->uraian}}</td>
                                <td>Rp. {{$p->harga_satuan}}</td>
                                <td>{{$p->volume}}</td>
                                <td>{{$p->satuan}}</td>
                                <td>Rp. {{$p->total_biaya}}</td>
                                <td>{{$p->keterangan}}</td>
                                <td>
                                    <a href="/pkl/{{$p->id}}/edit">Edit</a>
                                    <form action="/pkl/{{$p->id}}" method="POST">
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