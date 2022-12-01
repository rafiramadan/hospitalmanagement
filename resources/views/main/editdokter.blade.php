@extends('layout')

@section('title', 'Dashboard')

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
        <div class="card">
            <div class="pull-left">
                <strong>
                    Edit Data Dokter
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datadokter')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datadokter/' .$datadokter->id)}} " method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>NID</label>
                                <input type="text" name="nid" class="form-control" value="{{ $datadokter->nid }}" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $datadokter->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label>Spesialis</label>
                                <select name="spesialis" class="form-select" value="{{ $datadokter->spesialis }}" required>
                                    <option value="">Pilih Spesialis</option>
                                    <option value="Jantung">Jantung</option>
                                    <option value="Kandungan">Kandungan</option>
                                    <option value="Paru">Paru</option>
                                    <option value="Penyakit Dalam">Penyakit Dalam</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Saraf">Saraf</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" name="notelp" class="form-control"value="{{ $datadokter->notelp }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $datadokter->notelp }}">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection