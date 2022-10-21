<!DOCTYPE html>
<html>

<head>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->

    <style>
        #example2 {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #example2 td,
        #example2 th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #example2 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #example2 tr:hover {
            background-color: #ddd;
        }

        #example2 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0292eb;
            color: white;
        }
    </style>
</head>

<body>

    <script>
        window.print();
    </script>

    <center>
        <h1>LAPORAN REKAP PENGAJUAN RAB</h1>
        <h3>PROGRAM STUDI S1 INFORMATIKA</h3>
        <h3>FAKULTAS TEKNIK</h3>
        <h3>UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h3>
    </center>

    <br>
    <b>LABORATORIUM</b>
    <table id="example2">
        <tr>
            <th>No</th>
            <th>Tanggal Pengajuan</th>
            <th>Uraian</th>
            <th>Harga Satuan</th>
            <th>Volume</th>
            <th>Satuan</th>
            <th>Total Biaya</th>
            <th>Keterangan</th>
        </tr>
        @foreach($laboratorium as $e=>$l)
        <tr>
            <td>{{$l->id}}</td>
            <td>{{$l->tanggal_pengajuan}}</td>
            <td>{{$l->uraian}}</td>
            <td>Rp {{$l->harga_satuan}}</td>
            <td>{{$l->volume}}</td>
            <td>{{$l->satuan}}</td>
            <td>Rp {{$l->total_biaya}}</td>
            <td>{{$l->keterangan}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <br>
    <br>
    <b>TUGAS AKHIR</b>
    <table id="example2">
        <tr>
            <th>No</th>
            <th>Tanggal Pengajuan</th>
            <th>Uraian</th>
            <th>Harga Satuan</th>
            <th>Volume</th>
            <th>Satuan</th>
            <th>Total Biaya</th>
            <th>Keterangan</th>
        </tr>
        @foreach($tugasakhir as $e=>$t)
        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->tanggal_pengajuan}}</td>
            <td>{{$t->uraian}}</td>
            <td>Rp. {{$t->harga_satuan}}</td>
            <td>{{$t->volume}}</td>
            <td>{{$t->satuan}}</td>
            <td>Rp. {{$t->total_biaya}}</td>
            <td>{{$t->keterangan}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <br>
    <br>
    <b>PRAKTIK KERJA LAPANGAN</b>
    <table id="example2">
        <tr>
            <th>No</th>
            <th>Tanggal Pengajuan</th>
            <th>Uraian</th>
            <th>Harga Satuan</th>
            <th>Volume</th>
            <th>Satuan</th>
            <th>Total Biaya</th>
            <th>Keterangan</th>
        </tr>
        @foreach($pkl as $e=>$p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->tanggal_pengajuan}}</td>
            <td>{{$p->uraian}}</td>
            <td>Rp. {{$p->harga_satuan}}</td>
            <td>{{$p->volume}}</td>
            <td>{{$p->satuan}}</td>
            <td>Rp. {{$p->total_biaya}}</td>
            <td>{{$p->keterangan}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <br>
    <br>
    <b>ASOSIASI</b>
    <table id="example2">
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
        </tr>
        @foreach($asosiasi as $e=>$a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->tanggal_pengajuan}}</td>
            <td>{{$a->uraian}}</td>
            <td>Rp. {{$a->harga_satuan}}</td>
            <td>{{$a->volume}}</td>
            <td>{{$a->satuan}}</td>
            <td>{{$a->keterangan}}</td>
            <td>{{$a->kegiatan}}</td>
            <td>Rp. {{$a->total_biaya}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <br>
    <br>
    <b>KULIAH PAKAR</b>
    <table id="example2">
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
        </tr>
        @foreach($kuliahpakar as $e=>$k)
        <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->tanggal_pengajuan}}</td>
            <td>{{$k->nama_kegiatan}}</td>
            <td>{{$k->uraian}}</td>
            <td>Rp. {{$k->harga_satuan}}</td>
            <td>{{$k->volume}}</td>
            <td>{{$k->satuan}}</td>
            <td>Rp. {{$k->total_biaya}}</td>
            <td>{{$k->keterangan}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <br>
    <br>
    <b>REAKREDITASI</b>
    <table id="example2">
        <tr>
            <th>No</th>
            <th>Tanggal Pengajuan</th>
            <th>Uraian</th>
            <th>Keterangan</th>
            <th>Volume</th>
            <th>Satuan</th>
            <th>Harga Satuan</th>
            <th>Total Biaya</th>
        </tr>
        @foreach($reakreditasi as $e=>$r)
        <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->tanggal_pengajuan}}</td>
            <td>{{$r->uraian}}</td>
            <td>{{$r->keterangan}}</td>
            <td>{{$r->volume}}</td>
            <td>{{$r->satuan}}</td>
            <td>Rp. {{$r->harga_satuan}}</td>
            <td>Rp. {{$r->total_biaya}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>



    <script src="{{asset ('/template/adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->

    <!-- DataTables  & Plugins -->
    <script src="{{asset ('/template/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('/template/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

    <script>
    </script>
</body>

</html>