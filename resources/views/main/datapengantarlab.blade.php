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
        <div class="row">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
            @endif

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>
                            Data Pengantar Lab
                        </strong>
                        <div class="pull-right">
                            <a href="{{ url('pengantarlab/create')}} " class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Pasien</th>
                                    <th>Diagnosa</th>
                                    <th>Lab Hematologi</th>
                                    <th>Lab Urine</th>
                                    <th>Lab Faeces</th>
                                    <th>Lab Glukosa Darah</th>
                                    <th>Lab Faal Hati</th>
                                    <th>Lab Profil Lipid</th>
                                    <th>Lab Tumor Maker</th>
                                    <th>Lab Elektrolit</th>
                                    <th>Lab Mikrobiologi</th>
                                    <th>Lab Tiroid</th>
                                    <th>Lab Munoserologi</th>
                                    <th>Lab Torch</th>
                                    <th>Lab Hepatitis</th>
                                    <th>Dokter</th>
                                    <th>Catatan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengantarlab as $item)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $item->pasien->nama }} </td>
                                    <td>{{ $item->diagnosaklinik }} </td>
                                    <td>{{ $item->labhematologi }} </td>
                                    <td>{{ $item->laburine }} </td>
                                    <td>{{ $item->labfaeces }} </td>
                                    <td>{{ $item->labglukosadarah }} </td>
                                    <td>{{ $item->labfaalhati }} </td>
                                    <td>{{ $item->labprofillipid }} </td>
                                    <td>{{ $item->labtumormaker }} </td>
                                    <td>{{ $item->labelektrolit }} </td>
                                    <td>{{ $item->labmikrobiologi }} </td>
                                    <td>{{ $item->labtiroid }} </td>
                                    <td>{{ $item->labmunoserologi }} </td>
                                    <td>{{ $item->labtorch }} </td>
                                    <td>{{ $item->labhepatitis }} </td>
                                    <td>{{ $item->dokter->nama }} </td>
                                    <td>{{ $item->catatan }} </td>
                                    <td class="text-center">
                                        <a href="{{ url('pengantarlab/' .$item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i></a>
                                        <a href="{{ url('pengantarlab/edit/' .$item->id)}}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i></a>
                                        <form action="{{ url('pengantarlab/' .$item->id)}}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection