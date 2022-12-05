@extends('layout')

@section('title', 'Triase ')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Detail Data Rawat Inap</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li> <a href="#">Rawat Inap</a></li>
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
                    Detail Data Triase
                </strong>
                <div class="pull-right">
                    <a href="{{ url('rawatinap')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            @foreach ($rawatinap as $item)
                            <tr>
                                <th style="width:30%">Pasien</th>
                                <td>{{ $item->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th>Poli IGD</th>
                                <td>{{ $item->poliigd }} </td>
                            </tr>
                            <tr>
                                <th>Ruang</th>
                                <td>{{ $item->ruang }} </td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{ $item->kelas }} </td>
                            </tr>
                            <tr>
                                <th>Diagnosa</th>
                                <td>{{ $item->diagnosa }} </td>
                            </tr>
                            <tr>
                                <th>Discharge Planning</th>
                                <td>{{ $item->dischargeplanning }} </td>
                            </tr>
                            <tr>
                                <th>Dokter</th>
                                <td>{{ $item->dokter->nama }} </td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>{{ $item->tglmasuk }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection