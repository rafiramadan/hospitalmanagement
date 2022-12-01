@extends('layout')

@section('title', 'Data Pasien')

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
                        <i class="fa fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No Pasien</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Kategori</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Golongan Darah</th>
                            <th>Pekerjaan</th>
                            <th>Jenis Bayar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapasien as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $item->nopasien }} </td>
                                <td>{{ $item->nama }} </td>
                                <td>{{ $item->nik }} </td>
                                <td>{{ $item->tempatlahir }} </td>
                                <td>{{ $item->tgllahir }} </td>
                                <td>{{ $item->umur }} </td>
                                <td>{{ $item->kategori }} </td>
                                <td>{{ $item->jeniskelamin }} </td>
                                <td>{{ $item->alamat }} </td>
                                <td>{{ $item->notelp }} </td>
                                <td>{{ $item->goldar }} </td>
                                <td>{{ $item->pekerjaan }} </td>
                                <td>{{ $item->jenisbayar }} </td>
                                <td class="text-center">
                                     <a href="{{ url('datapasien/editpasien/' .$item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i> Edit</a> 
                                     <form action="{{ url('datapasien/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</button>
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