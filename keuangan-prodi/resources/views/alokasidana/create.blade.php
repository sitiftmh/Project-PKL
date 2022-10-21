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
                    <form action="/alokasidana/store" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal Pengajuan</label><br>
                                <input type="date" name="tanggal_pengajuan" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Indikatif Program</label><br>
                                <input class="form-control" type="text" name="indikatif_program" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Uraian</label><br>
                                <input class="form-control" type="text" name="uraian" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Biaya</label><br>
                                <input class="form-control" type="text" name="jumlah_biaya" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label><br>
                                <input class="form-control" type="text" name="keterangan" placeholder=" ">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                                <a href="/user-data">
                                </a>
                            </div>
                        </div>
                        <script>
                            function sum() {
                                var txtFirstNumberValue = document.getElementById('harga_satuan').value;
                                var txtSecondNumberValue = document.getElementById('volume').value;
                                var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                                if (!isNaN(result)) {
                                    document.getElementById('total_biaya').value = result;
                                }
                            }
                        </script>
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