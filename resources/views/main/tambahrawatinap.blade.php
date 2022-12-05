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
            <div class="card-header">
                <strong>
                    Tambah Data Rawat Inap
                </strong>
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

                                <label>Pasien</label>
                                <select name="datapasien_id" class="form-control">
                                    <option value="">Pilih Pasien</option>
                                    @foreach ($datapasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" width+>Penempatan Ruang</label>
                                    <select name="poliigd" class="form-select" required style="background-color: rgb(230, 230, 230)">
                                        <option value="">Pilih Poli</option>
                                        <option value="Jantung">Jantung</option>
                                        <option value="Kandungan">Kandungan</option>
                                        <option value="Paru">Paru</option>
                                        <option value="Penyakit Dalam">Penyakit Dalam</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Saraf">Saraf</option>
                                    </select>
                                    <select class="form-select" name="ruang" style="background-color: rgb(230, 230, 230)">
                                        <option style="color:grey" disabled="disabled" selected="selected">Pilih Ruang</option>
                                        <option value="R. Resusitasi" > R. Resusitasi </option>
                                        <option value="Non Resusitasi">Non Resusitasi </option>
                                        <option value="Rawat Jalan"> Rawat Jalan </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kategori Pasien</label>
                                <div class="form-group">
                                    <div class="d-grid gap-3">
                                        <div class="p-2 bg-danger border border-danger">
                                            <label class="radio-inline">
                                                <input type="radio" name="kelas" value="Pasien Triase Merah">Kategori Pasien Triase Merah
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-3">
                                        <div class="p-2 bg-warning border border-warning">
                                            <label class="radio-inline">
                                                <input type="radio" name="kelas" value="Pasien Triase Kuning">Kategori Pasien Triase Kuning
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-3">
                                        <div class="p-2 bg-success border border-success">
                                            <label class="radio-inline">
                                                <input type="radio" name="kelas" value="Pasien Triase Hijau">Kategori Pasien Triase Hijau
                                            </label>
                                        </div>
                                    </div>
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
                                <select name="datadokter_id" class="form-control">
                                    <option value="">Pilih Dokter</option>
                                    @foreach ($datadokter as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="text" name="tglmasuk" class="form-control" placeholder="dd/mm/yy">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
