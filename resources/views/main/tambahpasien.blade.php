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
                <div class=" offset-md-4">
                    <br>
                    <strong>
                        <h2>
                            Tambah Data Pasien
                        </h2>
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datapasien')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                        <form action="{{ url('datapasien')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nopasien" class="form-control" placeholder="Nomor Rekam Medis Pasien">
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Pasien">
                                    <input type="text" name="nik" class="form-control" placeholder="NIK">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir Pasien">
                                    <input type="text" name="tgllahir" class="form-control" placeholder="Tanggal Lahir (Tanggal-Bulan-Tahun)">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="umur" class="form-control" placeholder="Umur">
                                        <select class="form-select" name="kategori" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Kategori</option>
                                            <option value="Bayi">Bayi</option>
                                            <option value="Balita">Balita</option>
                                            <option value="Remaja">Remaja</option>
                                            <option value="Dewasa">Dewasa</option>
                                        </select>
                                        <select name="jeniskelamin" class="form-select" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <select name="goldar" class="form-select" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Pilih Golongan Darah</option>
                                            <option value="A">Golongan Darah : A</option>
                                            <option value="B">Golongan Darah : B</option>
                                            <option value="AB">Golongan Darah : AB</option>
                                            <option value="O">Golongan Darah : O</option>
                                        </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Pasien">
                                <input type="text" name="notelp" class="form-control" placeholder="Nomor Telpon Pasien">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan Pasien">
                            </div>
                            <div class="form-group">
                                <div class=" offset-md-4">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Jenis Pembayaran</label>
                                            <select name="jenisbayar" class="form-select" style="background-color: rgb(230, 230, 230)">
                                                <option style="color:grey" disabled="disabled" selected="selected">Pilih Jenis Bayar</option>
                                                <option value="BPJS">BPJS</option>
                                                <option value="Umum">Umum</option>
                                                <option value="Asuransi">Asuransi</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="width: 100%">Simpan Data</button>
                        </form>


            </div>
        </div>
    </div>

</div>
@endsection
