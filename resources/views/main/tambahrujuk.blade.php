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
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('rujuk')}} " method="post">
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
                                <input type="text" name="diagnosa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>RS Tujuan</label>
                                <input type="text" name="rstujuan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Poli Rujukan</label>
                                <input type="text" name="polirujukan" class="form-control">
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