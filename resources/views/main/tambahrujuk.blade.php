@extends('layout')

@section('title', 'Rujuk RS lain')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Rujuk RS lain</h1>
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
                    Tambah Data Rujuk RS lain
                </strong>
                <div class="pull-right">
                    <a href="{{ url('rujuk')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive" width="100%">
                        <form action="{{ url('rujuk')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <label>Data Pasien</label>
                                <select name="datapasien_id" class="form-control">
                                    <option value="">Pilih Pasien</option>
                                    @foreach ($datapasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Diagnosa</label>
                                <textarea class="form-control" placeholder="Tuliskan Keluhan Pasien" id="floatingTextarea" name="diagnosa"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="rstujuan" class="form-control" placeholder="Rumah Sakit Tujuan">
                                    <label class="input-group-text" width+>Penempatan Poli</label>
                                    <select name="polirujukan" class="form-select" required style="background-color: rgb(230, 230, 230)">
                                        <option value="">Pilih Poli Rujukan</option>
                                        <option value="Jantung">Jantung</option>
                                        <option value="Kandungan">Kandungan</option>
                                        <option value="Paru">Paru</option>
                                        <option value="Penyakit Dalam">Penyakit Dalam</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Saraf">Saraf</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
