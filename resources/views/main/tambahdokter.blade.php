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
                            Tambah Data Dokter
                        </h2>
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datadokter')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive" width=100%>
                        <form action="{{ url('datadokter')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="nid" class="form-control" required placeholder="NIDN">
                                    <input type="text" name="nama" class="form-control" required placeholder="Nama Dokter">
                                    <select name="spesialis" class="form-select" required style="background-color: rgb(230, 230, 230)">
                                        <option value="">Pilih Spesialis</option>
                                        <option value="Jantung">Jantung</option>
                                        <option value="Kandungan">Kandungan</option>
                                        <option value="Paru">Paru</option>
                                        <option value="Penyakit Dalam">Penyakit Dalam</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Saraf">Saraf</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="notelp" class="form-control" required placeholder="Nomor Telpon">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Alamat Lengkap" id="floatingTextarea" name="alamat"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
