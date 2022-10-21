@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">STATUS TUGAS AKHIR</h1>
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

                    <!-- form start -->
                    <div class="card-body">

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
                                <th>Status</th>
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
                                <td>@if($t->status==0)
                                    pending
                                    @elseif($t->status==1)
                                    Disetujui
                                    @elseif($t->status==2)
                                    Tidak Disetujui
                                    @endif
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