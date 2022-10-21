@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">KULIAH PAKAR</h1>
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
                    <form action="/kuliahpakar/store" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal Pengajuan</label><br>
                                <input type="date" name="tanggal_pengajuan" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Nama Kegiatan</label><br>
                                <input type="text" name="nama_kegiatan" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Uraian</label><br>
                                <input type="text" name="uraian" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Harga Satuan</label><br>
                                <input type="number" name="harga_satuan" class="form-control" id="harga_satuan" onkeyup="sum();" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Volume</label><br>
                                <input type="number" name="volume" class="form-control" id="volume" onkeyup="sum();" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Satuan</label><br>
                                <input type="text" name="satuan" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Total Biaya</label><br>
                                <input type="number" name="total_biaya" class="form-control" id="total_biaya" onkeyup="sum();" placeholder=" " readonly>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label><br>
                                <input type="text" name="keterangan" class="form-control" placeholder=" ">
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