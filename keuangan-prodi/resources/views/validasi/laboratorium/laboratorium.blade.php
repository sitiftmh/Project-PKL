@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">RAB LABORATORIUM</h1>
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
                                <th>Total Biaya</th>
                                <th>Keterangan</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($laboratorium as $e=>$l)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$l->tanggal_pengajuan}}</td>
                                <td>{{$l->uraian}}</td>
                                <td>{{$l->harga_satuan}}</td>
                                <td>{{$l->volume}}</td>
                                <td>Rp. {{$l->satuan}}</td>
                                <td>Rp. {{$l->total_biaya}}</td>
                                <td>{{$l->keterangan}}</td>
                                <td>@if($l->status==0)
                                    Pending
                                    @elseif($l->status==1)
                                    Disetujui
                                    @elseif($l->status==2)
                                    Tidak Disetujui
                                    @endif
                                </td>
                                <td>@if($l->status==0)
                                    <a href="/vallaboratorium/{{$l->id}}/setuju" class="btn btn-primary">SETUJUI</a>
                                    @endif
                                    @if($l->status==0)
                                    <a href="/vallaboratorium/{{$l->id}}/tolak" class="btn btn-danger">TIDAK SETUJUI</a>
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