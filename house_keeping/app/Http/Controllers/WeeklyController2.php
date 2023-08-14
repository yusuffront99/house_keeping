<?php

namespace App\Http\Controllers;

use App\Models\Weekly2;
use Illuminate\Http\Request;

class WeeklyController2 extends Controller
{
    public function index()
    {
        $data = Weekly2::get();
        return view('pages.weekly2.index', compact('data'));
    }

    public function store(Request $request)
    {
       
        
        $equipment = new Weekly2();

        $equipment->agenda = $request->agenda;
        $equipment->tgl_turbine = $request->tgl_turbine;
        $equipment->tgl_boiler = $request->tgl_boiler;
        $equipment->peralatan_boiler = $request->peralatan_boiler;
        $equipment->peralatan_turbine = $request->peralatan_turbine;
        $equipment->posisi_turbine = $request->posisi_turbine;
        $equipment->posisi_boiler = $request->posisi_boiler;
        // $equipment->foto_1 = $fileName1;

        

        if($request->hasFile('foto_1'))
        {
            $fileName1 = $request->file('foto_1')->store('pictures','public');
            $equipment->foto_1 =  $fileName1;
        }
        if($request->hasFile('foto_2'))
        {
            $fileName2 = $request->file('foto_2')->store('pictures','public');
            $equipment->foto_2 =  $fileName2;
        }

        if($request->hasFile('foto_3'))
        {
            $fileName3 = $request->file('foto_3')->store('pictures','public');
            $equipment->foto_3 =  $fileName3;
        }

        if($request->hasFile('foto_4'))
        {
            $fileName4 = $request->file('foto_4')->store('pictures','public');
            $equipment->foto_4 =  $fileName4;
        }
        if($request->hasFile('foto_5'))
        {
            $fileName5 = $request->file('foto_5')->store('pictures','public');
            $equipment->foto_5 =  $fileName5;
        }
        if($request->hasFile('foto_6'))
        {
            $fileName6 = $request->file('foto_6')->store('pictures','public');
            $equipment->foto_6 =  $fileName6;
        }


        $equipment->save();

        return redirect()->route('weekly2.index');
    }
    
}
