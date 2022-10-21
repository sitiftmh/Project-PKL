@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">RAB KULIAH PAKAR</h1>
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
                                <th>Nama Kegiatan</th>
                                <th>Uraian</th>
                                <th>Harga Satuan</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Total Biaya</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($kuliahpakar as $e=>$k)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$k->tanggal_pengajuan}}</td>
                                <td>{{$k->nama_kegiatan}}</td>
                                <td>{{$k->uraian}}</td>
                                <td>Rp. {{$k->harga_satuan}}</td>
                                <td>{{$k->volume}}</td>
                                <td>{{$k->satuan}}</td>
                                <td>Rp. {{$k->total_biaya}}</td>
                                <td>{{$k->keterangan}}</td>
                                <td>@if($k->status==0)
                                    Pending
                                    @elseif($k->status==1)
                                    Disetujui
                                    @elseif($k->status==2)
                                    Tidak Disetujui
                                    @endif
                                </td>
                                <td>@if($k->status==0)
                                    <a href="/valkuliahpakar/{{$k->id}}/setuju" class="btn btn-primary">Disetujui</a>
                                    @endif
                                    @if($k->status==0)
                                    <a href="/valkuliahpakar/{{$k->id}}/tolak" class="btn btn-danger">Tidak Disetujui</a>
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