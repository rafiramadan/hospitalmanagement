@extends('layout')

@section('title', 'Data Perawat')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Perawat</h1>
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
                    Data Perawat
                </strong>
                <div class="pull-right">
                    <a href="{{ url('dataperawat/tambahperawat')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No Perawat</th>
                            <th>Nama</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataperawat as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->noperawat }} </td>
                                <td>{{ $item->nama }} </td>
                                <td class="text-center">
                                     <a href="{{ url('dataperawat/editperawat/' .$item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i></a> 
                                     <form action="{{ url('dataperawat/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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