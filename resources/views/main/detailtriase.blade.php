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
                    <table>
                        <tbody>
                            @foreach ($datatriase as $item)
                            <tr>
                                <th>Pasien</th>
                                <td>{{ $item->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th>Cara Datang</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Jenis Kasus</th>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection