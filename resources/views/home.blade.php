@extends('layout')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Hi Admin</h1>
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
        <div class="rawat-inap">
                <div class="card-body">
                    <h5 class="card-title">Rawat Inap</h5>
                    <a href="#" class="link-rawat">Data Pasien Rawat Inap</a>
                    <img src={{ asset('style/images/hospital-bed.png') }} class="bed">
                </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="poliklinik">
                    <div class="card-body">
                        <h5 class="card-title">Poliklinik</h5>
                        <a href="#" class="link-poliklinik">Pendaftaran Pasien Poliklinik</a>
                        <img src={{ asset('style/images/stethoscope.png') }} class="scope">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="igd">
                    <div class="card-body">
                        <h5 class="card-title">IGD</h5>
                        <a href="#" class="link-igd">Pendaftaran IGD</a>
                        <img src={{ asset('style/images/igd.png') }} class="igd-1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-server text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">Database</div>
                            <div class="stat-text">Total: 765</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection