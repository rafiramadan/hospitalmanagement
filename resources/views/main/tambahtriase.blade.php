@extends('layout')

@section('title', 'Triase')

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

            <div class="card-header">
                <strong>
                    Tambah Data Triase
                </strong>

                <div class="pull-right">
                    <a href="{{ url('datatriase')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <form action="{{ url('datatriase')}} " method="post">
                     @csrf
                     <div class="form-group">
                        <div class="h3 card-header bg-info text-white bg-opacity-10 border border-light border-start-0 rounded-end">Emergency Pasien</div>
                            <div class="d-grid gap-3">
                                <div class="p-2 bg-light border border-success">
                                    <label class="radio-inline">
                                        <input type="radio" name="urgensi">TRUE EMERGENCY
                                    </label>
                                </div>
                            </div>
                                    <div class="d-grid gap-3">
                                        <div class="p-2 bg-light border border-danger">
                                            <div class="h5 text-danger border-bottom border-danger"> </div>
                                                <label class="radio-inline">
                                                    <input type="radio" name="urgensi">FALSE EMERGENCY
                                                    </label>
                                        </div>
                                    </div>
                    </div>
                            <div class="form-group">
                                <label>Pasien</label>
                                <select name="datapasien_id" class="form-control" style="background-color: rgb(230, 230, 230)">
                                    <option value="">Pilih Data Pasien</option>
                                    @foreach ($datapasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Data Pasien Saat Datang</label>
                                    <select class="form-select" name="caradatang" style="background-color: rgb(230, 230, 230)">
                                        <option style="color:grey" disabled="disabled" selected="selected">Cara Datang Pasien</option>
                                        <option value="Jalan">Jalan</option>
                                        <option value="Terlentang">Terlentang</option>
                                        <option value="Digendong">Digendong</option>
                                    </select>
                                    <label class="input-group-text">Jenis Kasus Pasien</label>
                                    <select class="form-select" name="jeniskasus" style="background-color: rgb(230, 230, 230)">
                                        <option style="color:grey" disabled="disabled" selected="selected">Jenis Kasus Pasien</option>
                                        <option value="Trauma">Trauma</option>
                                    <option value="Non Trauma">Non Trauma</option>
                                    </select>
                                    <label class="input-group-text">GCS Pasien</label>
                                        <select class="form-select" name="kesadaran" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Pasien Triase Merah</option>
                                            <option value="GCS < 7" style="background-color: rgb(255, 94, 94)"> GCS < 7 </option>
                                            <option value="GCS 8-14" style="background-color: Yellow">GCS 8-14 </option>
                                            <option value="GCS 15" style="background-color: rgb(30, 228, 30)"> GCS 15 </option>
                                        </select>
                                    <label class="input-group-text">Respon Time</label>
                                        <select class="form-select" name="respontime" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Respon Time</option>
                                            <option value="Immediate" style="background-color: rgb(255, 94, 94)"> Immediate </option>
                                            <option value="40 Menit" style="background-color: Yellow"> 40 Menit </option>
                                            <option value="60 Menit" style="background-color: rgb(30, 228, 30)"> 60 Menit </option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Penempatan Ruang</label>
                                    <select class="form-select" name="ruang" style="background-color: rgb(230, 230, 230)" width="100%">
                                        <option style="color:grey" disabled="disabled" selected="selected">Pilih Ruang</option>
                                        <option value="R. Resusitasi" style="background-color: rgb(255, 94, 94)"> R. Resusitasi </option>
                                        <option value="Non Resusitasi" style="background-color: Yellow">Non Resusitasi </option>
                                        <option value="Rawat Jalan" style="background-color: rgb(30, 228, 30)"> Rawat Jalan </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-grid gap-3">
                                    <div class="p-2 bg-danger border border-danger">
                                        <label class="radio-inline">
                                            <input type="radio" name="kategori">Kategori Pasien Triase Merah
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="p-2 bg-warning border border-warning">
                                        <label class="radio-inline">
                                            <input type="radio" name="kategori">Kategori Pasien Triase Kuning
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="p-2 bg-success border border-success">
                                        <label class="radio-inline">
                                            <input type="radio" name="kategori">Kategori Pasien Triase Hijau
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br><hr><br>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Pelayanan Pasien</label>
                                            <select class="form-select" name="jenispelayanan" style="background-color: rgb(230, 230, 230)">
                                                <option style="color:grey" disabled="disabled" selected="selected">Jenis Pelayanan</option>
                                                <option value="Bedah">Bedah</option>
                                                <option value="Non Bedah">Non Bedah</option>
                                                <option value="Kebidanan">Kebidanan</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Neonatus">Neonatus</option>
                                            </select>
                                            <select class="form-select" name="alasandatang" style="background-color: rgb(230, 230, 230)">
                                                <option style="color:grey" disabled="disabled" selected="selected">Alasan Pasien Datang</option>
                                                <option value="Penyakit">Penyakit</option>
                                                <option value="Trauma/ Ruda Paksa">Trauma/ Ruda Paksa</option>
                                            </select>
                                            <select class="form-select" name="caramasuk" style="background-color: rgb(230, 230, 230)">
                                                <option style="color:grey" disabled="disabled" selected="selected">Cara Masuk Pasien</option>
                                                <option value="Rujukan">Rujukan</option>
                                                <option value="RS">RS</option>
                                                <option value="">Lain-lain</option>
                                            </select>

                                </div>
                                <hr>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Keadaan Pra Rumah Sakit</label>
                                    <textarea class="form-control" placeholder="Tuliskan GCS, Pernafasan  Per Menit, BB/TB, Tensi Darah, Suhu Axiler Pasien" id="floatingTextarea" name="keadaanprars"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                <label class="input-group-text">Tindakan Pra Rumah Sakit</label>
                                        <select class="form-select" name="tindakprars" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Pilh Tindakan</option>
                                            <option value="CPR"> CPR </option>
                                            <option value="Suction"> Suction </option>
                                            <option value="O2"> O2 </option>
                                            <option value="Trakeostomi"> Trakeostomi </option>
                                            <option value="Beban Tekan"> Beban Tekan </option>
                                            <option value="Infus"> Infus </option>
                                            <option value="Bag Valve Mask"> Bag Valve Mask </option>
                                            <option value="NGT"> NGT </option>
                                        </select>

                                    </div>
                            </div>
                            <br><hr><br>
                                <div class="form-group">
                                    <div class="form-floating">
                                        <label>Keluhan Pasien</label>
                                        <textarea class="form-control" placeholder="Tuliskan Keluhan Pasien" id="floatingTextarea" name="keluhan"></textarea>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="form-floating">
                                            <label>Anamnesa Pasien</label>
                                            <textarea class="form-control" placeholder="Tuliskan Anamnesa Pasien" id="floatingTextarea" name="anamnesa"></textarea>
                                        </div>
                                    </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="riwayatpenyakit" class="form-control" placeholder="Riwayat Penyakit Pasien">
                                    <label class="input-group-text">Status Psikolog</label>
                                            <select class="form-select" name="statuspsikolog" style="background-color: rgb(230, 230, 230)">
                                                <option style="color:grey" disabled="disabled" selected="selected">Pilih Status</option>
                                                <option value="Kooperatif">Kooperatif</option>
                                                <option value="Cemas">Cemas</option>
                                                <option value="Ingin Mengakhiri hidup">Ingin Mengakhiri hidup</option>
                                            </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Riwayat Alergi Pasien</label>
                                            <select class="form-select" name="riwayatalergi" style="background-color: rgb(230, 230, 230)">
                                                <option style="color:grey" disabled="disabled" selected="selected">Apakah Ada Riwayat Alergi></option>
                                                <option value=" Ada Alergi "> Ada </option>
                                                <option value="Tidak Ada Alergi">TIdak Ada</option>
                                            </select>
                                </div>
                            </div>
                        <br><hr><br>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Pengkajian Keperawatan Airway</label>
                                        <select class="form-select" name="pengkajianairway" style="background-color: rgb(230, 230, 230)">
                                            <option style="color:grey" disabled="disabled" selected="selected">Jalan Nafas</option>
                                            <option value="Paten">Paten</option>
                                            <option value="Tidak Paten">Tidak Paten</option>
                                            <option value="Snoring">Snoring</option>
                                            <option value="Gargling">Gargling</option>
                                            <option value="Stridor">Stridor</option>
                                            <option value="Benda Asing">Benda Asing</option>
                                            <option value="Bersihan Jalan Nafas Tidak Efektif">Bersihan Jalan Nafas Tidak Efektif</option>
                                            <option value="Resiko Gagal Nafas">Resiko Gagal Nafas</option>
                                            <option value="Distress Pernafasan">Distress Pernafasan</option>
                                            <option value="Sumbatan Jalan Nafas">Sumbatan Jalan Nafas</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pengkajian Keperawatan Breathing</label>
                                    <textarea class="form-control" placeholder="Tuliskan terkait Pola nafas, Suara nafas, Penggunaan otot bantu nafas, Jenis nafas, Diagnosa Keperawatan, Frekuensi Nafas" id="floatingTextarea" name="pengkajianbreathing"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Pengkajian Circulation</label>
                                <input type="text" name="pengkajiancirculation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Datang</label>
                                <input type="text" name="tgldatang" class="form-control" placeholder="dd/mm/yy">
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
@endsection
