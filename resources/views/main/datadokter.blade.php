@extends('layout')

@section('title', 'Data Dokter')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Dokter</h1>
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
                    Data Dokter
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datadokter/tambahdokter')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NID</th>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datadokter as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->nid }} </td>
                                <td>{{ $item->nama }} </td>
                                <td>{{ $item->spesialis }} </td>
                                <td>{{ $item->notelp }} </td>
                                <td>{{ $item->alamat }} </td>
                                <td class="text-center">
                                     <a href="{{ url('datadokter/editdokter/' .$item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i></a> 
                                     <form action="{{ url('datadokter/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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