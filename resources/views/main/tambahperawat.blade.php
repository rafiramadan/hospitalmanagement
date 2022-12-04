@extends('layout')

@section('title', 'Dashboard')

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
        <div class="card">
            <div class="pull-left">
                <div class=" offset-md-4">
                    <br>
                    <strong>
                        <h2>
                            Tambah Data Perawat
                        </h2>
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dataobat')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive" width="100%">
                        <form action="{{ url('dataperawat')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="noperawat" class="form-control" placeholder="NIRA" required>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Perawat" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
