@extends('layouts.main')

@section('content')
<div class="text-center fw-bold d-grid gap-2 bg-primary py-5 text-white fs-2">Weekly III <br> (Updating) </div>
<a href="{{route('weekly2.index')}}"><i class="bi bi-arrow-left-circle-fill fs-3"></i></a>

<div class="row">
    <div class="col-lg-12 border border-dark p-3">
        <div class="card">
            <form action="{{route('weekly3.update', $data_id->id)}}" method="post" enctype="multipart/form-data">
                @csrf    
                @method('put')
                <input type="hidden" name="agenda" value="Minggu 3">
                <div class="row">
                <div class="col-lg-6">
                    <div class="card-body bg-danger text-white">
                        <div class="row p-2">
                            <div class="card p-1">
                                <div class="alert alert-danger mb-4">BOILER</div>
                                
                                <div class="text-danger fw-bold px-2">
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-1">
                                            <label for="">Tanggal Pelaksanaan</label>
                                            <input type="date" name="tgl_boiler" id="" value="{{$data_id->tgl_boiler}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-1">
                                            <label for="">Peralatan Boiler</label>
                                            <select name="peralatan_boiler" id="" class="form-select">
                                                <option value="-">-- Peralatan Boiler --</option>
                                                @foreach ($items_b as $ib)
                                                <option value="{{$ib->name_equipment}}" {{$data_id->peralatan_boiler == $ib->name_equipment ? 'selected' : ''}}>{{$ib->name_equipment}}</option>    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-1">
                                            <label for="">Posisi Peralatan</label>
                                            <select name="posisi_boiler" id="" class="form-select">
                                                <option value="-">-- Posisi Peralatan --</option>
                                                <option value="1" {{$data_id->posisi_boiler == '1' ? 'selected' : ''}}>Lt.1 (Boiler)</option>
                                                <option value="2" {{$data_id->posisi_boiler == '2' ? 'selected' : ''}}>Lt.2 (Boiler)</option>
                                                <option value="3" {{$data_id->posisi_boiler == '3' ? 'selected' : ''}}>Lt.3 (Boiler)</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                        
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group text-primary">
                                                <label for="">Foto Sebelum</label>
                                                <input type="hidden" name="oldImage" value="{{$data_id->foto_1}}">
                                                <input type="file"  name="foto_1" id="" class="form-control" value="{{$data_id->foto_1}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group text-danger">
                                                <label for="">Foto Proses</label>
                                                <input type="hidden" name="oldImage" value="{{$data_id->foto_2}}">
                                                <input type="file"  name="foto_2" id="" class="form-control" value="{{$data_id->foto_2}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group text-success">
                                            <label for="">Foto Sesudah</label>
                                                <input type="hidden" name="oldImage" value="{{$data_id->foto_3}}">
                                                <input type="file"  name="foto_3" id="" class="form-control" value="{{$data_id->foto_3}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body bg-primary text-white">
                            <div class="row p-2">
                                <div class="card p-1">
                                    <div class="alert alert-primary mb-4">TURBINE</div>
                                    
                                    <div class="text-primary fw-bold px-2">
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-1">
                                                <label for="">Tanggal Pelaksanaan</label>
                                                <input type="date" name="tgl_turbine" id="" class="form-control" value="{{$data_id->tgl_turbine}}">
                                            </div>
                                        </div>
                    
                                        <div class="col-lg-12">
                                            <div class="form-group mb-1">
                                                <label for="">Peralatan Turbine</label>
                                                <select name="peralatan_turbine" id="" class="form-select">
                                                    <option value="-">-- Peralatan Turbine --</option>
                                                    @foreach ($items_t as $it)
                                                    <option value="{{$it->name_equipment}}" {{$data_id->peralatan_turbine == $it->name_equipment ? 'selected' : ''}}>{{$it->name_equipment}}</option>    
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-1">
                                                <label for="">Posisi Peralatan</label>
                                                <select name="posisi_turbine" id="" class="form-select">
                                                    <option value="-">-- Posisi Peralatan --</option>
                                                    <option value="1" {{$data_id->posisi_turbine == '1' ? 'selected' : ''}}>Lt.1 (Turbine)</option>
                                                    <option value="2" {{$data_id->posisi_turbine == '2' ? 'selected' : ''}}>Lt.2 (Turbine)</option>
                                                    <option value="3" {{$data_id->posisi_turbine == '3' ? 'selected' : ''}}>Lt.3 (Turbine)</option>
                                                    <option value="Cooling Tower Fan"  {{$data_id->posisi_turbine == 'Cooling Tower Fan' ? 'selected' : ''}}>Cooling Tower Fan (Turbine)</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                            
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group text-primary">
                                                <label for="">Foto Sebelum</label>
                                                    <input type="hidden" name="oldImage" value="{{$data_id->foto_4}}">
                                                    <input type="file"  name="foto_4" id="" class="form-control" value="{{$data_id->foto_4}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group text-danger">
                                                <label for="">Foto Proses</label>
                                                    <input type="hidden" name="oldImage" value="{{$data_id->foto_5}}">
                                                    <input type="file"  name="foto_5" id="" class="form-control" value="{{$data_id->foto_5}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group text-success">
                                                <label for="">Foto Sesudah</label>
                                                    <input type="hidden" name="oldImage" value="{{$data_id->foto_6}}">
                                                    <input type="file"  name="foto_6" id="" class="form-control" value="{{$data_id->foto_6}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mt-3 d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-sm">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection