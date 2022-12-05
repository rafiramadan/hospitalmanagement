@extends('layout')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
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

        <div class="pasien">
            <div class="card-body">
                <h5 class="card-title">Pasien</h5>
                <a href="{{('datapasien')}}" class="link-pasien">Data Pasien IGD</a>
                <img src="{{ asset('style/images/stethoscope.png') }}" class="bed">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="rawat-inap">
                    <div class="card-body">
                        <h5 class="card-title">Rawat Inap</h5>
                        <a href="{{('rawatinap')}}" class="link-rawat">Data Rawat Inap</a>
                        <img src="{{ asset('style/images/hospital-bed.png') }}" class="scope">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="triase">
                    <div class="card-body">
                        <h5 class="card-title">Triase</h5>
                        <a href="{{('datatriase')}}" class="link-triase">Data Triase</a>
                        <img src={{ asset('style/images/igd.png') }} class="igd-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">New Customer</div>
                        <div class="stat-digit">6</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pop-up P-Rawat Inap -->
    <!-- <div id="popup-r" class="overlay">
        <div class="popup">
            <h2>Pendaftaran Rawat Inap</h2>
            <a class="close" href="#">&times;</a> -->

    <!-- Contoh 1 menggunakan form dan button -->
    <!-- <form method="post" action="#">
                <button type="submit" class="btn mr-2">Umum</button>
            </form> -->
    <!-- end contoh 1 -->
    <!-- Contoh 1 menggunakan form dan button -->
    <!-- <form method="post" action="https://kodekreasi.com">
                <button type="submit" class="btn mr-3">BPJS</button>
            </form> -->
    <!-- end contoh 1 -->
    <!-- Contoh 1 menggunakan form dan button -->
    <!-- <form method="post" action="https://kodekreasi.com">
                <button type="submit" class="btn mr-4">Non BPJS</button>
            </form> -->
    <!-- end contoh 1 -->
    <!-- </div>
    </div> -->
    <!-- Pop-up P-Rawat Inap End-->

    <!-- Pop-up P-Poliklinik-->
    <!-- <div id="popup-p" class="overlay1">
        <div class="popup1">
            <h2>Pendaftaran Pasien Poliklinik</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">

            </div>
            <input class="btn" type="submit" value="Submit">
        </div>
    </div> -->
    <!-- Pop-up P-Poliklinik End -->

    <!-- Pop-up P-IGD-->
    <!-- <div id="popup-i" class="overlay2">
        <div class="popup2">
            <h2>Pendaftaran Pasien IGD</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">

            </div>
            <input class="btn" type="submit" value="Submit">
        </div>
    </div> -->
    <!-- Pop-up P-IGD End -->
</div>
@endsection