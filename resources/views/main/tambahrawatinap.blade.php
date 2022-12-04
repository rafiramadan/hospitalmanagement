@extends('layout')

@section('title', 'Rawat Inap')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Rawat Inap</h1>
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
                            Tambah Data Rawat Inap
                        </h2>
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('rawatinap')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                        <form action="{{ url('rawatinap')}} " method="post">
                            @csrf
                            <div class="form-group">
<<<<<<< HEAD
                                <label>Data Pasien</label>
                                <select name="datapasien_id" class="form-control">
                                    <option value="">Pilih Pasien</option>
                                    @foreach ($rawatinap as $item)
                                        <option value="{{ $item->id }}">{{ $item->pasien->nama }}</option>
=======
                                <label>Pasien</label>
                                <select name="datapasien_id" class="form-control">          
                                    <option value="">Pilih</option>
                                    @foreach ($datapasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
>>>>>>> a1372e1ba1e8f046af507d577dd0c57d9539eb5c
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="poliigd" class="form-control" placeholder="Poli IGD">
                                    <input type="text" name="ruang" class="form-control" placeholder="Ruang">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Diagnosa</label>
                                <textarea class="form-control" placeholder="Tuliskan Diagnosa Pasien" id="floatingTextarea" name="diagnosa"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Discharge Planning</label>
                                <input type="text" name="dischargeplanning" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Dokter</label>
<<<<<<< HEAD
                                <select name="datadokter_id" class="form-control">
                                    <option value="">Pilih Dokter</option>
                                    @foreach ($rawatinap as $item)
                                        <option value="{{ $item->id }}">{{ $item->dokter->nama }}</option>
=======
                                <select name="datadokter_id" class="form-control">          
                                    <option value="">Pilih</option>
                                    @foreach ($datadokter as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
>>>>>>> a1372e1ba1e8f046af507d577dd0c57d9539eb5c
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="text" name="tglmasuk" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
