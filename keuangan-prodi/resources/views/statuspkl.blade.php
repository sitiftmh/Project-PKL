@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">STATUS PRAKTIK KERJA LAPANGAN</h1>
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
                                <td>@if($p->status==0)
                                    pending
                                    @elseif($p->status==1)
                                    Disetujui
                                    @elseif($p->status==2)
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