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
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('rawatinap')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <label>Pasien</label>
                                <select name="datapasien_id" class="form-control">          
                                    <option value="">Pilih</option>
                                    @foreach ($datapasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Poli IGD</label>
                                <input type="text" name="poliigd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ruang</label>
                                <input type="text" name="ruang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Diagnosa</label>
                                <input type="text" name="diagnosa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Discharge Planning</label>
                                <input type="text" name="dischargeplanning" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Dokter</label>
                                <select name="datadokter_id" class="form-control">          
                                    <option value="">Pilih</option>
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
    </div>

</div>
@endsection