@extends('layout.mastercode')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">LIHAT LAPORAN HASIL PENGAJUAN</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <!-- left column -->
    <div class="col-md-12">
        <!-- form start -->
        <div class="car-body">
            <div class="form-group">
                <label for="Label">Tanggal Awal</label>
                <input type="date" name="tglawal" id="tglawal" class="form-control" />
            </div>
            <div class="form-group">
                <label for="Label">Tanggal Akhir</label>
                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
            </div>
            <div class="input-group mb-3">
                <a href="#" onclick="this.href='/cetaklaporan/' + document.getElemdocument.getElementById('tahun').value"
                target="_blank" class="btn btn-primary col-md-12">Cetak Laporan</a>
            </div>
        </div>
        <!DOCTYPE html>
<html>

@endsection