<?php

namespace App\Http\Controllers;

use App\Models\Weekly1;
use Illuminate\Http\Request;

class WeeklyController1 extends Controller
{
    public function index()
    {
        $data = Weekly1::get();
        return view('pages.weekly1.index', compact('data'));
    }

    public function store(Request $request)
    {
       

        // $fileName1 = 'boiler-before-' . date('d-m-Y-') . rand(1,1000) . $request->foto_1->extension();
        // $request->foto_1->storeAs('public/images', $fileName1);

        // $fileName2= 'boiler-process-' . date('d-m-Y-') . rand(1,1000) .  $request->foto_2->extension();
        // $request->foto_2->storeAs('public/images', $fileName2);

        // $fileName3 = 'boiler-after-' . date('d-m-Y-') . rand(1,1000) . $request->foto_3->extension();
        // $request->foto_3->storeAs('public/images', $fileName3);

        // $fileName4 = 'turbine-before-' . date('d-m-Y-') . rand(1,1000) . $request->foto_4->extension();
        // $request->foto_4->storeAs('public/images', $fileName4);

        // $fileName5= 'turbine-process-' . date('d-m-Y-') . rand(1,1000) .  $request->foto_5->extension();
        // $request->foto_5->storeAs('public/images', $fileName5);

        // $fileName6 = 'turbine-after-' . date('d-m-Y-') . rand(1,1000) . $request->foto_6->extension();
        // $request->foto_6->storeAs('public/images', $fileName6);

        
        $equipment = new Weekly1();

        $equipment->agenda = $request->agenda;
        $equipment->tgl_turbine = $request->tgl_turbine;
        $equipment->tgl_boiler = $request->tgl_boiler;
        $equipment->peralatan_boiler = $request->peralatan_boiler;
        $equipment->peralatan_turbine = $request->peralatan_turbine;
        $equipment->posisi_turbine = $request->posisi_turbine;
        $equipment->posisi_boiler = $request->posisi_boiler;
        if($request->hasFile('foto_1'))
        {
            $fileName1 = $request->file('foto_1')->store('images','public');
            $equipment->foto_1 =  $fileName1;
        }
        if($request->hasFile('foto_2'))
        {
            $fileName2 = $request->file('foto_2')->store('images','public');
            $equipment->foto_2 =  $fileName2;
        }

        if($request->hasFile('foto_3'))
        {
            $fileName3 = $request->file('foto_3')->store('images','public');
            $equipment->foto_3 =  $fileName3;
        }

        if($request->hasFile('foto_4'))
        {
            $fileName4 = $request->file('foto_4')->store('images','public');
            $equipment->foto_4 =  $fileName4;
        }
        if($request->hasFile('foto_5'))
        {
            $fileName5 = $request->file('foto_5')->store('images','public');
            $equipment->foto_5 =  $fileName5;
        }
        if($request->hasFile('foto_6'))
        {
            $fileName6 = $request->file('foto_6')->store('images','public');
            $equipment->foto_6 =  $fileName6;
        }


        $equipment->save();

        return redirect()->route('weekly1.index');
    }
    
}
