@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">ALOKASI DANA</h1>
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
                    <form action="/alokasidana/{{$alokasidana->id}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal Pengajuan</label><br>
                                <input type="date" name="tanggal_pengajuan" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Indikatif Program</label><br>
                                <input type="text" name="indikatif_program" class="form-control" placeholder=" " value="{{$alokasidana->indikatif_program}}">
                            </div>
                            <div class="form-group">
                                <label>Uraian</label><br>
                                <input type="text" name="uraian" class="form-control" placeholder=" " value="{{$alokasidana->uraian}}">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Biaya</label><br>
                                <input type="text" name="jumlah_biaya" class="form-control" placeholder=" " value="{{$alokasidana->jumlah_biaya}}">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label><br>
                                <input type="text" name="keterangan" class="form-control" placeholder=" " value="{{$alokasidana->keterangan}}">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                                <a href="/user-data">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.content-wrapper -->

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
</section>

@endsection