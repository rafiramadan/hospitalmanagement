@extends('layout')

@section('title', 'Data Triase')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Triase</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
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
                    Data Triase
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datatriase/create')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Pasien</th>
                            <th>Cara Datang</th>
                            <th>Jenis Kasus</th>
                            <th>Kategori</th>
                            <th>Kesadaran</th>
                            <th>Respon Time</th>
                            <th>Ruang</th>
                            <th>Urgensi</th>
                            <th>Jenis Pelayanan</th>
                            <th>Alasan Datang</th>
                            <th>Cara Masuk</th>
                            <th>Keadaan Pra RS</th>
                            <th>Tindakan Pra RS</th>
                            <th>Keluhan</th>
                            <th>Anamnesa</th>
                            <th>Riwayat Penyakit</th>
                            <th>Status Psikolog</th>
                            <th>Riwayat Alergi</th>
                            <th>Pengkajian Airway</th>
                            <th>Pengkajian Breathing</th>
                            <th>Pengkajian Circulation</th>
                            <th>Tanggal Datang</th>
                            <th>Perawat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datatriase as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->pasien->nama }} </td>
                                <td>{{ $item->caradatang }} </td>
                                <td>{{ $item->jeniskasus }} </td>
                                <td>{{ $item->kategori }} </td>
                                <td>{{ $item->kesadaran }} </td>
                                <td>{{ $item->respontime }} </td>
                                <td>{{ $item->ruang }} </td>
                                <td>{{ $item->urgensi }} </td>
                                <td>{{ $item->jenispelayanan }} </td>
                                <td>{{ $item->alasandatang }} </td>
                                <td>{{ $item->caramasuk }} </td>
                                <td>{{ $item->keadaanprars }} </td>
                                <td>{{ $item->tindakprars }} </td>
                                <td>{{ $item->keluhan }} </td>
                                <td>{{ $item->anamnesa }} </td>
                                <td>{{ $item->riwayatpenyakit }} </td>
                                <td>{{ $item->statuspsikolog }} </td>
                                <td>{{ $item->riwayatalergi }} </td>
                                <td>{{ $item->pengkajianairway }} </td>
                                <td>{{ $item->pengkajianbreathing }} </td>
                                <td>{{ $item->pengkajiancirculation }} </td>
                                <td>{{ $item->tgldatang }} </td>
                                <td>{{ $item->perawat->nama }} </td>
                                <td class="text-center">
                                     <a href="{{ url('datatriase/' .$item->id)}}" class="btn btn-warning btn-sm"> <i class="fa fa-eye" ></i></a> 
                                     <a href="{{ url('datatriase/' .$item->id.'/edit')}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i></a> 
                                     <form action="{{ url('datatriase/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                                     </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection