@extends('layouts.main')

@section('content')
<div class="container">
    <div class="text-center fw-bold fs-4">Form Laporan House Keeping</div>
    <hr>
    <div class="p-2 bg-dark">
    <a href="{{route('home')}}"><i class="bi bi-arrow-left-circle-fill fs-3"></i></a>
       <div class="card bg-light px-2 py-2">
       <form action="{{route('house_keeping.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">Shift</label>
                        <select name="shift" id="" class="form-select">
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </div>
                    <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group mb-1">
                            <label for="" class="fw-bold text-primary">OP Turbine 1</label>
                            <input type="text" name="op_turbine1" id="" class="form-control mb-1">
                            <input type="file" name="ttd_opt1" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mb-1">
                            <label for="" class="fw-bold text-primary">OP Turbine 2</label>
                            <input type="text" name="op_turbine2" id="" class="form-control mb-1">
                            <input type="file" name="ttd_opt2" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">OP Boiler 1</label>
                        <input type="text" name="op_boiler1" id="" class="form-control mb-1">
                        <input type="file" name="ttd_opb1" id="" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">OP Boiler 2</label>
                        <input type="text" name="op_boiler2" id="" class="form-control mb-1">
                        <input type="file" name="ttd_opb2" id="" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">Team Leader</label>
                        <input type="text" name="team_leader" id="" class="form-control mb-1">
                        <input type="file" name="ttd_tl" id="" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">ManBagOp</label>
                        <input type="text" name="manbagop" id="" class="form-control mb-1" value="Iskandar Setiyawan">
                        <input type="file" name="ttd_manbag" id="" class="form-control">
                    </div>
                </div>
                </div>
            </div>
            <hr>
            <div class="row mb-1">
                <div class="col-lg-3">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">Bulan Laporan</label>
                        <select id="" name="bln_laporan" class="form-select">
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mb-1">
                        <label for="" class="fw-bold text-primary">Tgl.Pengesahan</label>
                        <input type="date" name="tgl_pengesahan" id="" class="form-control">
                    </div>
                </div>
            </div>

            @if ($lap_hk->count() > 0)
            <div class="form-group mb-1">
                <label for="" class="fw-bold text-primary">Summary</label>
                <input id="summary" value="{{$lap_hk[0]->summary}}" type="hidden" name="summary">
                <trix-editor input="summary"></trix-editor>
            </div>
            <div class="form-group mb-1">
                <label for="" class="fw-bold text-primary">Conslusion</label>
                <input id="conclusion" value="{{$lap_hk[0]->conclusion}}" type="hidden" name="conclusion">
                <trix-editor input="conclusion"></trix-editor>
            </div>
            @else
            <div class="form-group mb-1">
                <label for="" class="fw-bold text-primary">Summary</label>
                <input id="summary" value="enter type..." type="hidden" name="summary">
                <trix-editor input="summary"></trix-editor>
            </div>
            <div class="form-group mb-1">
                <label for="" class="fw-bold text-primary">Conslusion</label>
                <input id="conclusion" value="enter type..." type="hidden" name="conclusion">
                <trix-editor input="conclusion"></trix-editor>
            </div>
            @endif
            <div class="form-group mb-1">
                <label for="" class="fw-bold text-primary">Upload Grafik Bulanan</label>
                <input type="file" name="graphic" id="" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"> Save <i class="bi bi-filetype-pdf"></i></button>
            </div>
        </form>
       </div>
    </div>
</div>
@endsection