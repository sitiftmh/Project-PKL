@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">RAB ASOSIASI</h1>
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

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Uraian</th>
                                <th>Harga Satuan</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Keterangan</th>
                                <th>Kegiatan</th>
                                <th>Total Biaya</th>
                                <th>Status</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($asosiasi as $e=>$a)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$a->tanggal_pengajuan}}</td>
                                <td>{{$a->uraian}}</td>
                                <td>Rp. {{$a->harga_satuan}}</td>
                                <td>{{$a->volume}}</td>
                                <td>{{$a->satuan}}</td>
                                <td>{{$a->keterangan}}</td>
                                <td>{{$a->kegiatan}}</td>
                                <td>Rp. {{$a->total_biaya}}</td>
                                <td>@if($a->status==0)
                                    PENDING
                                    @elseif($a->status==1)
                                    Disetujui
                                    @elseif($a->status==2)
                                    Tidak Disetujui
                                    @endif
                                </td>
                                <td>@if($a->status==0)
                                    <a href="/valasosiasi/{{$a->id}}/setuju" class="btn btn-primary">DISETUJUI</a>
                                    @endif
                                    @if($a->status==0)
                                    <a href="/valasosiasi/{{$a->id}}/tolak" class="btn btn-danger">TIDAK DISETUJUI</a>
                                    @endif
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