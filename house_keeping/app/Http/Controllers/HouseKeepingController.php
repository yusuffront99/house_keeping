<?php

namespace App\Http\Controllers;

use App\Models\HouseKeeping;
use Illuminate\Http\Request;

class HouseKeepingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lap_hk = HouseKeeping::take(1)->latest()->get();
        return view('pages.house_keeping.index', compact('lap_hk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = HouseKeeping::get();
        return view('pages.house_keeping.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'shift' => 'required',
        //     'op_turbine1' => 'required',
        //     'op_turbine2' => 'required',
        //     'op_boiler1' => 'required',
        //     'op_boiler2' => 'required',
        //     'team_leader' => 'required',
        //     'manbagop' => 'required',
        //     'bln_laporan' => 'required',
        //     'tgl_pengesahan' => 'required',
        //     'summary' => 'required',
        //     'conclusion' => 'required',
        //     'ttd_opt1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'ttd_opt2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'ttd_opb1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'ttd_opb2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'ttd_tl' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'ttd_manbag' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'graphic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $house_keeping = new HouseKeeping();

        $house_keeping->shift = $request->shift;
        $house_keeping->op_turbine1 = ucwords($request->op_turbine1);
        $house_keeping->op_turbine2 = ucwords($request->op_turbine2);
        $house_keeping->op_boiler1 = ucwords($request->op_boiler1);
        $house_keeping->op_boiler2 = ucwords($request->op_boiler2);
        $house_keeping->team_leader = ucwords($request->team_leader);
        $house_keeping->manbagop = ucwords($request->manbagop);
        $house_keeping->bln_laporan = strtoupper($request->bln_laporan);
        $house_keeping->tgl_pengesahan = $request->tgl_pengesahan;
        $house_keeping->summary = $request->summary;
        $house_keeping->conclusion = $request->conclusion;

        if($request->hasFile('ttd_opt1'))
        {
            $fileName1 = $request->file('ttd_opt1')->store('house_keeping','public');
            $house_keeping->ttd_opt1 =  $fileName1;
        }
        if($request->hasFile('ttd_opt2'))
        {
            $fileName2 = $request->file('ttd_opt2')->store('house_keeping','public');
            $house_keeping->ttd_opt2 =  $fileName2;
        }
        if($request->hasFile('ttd_opb1'))
        {
            $fileName3 = $request->file('ttd_opb1')->store('house_keeping','public');
            $house_keeping->ttd_opb1 =  $fileName3;
        }
        if($request->hasFile('ttd_opb2'))
        {
            $fileName4 = $request->file('ttd_opb2')->store('house_keeping','public');
            $house_keeping->ttd_opb2 =  $fileName4;
        }
        if($request->hasFile('ttd_tl'))
        {
            $fileName5 = $request->file('ttd_tl')->store('house_keeping','public');
            $house_keeping->ttd_tl =  $fileName5;
        }
        if($request->hasFile('ttd_manbag'))
        {
            $fileName6 = $request->file('ttd_manbag')->store('house_keeping','public');
            $house_keeping->ttd_manbag =  $fileName6;
        }
        if($request->hasFile('graphic'))
        {
            $fileName7 = $request->file('graphic')->store('house_keeping','public');
            $house_keeping->graphic =  $fileName7;
        }
   
        $house_keeping->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
