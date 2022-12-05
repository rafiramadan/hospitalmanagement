<!-- @extends('layout')

@section('title', 'Pasien')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Detail Pasien</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li> <a href="#">Pasien</a></li>
                    <li> <a href="#">Data</a></li>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
 
    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <strong>
                    Detail Pasien
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datapasien')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            @foreach ($datapasien as $item)
                            <tr>
                                <th style="width:30%">No Pasien</th>
                                <td>{{ $item->nopasien }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $item->nama }} }} </td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>{{ $item->nik }} </td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $item->tempatlahir }} </td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $item->tgllahir }} </td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>{{ $item->umur }} </td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>{{ $item->kategori }} </td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $item->jeniskelamin }} </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $item->alamat }} </td>
                            </tr>
                            <tr>
                                <th>No Telp</th>
                                <td>{{ $item->notelp }} </td>
                            </tr>
                            <tr>
                                <th>Golongan Darah</th>
                                <td>{{ $item->goldar }} </td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>{{ $item->pekerjaan }} </td>
                            </tr>
                            <tr>
                                <th>Jenis Bayar</th>
                                <td>{{ $item->jenisbayar }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection -->