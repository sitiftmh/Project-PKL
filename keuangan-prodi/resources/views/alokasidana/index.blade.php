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
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">PENGAJUAN RENCANA ANGGARAN BIAYA</h3>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        <a class="btn btn-primary btn-sm float-right" href="/alokasidana/create"> TAMBAH</a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Indikatif Program</th>
                                <th>Uraian</th>
                                <th>Jumlah Biaya</th>
                                <th>Keterangan</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($alokasidana as $e=>$d)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$d->tanggal_pengajuan}}</td>
                                <td>{{$d->indikatif_program}}</td>
                                <td>{{$d->uraian}}</td>
                                <td>Rp. {{$d->jumlah_biaya}}</td>
                                <td>{{$d->keterangan}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/alokasidana/{{$d->id}}/edit"> Edit</a>
                                    <form action="/alokasidana/{{$d->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    
                                        </a>
                                    </form>
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