
@extends('layouts.main')

@section('content')
    <div class="m-auto p-4">
        <div class="text-center fw-bold d-grid gap-2 bg-danger py-5 text-white fs-2">Weekly III</div>
        <a href="{{route('home')}}"><i class="bi bi-arrow-left-circle-fill fs-3"></i></a>
        <div class="row">
            <div class="col-lg-12 border border-dark p-3">
                <div class="card">
                    <form action="{{route('weekly3.store')}}" method="post" enctype="multipart/form-data">
                        @csrf    
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
                                                    <input type="date" name="tgl_boiler" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-1">
                                                    <label for="">Peralatan Boiler</label>
                                                    <select name="peralatan_boiler" id="" class="form-select">
                                                        <option value="-">-- Peralatan Boiler --</option>
                                                        <option value="Pulverizer 3A">Pulverizer 3A</option>
                                                        <option value="Pulverizer 3B">Pulverizer 3B</option>
                                                        <option value="Pulverizer 3C">Pulverizer 3C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-1">
                                                    <label for="">Posisi Peralatan</label>
                                                    <select name="posisi_boiler" id="" class="form-select">
                                                        <option value="-">-- Posisi Peralatan --</option>
                                                        <option value="Lantai 1 (Boiler)">Lantai 1 (Boiler)</option>
                                                        <option value="Lantai 2 (Boiler)">Lantai 2 (Boiler)</option>
                                                        <option value="Lantai 3 (Boiler)">Lantai 3 (Boiler)</option>
                                                        <option value="Lantai 1 (Turbine)">Lantai 1 (Turbine)</option>
                                                        <option value="Lantai 2 (Turbine)">Lantai 2 (Turbine)</option>
                                                        <option value="Lantai 3 (Turbine)">Lantai 3 (Turbine)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group text-primary">
                                                        <label for="">Foto Sebelum</label>
                                                        <input type="file"  name="foto_1" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group text-danger">
                                                        <label for="">Foto Proses</label>
                                                        <input type="file"  name="foto_2" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group text-success">
                                                        <label for="">Foto Sesudah</label>
                                                        <input type="file"  name="foto_3" id="" class="form-control">
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
                                                        <input type="date" name="tgl_turbine" id="" class="form-control">
                                                    </div>
                                                </div>
                            
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-1">
                                                        <label for="">Peralatan Turbine</label>
                                                        <select name="peralatan_turbine" id="" class="form-select">
                                                            <option value="-">-- Peralatan Turbine --</option>
                                                            <option value="Close Loop 3A">Close Loop 3A</option>
                                                            <option value="Close Loop 3B">Close Loop 3B</option>
                                                            <option value="Close Loop 3C">Close Loop 3C</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-1">
                                                        <label for="">Posisi Peralatan</label>
                                                        <select name="posisi_turbine" id="" class="form-select">
                                                            <option value="-">-- Posisi Peralatan --</option>
                                                            <option value="Lantai 1 (Boiler)">Lantai 1 (Boiler)</option>
                                                            <option value="Lantai 2 (Boiler)">Lantai 2 (Boiler)</option>
                                                            <option value="Lantai 3 (Boiler)">Lantai 3 (Boiler)</option>
                                                            <option value="Lantai 1 (Turbine)">Lantai 1 (Turbine)</option>
                                                            <option value="Lantai 2 (Turbine)">Lantai 2 (Turbine)</option>
                                                            <option value="Lantai 3 (Turbine)">Lantai 3 (Turbine)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </div>
                                    
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group text-primary">
                                                            <label for="">Foto Sebelum</label>
                                                            <input type="file"  name="foto_4" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group text-danger">
                                                            <label for="">Foto Proses</label>
                                                            <input type="file"  name="foto_5" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group text-success">
                                                            <label for="">Foto Sesudah</label>
                                                            <input type="file"  name="foto_6" id="" class="form-control">
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
            <div class="col-lg-12 border border-dark p-3">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Agenda</th>
                            <th>Peralatan Boiler</th>
                            <th>Tgl Pelaksanaan</th>
                            <th>Evidence Boiler</th>

                            <th>Peralatan Turbine</th>
                            <th>Tgl Pelaksanaan</th>
                            <th>Evidence Turbine</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $dt)
                        <tr>
                            <td>{{$no++}}</td>
                            <td><div class="badge bg-danger p-3">{{$dt->agenda}}</div></td>
                            <td>{{$dt->peralatan_boiler}}</td>
                            <td>{{$dt->tgl_boiler}}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('storage/'. $dt->foto_1)}}" alt="" width="100px" height="100px">
                                    <img src="{{asset('storage/'. $dt->foto_2)}}" alt="" width="100px" height="100px">
                                    <img src="{{asset('storage/'. $dt->foto_3)}}" alt="" width="100px" height="100px">
                                </div>
                            </td>

                            <td>{{$dt->peralatan_turbine}}</td>
                            <td>{{$dt->tgl_turbine}}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('storage/'. $dt->foto_4)}}" alt="" width="100px" height="100px">
                                    <img src="{{asset('storage/'. $dt->foto_5)}}" alt="" width="100px" height="100px">
                                    <img src="{{asset('storage/'. $dt->foto_6)}}" alt="" width="100px" height="100px">
                                </div>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('add-script')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#example').DataTable({
            scrollY: true,
            scrollX: true,
        });
    });
</script>
@endpush