@extends('layouts.main')

@section('content')

    <div class="my-2">
        <div class="my-5">
            <div class="text-center fw-bold fs-5">HOUSE KEEPING</div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-3">
            <div class="card border border-primary">
                <div class="card-body">
                    <span><i class="bi bi-clipboard2-pulse m1"></i></span>
                    <div class="fw-bold text-primary">
                        Laporan Minggu ke-1
                    </div>
                    <hr>
                    <a href="{{route('weekly1.index')}}" class="btn btn-sm btn-primary">Create <i class="bi bi-plus-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border border-warning">
                <div class="card-body">
                    <span><i class="bi bi-clipboard2-pulse m2"></i></span>
                    <div class="fw-bold text-warning">
                        Laporan Minggu ke-2
                    </div>
                    <hr>
                    <a href="{{route('weekly2.index')}}" class="btn btn-sm btn-warning">Create <i class="bi bi-plus-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border border-danger">
                <div class="card-body">
                    <span><i class="bi bi-clipboard2-pulse m3"></i></span>
                    <div class="fw-bold text-danger">
                        Laporan Minggu ke-3
                    </div>
                    <hr>
                    <a href="{{route('weekly3.index')}}" class="btn btn-sm btn-danger">Create <i class="bi bi-plus-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border border-success">
                <div class="card-body">
                    <span><i class="bi bi-clipboard2-pulse m4"></i></span>
                    <div class="fw-bold text-success">
                        Laporan Minggu ke-4
                    </div>
                    <hr>
                    <a href="{{route('weekly4.index')}}" class="btn btn-sm btn-success">Create <i class="bi bi-plus-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr>
     <div class="my-5">
        <br>
        @if ($btn_check->count() < 5)
        <div class="bagde bg-warning p-3 text-white text-center fw-bold mb-3">Silakan Lengkapi Laporan Mingguan 1-4 <i class="bi bi-emoji-laughing-fill"></i></div>
        <div class="d-flex justify-content-evenly" style="margin: 0rem 35rem;">
            <div class="d-flex justify-content-center" style="opacity: 50%;">
                <div class="px-3 rounded-pill py-2 border border-success bg-success fw-bold">
                    <a href="" class="text-white" onclick="this.disabled=true;document.getElementById('down7913').disabled=false;"><i class="bi bi-cloud-plus fs-2 text-center"></i></a>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-space" style="opacity: 50%;">
                <div class="px-3 rounded-pill py-2 border border-primary bg-primary fw-bold">
                    <a href="" class="text-white" onclick="this.disabled=true;document.getElementById('down7913').disabled=false;"><i class="bi bi-printer fs-2"></i></a>
                </div>
            </div>
        </div>
        @elseif($btn_check->count() >= 5)
      
        <div class="d-flex justify-content-evenly" style="margin: 0rem 35rem;">
            <div class="d-flex justify-content-center">
                <div class="px-3 rounded-pill py-2 border border-success bg-success fw-bold">
                    <a href="{{route('house_keeping.index')}}" class="text-white"><i class="bi bi-cloud-plus fs-2 text-center"></i></a>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-space">
                <div class="px-3 rounded-pill py-2 border border-primary bg-primary fw-bold">
                    <a href="{{route('print')}}" target="_blank"  class="text-white" style="text-decoration: none;"><i class="bi bi-printer fs-2"></i></a>
                </div>
            </div>
        </div>
        @else
        <div class="d-flex justify-content-evenly" style="margin: 0rem 35rem;">
            <div class="d-flex justify-content-center">
                <div class="px-3 rounded-pill py-2 border border-success bg-success fw-bold">
                    <a href="{{route('house_keeping.index')}}" class="text-white"><i class="bi bi-cloud-plus fs-2 text-center"></i></a>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-space">
                <div class="px-3 rounded-pill py-2 border border-primary bg-primary fw-bold">
                    <a href="{{route('print')}}" target="_blank"  class="text-white" style="text-decoration: none;"><i class="bi bi-printer fs-2"></i></a>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
