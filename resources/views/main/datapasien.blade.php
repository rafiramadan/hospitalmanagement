@extends('layout')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Pasien</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
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
                    Data Pasien
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datapasien/tambahpasien')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>NIK</th>
                            <th>Tipe Pendaftaran</th>
                            <th>Kategori Pasien</th>
                            <th>No BPJS</th>
                            <th>No Surat</th>
                            <th>Faskes Rujukan</th>
                            <th>Jenis Asuransi</th>
                            <th>No Asuransi</th>
                            <th>Poli Tujuan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapasien as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->nama }} </td>
                                <td>{{ $item->ttl }} </td>
                                <td>{{ $item->nik }} </td>
                                <td>{{ $item->tipependaftaran }} </td>
                                <td>{{ $item->kategoripasien }} </td>
                                <td>{{ $item->nobpjs }} </td>
                                <td>{{ $item->nosurat }} </td>
                                <td>{{ $item->faskesrujuk }} </td>
                                <td>{{ $item->jenisasuransi }} </td>
                                <td>{{ $item->noasuransi }} </td>
                                <td>{{ $item->politujuan }} </td>
                                <td class="text-center">
                                     <a href="{{ url('datapasien/editpasien/' .$item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i></a> 
                                     <form action="{{ url('datapasien/' .$item->id)}}" method="post" class="d-inline">
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