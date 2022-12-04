@extends('layout')

@section('title', 'Obat Pasien')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Obat Pasien</h1>
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
                    Tambah Data Obat Pasien
                </strong>
                <div class="pull-right">
                    <a href="{{ url('obatpasien')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive" width ="100%">
                <form action="{{ url('obatpasien')}} " method="post">
                    @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <select name="datapasien_id" class="form-control">
                                    <option value="">Pilih Data Pasien</option>
                                    @foreach ($obatpasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->pasien->nama }}</option>
                                    @endforeach
                                </select>
                                <select name="dataobat_id" class="form-control">
                                    <option value="">Pilih Data Obat Pasien</option>
                                    @foreach ($obatpasien as $item)
                                        <option value="{{ $item->id }}">{{ $item->obat->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label>Diagnosa Pasien</label>
                                <textarea class="form-control" placeholder="Tuliskan DiagnosaPasien" id="floatingTextarea" name="diagnosa"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </form>

            </div>
        </div>
    </div>

</div>
@endsection
