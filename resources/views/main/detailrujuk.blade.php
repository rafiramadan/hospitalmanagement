@extends('layout')

@section('title', 'Triase ')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Detail Data Rujuk RS lain</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li> <a href="#">Rujuk RS lain</a></li>
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
                    Detail Data Rujuk RS lain
                </strong>
                <div class="pull-right">
                    <a href="{{ url('rujuk')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            @foreach ($rujuk as $item)
                            <tr>
                                <th style="width:30%">Pasien</th>
                                <td>{{ $item->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th>Diagnosa</th>
                                <td>{{ $item->diagnosa }} </td>
                            </tr>
                            <tr>
                                <th>RS Tujuan</th>
                                <td>{{ $item->rstujuan }} </td>
                            </tr>
                            <tr>
                                <th>Poli Rujukan</th>
                                <td>{{ $item->polirujukan }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection