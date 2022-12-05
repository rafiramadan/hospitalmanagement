@extends('layout')

@section('title', 'Triase ')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Detail Data Pengantar Lab</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li> <a href="#">Pengantar Lab</a></li>
                    <li> <a href="#">Data</a></li>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
 
    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <strong>
                    Detail Data Pengantar Lab
                </strong>
                <div class="pull-right">
                    <a href="{{ url('pengantarlab')}} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            @foreach ($pengantarlab as $item)
                            <tr>
                                <th style="width:30%">Pasien</th>
                                <td>{{ $item->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th>Lab Hematologi</th>
                                <td>{{ $item->labhematologi }} </td>
                            </tr>
                            <tr>
                                <th>Lab Urine</th>
                                <td>{{ $item->laburine }} </td>
                            </tr>
                            <tr>
                                <th>Lab Faeces</th>
                                <td>{{ $item->labfaeces }} </td>
                            </tr>
                            <tr>
                                <th>Lab Glukosa Darah</th>
                                <td>{{ $item->labglukosadarah }} </td>
                            </tr>
                            <tr>
                                <th>Lab Faal Hati</th>
                                <td>{{ $item->labfaalhati }} </td>
                            </tr>
                            <tr>
                                <th>Lab Profil Lipid</th>
                                <td>{{ $item->labprofillipid }} </td>
                            </tr>
                            <tr>
                                <th>Lab Tumor Maker</th>
                                <td>{{ $item->labtumormaker }} </td>
                            </tr>
                            <tr>
                                <th>Lab Elektrolit</th>
                                <td>{{ $item->labelektrolit }} </td>
                            </tr>
                            <tr>
                                <th>Lab Tiroid</th>
                                <td>{{ $item->labtiroid }} </td>
                            </tr>
                            <tr>
                                <th>Lab Munoserologi</th>
                                <td>{{ $item->labmunoserologi }} </td>
                            </tr>
                            <tr>
                                <th>Lab Torch</th>
                                <td>{{ $item->labtorch }} </td>
                            </tr>
                            <tr>
                                <th>Dokter</th>
                                <td>{{ $item->dokter->nama }} </td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td>{{ $item->catatan }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection