@extends('layout')

@section('title', 'Data Triase')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Triase</h1>
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
                    Edit Data Triase
                </strong>
                <div class="pull-right">
                    <a href="{{ url('datatriase')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datatriase/')}} " method="post">
                            @method('patch')
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
                                <label>Cara Datang</label>
                                <input type="text" name="caradatang" class="form-control" value="{{ $datatriase }}" required>
                            </div>
                            <div class="form-group">
                                <label>jeniskasus</label>
                                <input type="text" name="jeniskasus" class="form-control" value="{{ $datatriase }}" required>
                            </div>
                            <div class="form-group">
                                <label>kategori</label>
                                <input type="text" name="kategori" class="form-control" value="{{ $datatriase }}" required>
                            </div>
                            <div class="form-group">
                                <label>kesadaran</label>
                                <input type="text" name="kesadaran" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Respon Time</label>
                                <input type="text" name="respontime" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ruang</label>
                                <input type="text" name="ruang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Urgensi</label>
                                <input type="text" name="urgensi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jenis Pelayanan</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alasan Datang</label>
                                <input type="text" name="alasandatang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cara Masuk</label>
                                <input type="text" name="caramasuk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keadaan Pra RS</label>
                                <input type="text" name="keadaanprars" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tindakan Pra RS</label>
                                <input type="text" name="tindakprars" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keluhan</label>
                                <input type="text" name="keluhan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Anamnesa</label>
                                <input type="text" name="anamnesa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Riwayat Penyakit</label>
                                <input type="text" name="riwayatpenyakit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status Psikolog</label>
                                <input type="text" name="statuspsikolog" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Riwayat Alergi</label>
                                <input type="text" name="riwayatalergi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pengkajian Airway</label>
                                <input type="text" name="pengkajianairway" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pengkajian Breathing</label>
                                <input type="text" name="pengkajianbreathing" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pengkajian Circulation</label>
                                <input type="text" name="pengkajiancirculation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Datang</label>
                                <input type="text" name="tgldatang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Perawat</label>
                                <select name="dataperawat_id" class="form-control">          
                                    <option value="">Pilih</option>
                                    @foreach ($dataperawat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
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