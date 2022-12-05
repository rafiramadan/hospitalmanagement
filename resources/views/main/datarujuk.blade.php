@extends('layout')

@section('title', 'Data Rujuk RS lain')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Rujuk RS lain</h1>
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
        <div class="row">


            @if (session('status'))
            <div class="alert alert-success"></div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>
                            Data Rujuk RS lain
                        </strong>
                        <div class="pull-right">
                            <a href="{{ url('rujuk/create')}} " class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Pasien</th>
                                    <th>Diagnosa</th>
                                    <th>RS Tujuan</th>
                                    <th>Poli Rujukan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rujuk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $item->pasien->nama }} </td>
                                    <td>{{ $item->diagnosa }} </td>
                                    <td>{{ $item->rstujuan }} </td>
                                    <td>{{ $item->polirujukan }} </td>
                                    <td class="text-center">
                                        <a href="{{ url('rujuk/' .$item->id)}}" class="btn btn-warning btn-sm"> <i
                                            class="fa fa-eye"></i></a>
                                        <a href="{{ url('rujuk/editobat/' .$item->id)}}"
                                            class="btn btn-primary btn-sm"> <i class="fa fa-pencil"></i></a>
                                        <form action="{{ url('rujuk/' .$item->id)}}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin hapus data?')">
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
    </div>
</div>
@endsection
