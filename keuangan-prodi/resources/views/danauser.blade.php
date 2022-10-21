@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PENGAJUAN RENCANA ANGGARAN BIAYA</h1>
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
                        <h3 class="card-title">ALOKASI DANA</h3>
                    </div>
                    <!-- form start -->
                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Indikatif Program</th>
                                <th>Uraian</th>
                                <th>Jumlah Biaya</th>
                                <th>Keterangan</th>
                            </tr>
                            @foreach($alokasidana as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->tanggal_pengajuan}}</td>
                                <td>{{$d->indikatif_program}}</td>
                                <td>{{$d->uraian}}</td>
                                <td>Rp. {{$d->jumlah_biaya}}</td>
                                <td>{{$d->keterangan}}</td>
                                <td>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection