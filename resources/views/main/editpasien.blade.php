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
        <div class="card">
            <div class="pull-left">
                <strong>
                    Edit Data Pasien
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datapasien')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datapasien/' .$datapasien->id)}} " method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>No Pasien</label>
                                <input type="text" name="nopasien" class="form-control" value="{{ $datapasien->nopasien }}" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $datapasien->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" class="form-control" value="{{ $datapasien->nik }}" required>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempatlahir" class="form-control" value="{{ $datapasien->tempatlahir }}" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" name="tgllahir" class="form-control" value="{{ $datapasien->tgllahir }}" required>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="text" name="umur" class="form-control"value="{{ $datapasien->umur }}">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori" class="form-control" value="{{ $datapasien->kategori }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jeniskelamin" class="form-select" value="{{ $datapasien->jeniskelamin }}">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $datapasien->alamat }}">
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="text" name="notelp" class="form-control" value="{{ $datapasien->notelp }}">
                            </div>
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <input type="text" name="goldar" class="form-control" value="{{ $datapasien->goldar }}">
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" value="{{ $datapasien->pekerjaan }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Bayar</label>
                                <select name="jenisbayar" class="form-select" value="{{ $datapasien->jenisbayar }}">
                                    <option value="">Pilih Jenis Bayar</option>
                                    <option value="BPJS">BPJS</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Asuransi">Asuransi</option>
                                </select>
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