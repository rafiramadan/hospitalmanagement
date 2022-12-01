@extends('layout')

@section('title', 'Triase ')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Detail Data Triase</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li> <a href="#">Triase</a></li>
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
            <div class="pull-left">
                <strong>
                    Detail Triase
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datatriase')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            @foreach ($datatriase as $item)
                            <tr>
                                <th>Pasien</th>
                                <td>{{ $item->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th>Cara Datang</th>
                                <td>{{ $item->caradatang }} </td>
                            </tr>
                            <tr>
                                <th>Jenis Kasus</th>
                                <td>{{ $item->jeniskasus }} </td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>{{ $item->kategori }} </td>
                            </tr>
                            <tr>
                                <th>Kesadaran</th>
                                <td>{{ $item->kesadaran }} </td>
                            </tr>
                            <tr>
                                <th>Respon Time</th>
                                <td>{{ $item->respontime }} </td>
                            </tr>
                            <tr>
                                <th>Ruang</th>
                                <td>{{ $item->ruang }} </td>
                            </tr>
                            <tr>
                                <th>Urgensi</th>
                                <td>{{ $item->urgensi }} </td>
                            </tr>
                            <tr>
                                <th>Jenis Pelayanan</th>
                                <td>{{ $item->jenispelayanan }} </td>
                            </tr>
                            <tr>
                                <th>Alasan Datang</th>
                                <td>{{ $item->alasandatang }} </td>
                            </tr>
                            <tr>
                                <th>Cara Masuk</th>
                                <td>{{ $item->caramasuk }} </td>
                            </tr>
                            <tr>
                                <th>Keadaan Pra RS</th>
                                <td>{{ $item->keadaanprars }} </td>
                            </tr>
                            <tr>
                                <th>Tindakan Pra RS</th>
                                <td>{{ $item->tindakprars }} </td>
                            </tr>
                            <tr>
                                <th>Keluhan</th>
                                <td>{{ $item->keluhan }} </td>
                            </tr>
                            <tr>
                                <th>Anamnesa</th>
                                <td>{{ $item->anamnesa }} </td>
                            </tr>
                            <tr>
                                <th>Riwayat Penyakit</th>
                                <td>{{ $item->riwayatpenyakit }} </td>
                            </tr>
                            <tr>
                                <th>Status Psikolog</th>
                                <td>{{ $item->statuspsikolog }} </td>
                            </tr>
                            <tr>
                                <th>Riwayat Alergi</th>
                                <td>{{ $item->riwayatalergi }} </td>
                            </tr>
                            <tr>
                                <th>Pengkajian Airway</th>
                                <td>{{ $item->pengkajianairway }} </td>
                            </tr>
                            <tr>
                                <th>Pengkajian Breathing</th>
                                <td>{{ $item->pengkajianbreathing }} </td>
                            </tr>
                            <tr>
                                <th>Pengkajian Circulation</th>
                                <td>{{ $item->pengkajiancirculation }} </td>
                            </tr>
                            <tr>
                                <th>Tanggal Datang</th>
                                <td>{{ $item->tgldatang }} </td>
                            </tr>
                            <tr>
                                <th>Perawat</th>
                                <td>{{ $item->perawat->nama }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection