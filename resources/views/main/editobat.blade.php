@extends('layout')

@section('title', 'Data Obat')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Obat</h1>
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
        <div class="card">
            <div class="pull-left">
                <div class=" offset-md-4">
                    <br>
                    <strong>
                        <h2>
                            Edit Data Obat
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
                        <form action="{{ url('dataobat/' .$dataobat->id)}} " method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Kode Obat</label>
                                <input type="text" name="kode" class="form-control" value="{{ $dataobat->kode }}" required>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Obat" value="{{ $dataobat->nama }}" required>
                                    <input type="text" name="stok" class="form-control" placeholder="Stok Obat" value="{{ $dataobat->stok }}" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
