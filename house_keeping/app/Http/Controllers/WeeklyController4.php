<?php

namespace App\Http\Controllers;

use App\Models\EquipmentItem;
use App\Models\Weekly4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeeklyController4 extends Controller
{
    public function index()
    {
        $items_b = EquipmentItem::where('category','B')->get();
        $items_t = EquipmentItem::where('category','T')->get();
        $data = Weekly4::get();
        return view('pages.weekly4.index', compact('data','items_b','items_t'));
    }

    public function store(Request $request)
    {
       
        
        $equipment = new Weekly4();

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

        return redirect()->route('weekly4.index');
    }

      public function edit($id)
    {
        $items_b = EquipmentItem::where('category','B')->get();
        $items_t = EquipmentItem::where('category','T')->get();
        $data_id = Weekly4::where('id', $id)->first();

        return view('pages.weekly4.edit', compact('data_id','items_b','items_t'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        if($request->file('foto_1')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['foto_1'] = $request->file('foto_1')->store('pictures','public');
        }

        if($request->file('foto_2')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['foto_2'] = $request->file('foto_2')->store('pictures','public');
        }

        if($request->file('foto_3')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['foto_3'] = $request->file('foto_3')->store('pictures','public');
        }

        if($request->file('foto_4')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['foto_4'] = $request->file('foto_4')->store('pictures','public');
        }
        if($request->file('foto_5')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['foto_5'] = $request->file('foto_5')->store('pictures','public');
        }
        if($request->file('foto_6')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['foto_6'] = $request->file('foto_6')->store('pictures','public');
        }

        $item = Weekly4::findOrFail($id);
        $item->update($data);

        return redirect()->route('weekly4.index');
    }
    
}
