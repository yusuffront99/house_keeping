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
        //
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
        $request->validate([
            'tgl_pelaksanaan' => 'required',
            'nama_peralatan' => 'required',
            'posisi_peralatan' => 'required',
            'bagian_operator' => 'required',
            'foto_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName1 = time() . '.' . $request->foto_1->extension();
        $request->foto_1->storeAs('public/images', $fileName1);

        $fileName2= time() . '.' . $request->foto_2->extension();
        $request->foto_2->storeAs('public/images', $fileName2);

        $fileName3 = time() . '.' . $request->foto_3->extension();
        $request->foto_3->storeAs('public/images', $fileName3);

        $equipment = new HouseKeeping();

        $equipment->tgl_pelaksanaan = $request->tgl_pelaksanaan;
        $equipment->nama_peralatan = $request->nama_peralatan;
        $equipment->posisi_peralatan = $request->posisi_peralatan;
        $equipment->bagian_operator = $request->bagian_operator;
        $equipment->foto_1 =  $fileName1;
        $equipment->foto_2 =  $fileName2;
        $equipment->foto_3 =  $fileName3;
        $equipment->save();

        return 'success';
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
