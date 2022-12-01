@extends('layout')

@section('title', 'Data Rawat Inap')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Rawat Inap</h1>
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
                    Data Rawat Inap
                </strong>
                <div class="pull-right">
                    <a href="{{ url('rawatinap/create')}} " class="btn btn-success btn-sm">
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
                            <th>Poli IGD</th>
                            <th>Ruang</th>
                            <th>Kelas</th>
                            <th>Diagnosa</th>
                            <th>Discharge Planning</th>
                            <th>Dokter</th>
                            <th>Tanggal Masuk</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rawatinap as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->pasien->nama }} </td>
                                <td>{{ $item->poliigd }} </td>
                                <td>{{ $item->ruang }} </td>
                                <td>{{ $item->kelas }} </td>
                                <td>{{ $item->diagnosa }} </td>
                                <td>{{ $item->dischargeplanning }} </td>
                                <td>{{ $item->dokter->nama }} </td>
                                <td>{{ $item->tglmasuk }} </td>
                                <td class="text-center">
                                     <a href="{{ url('dataobat/editobat/' .$item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i></a> 
                                     <form action="{{ url('dataobat/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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