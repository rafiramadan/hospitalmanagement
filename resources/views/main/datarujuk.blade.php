@extends('layout')

@section('title', 'Data Rujuk RS lain')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Rawat Rujuk RS lain</h1>
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
<<<<<<< HEAD

=======
>>>>>>> a1372e1ba1e8f046af507d577dd0c57d9539eb5c
    <div class="animated fadeIn">
        <div class="row">


            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>
                            Data Rawat Rujuk RS lain
                        </strong>
                        <div class="pull-right">
                            <a href="{{ url('rujuk/create')}} " class="btn btn-success btn-sm">
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
                                        <a href="{{ url('dataobat/editobat/' .$item->id)}}"
                                            class="btn btn-primary btn-sm"> <i class="fa fa-pencil"></i></a>
                                        <form action="{{ url('dataobat/' .$item->id)}}" method="POST" class="d-inline"
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
<<<<<<< HEAD
            <div class="card-body table-responsive">
                <table class="table table-bordered">
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
                                     <a href="{{ url('rujuk/editrujuk/' .$item->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil" ></i></a>
                                     <form action="{{ url('rujuk/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
=======
        </div>
    </div>
    @endsection
>>>>>>> a1372e1ba1e8f046af507d577dd0c57d9539eb5c
