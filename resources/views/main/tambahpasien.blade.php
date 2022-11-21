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
        @if (session('statis'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif

        <div class="card">
            <div class="pull-left">
                <strong>
                    Tambah Data Pasien
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
                        <form action="{{ url('datapasien')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tempat Tanggal Lahir</label>
                                <input type="text" name="ttl" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tipe Pendaftaran</label>
                                {{-- <input type="text" name="tipependaftaran" class="form-control" required> --}}
                                <select name="tipependaftaran" class="form-select" required>
                                    <option value="">Pilih Pendaftaran</option>
                                    <option value="umum">Umum</option>
                                    <option value="bpjs">BPJS</option>
                                    <option value="asuransi">Asuransi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Pasien</label>
                                <input type="text" name="kategoripasien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>No BPJS</label>
                                <input type="text" name="nobpjs" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>No Surat</label>
                                <input type="text" name="nosurat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Faskes Rujukan</label>
                                <input type="text" name="faskesrujuk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Asuransi</label>
                                <input type="text" name="jenisasuransi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>No Asuransi</label>
                                <input type="text" name="noasuransi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Poli Tujuan</label>
                                {{-- <input type="text" name="politujuan" class="form-control" required> --}}
                                <select name="politujuan" class="form-select" required>
                                    <option value="">Pilih Poli Tujuan</option>
                                    <option value="poligigi">Poli Gigi</option>
                                    <option value="poliumum">Poli Umum</option>
                                    <option value="polisaraf">Poli Saraf</option>
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