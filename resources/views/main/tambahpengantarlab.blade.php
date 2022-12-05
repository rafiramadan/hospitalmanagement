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

            <div class="card-header">
                <strong>
                    Tambah Data Pengantar Lab
                </strong>
                <div class="pull-right">
                    <a href="{{ url('pengantarlab')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive" width="100%">
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
                                <textarea class="form-control" placeholder="Tuliskan Diagnosa Pasien" id="floatingTextarea" name="diagnosaklinik"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Lab Hematologi</label>
                                    <input type="text" name="labhematologi" class="form-control" placeholder="Tulisakan Hasil Lab Hematologi">
                                    <label class="input-group-text">Lab Urine</label>
                                    <input type="text" name="laburine" class="form-control" placeholder="Tulisakan Hasil Lab Urine">
                                    <label class="input-group-text">Lab Faeces</label>
                                    <input type="text" name="labfaeces" class="form-control" placeholder="Tulisakan Hasil Lab Faeces">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Lab Glukosa Darah</label>
                                    <input type="text" name="labglukosadarah" class="form-control" placeholder="Tulisakan Hasil Lab Glukosa Darah">
                                    <label class="input-group-text">Lab Faal Hati</label>
                                    <input type="text" name="labfaalhati" class="form-control" placeholder="Tulisakan Hasil Lab Faal Hati">
                                    <label class="input-group-text">Lab Profil Lipid</label>
                                    <input type="text" name="labprofillipid" class="form-control" placeholder="Tulisakan Hasil Lab Profil Lipid">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Lab Tumor Maker</label>
                                    <input type="text" name="labtumormaker" class="form-control" placeholder="Tulisakan Hasil Lab Tumor Maker">
                                    <label class="input-group-text">Lab Elektrolit</label>
                                    <input type="text" name="labelektrolit" class="form-control" placeholder="Tulisakan Hasil Lab Elektrolit">
                                    <label class="input-group-text">Lab Mikrobiologi</label>
                                    <input type="text" name="labmikrobiologi" class="form-control" placeholder="Tulisakan Hasil Lab Mikrobiologi">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Lab Tiroid</label>
                                    <input type="text" name="labtiroid" class="form-control" placeholder="Tulisakan Hasil Lab Tiroid">
                                    <label class="input-group-text">Lab Munoserologi</label>
                                    <input type="text" name="labmunoserologi" class="form-control" placeholder="Tulisakan Hasil Lab Munoserologi">
                                    <label class="input-group-text">Lab Torch</label>
                                    <input type="text" name="labtorch" class="form-control" placeholder="Tulisakan Hasil Lab Torch">
                                    <label class="input-group-text">Lab Hepatitis</label>
                                    <input type="text" name="labhepatitis" class="form-control" placeholder="Tulisakan Hasil Lab Hepatitis">
                                </div>
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
                                <textarea class="form-control" placeholder=" Catatan (Optional)" id="floatingTextarea" name="catatan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>
            </div>
        </div>
    </div>

</div>
@endsection
