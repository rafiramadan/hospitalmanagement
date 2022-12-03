@extends('layout')

@section('title', 'Pengantar Lab')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Pengantar Lab</h1>
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
                    Tambah Data Pengantar Lab
                </strong>
                <div class="pull-right">
                    <a href="{{ url('pengantarlab')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('pengantarlab')}} " method="post">
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
                                <label>Diagnosa</label>
                                <input type="text" name="diagnosaklinik" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Hematologi</label>
                                <input type="text" name="labhematologi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Urine</label>
                                <input type="text" name="laburine" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Faeces</label>
                                <input type="text" name="labfaeces" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Glukosa Darah</label>
                                <input type="text" name="labglukosadarah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Faal Hati</label>
                                <input type="text" name="labfaalhati" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Profil Lipid</label>
                                <input type="text" name="labprofillipid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Tumor Maker</label>
                                <input type="text" name="labtumormaker" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Elektrolit</label>
                                <input type="text" name="labelektrolit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Mikrobiologi</label>
                                <input type="text" name="labmikrobiologi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Tiroid</label>
                                <input type="text" name="labtiroid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Munoserologi</label>
                                <input type="text" name="labmunoserologi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Torch</label>
                                <input type="text" name="labtorch" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lab Hepatitis</label>
                                <input type="text" name="labhepatitis" class="form-control">
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
                                <label>Catatan</label>
                                <input type="text" name="catatan" class="form-control">
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