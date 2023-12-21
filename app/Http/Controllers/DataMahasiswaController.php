<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mk = DataMahasiswa::all();
        return view('mata_kuliah', ['mata_kuliah' => $mk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataMahasiswa::create(
            [
                'Kelas' => $request->Kelas,
                'Kode' => $request->Kode,
                'Nama_Mata_Kuliah' => $request->Nama_Mata_Kuliah,
                'SKS' => $request->SKS,
            ]
        );

        return redirect()->route('dataMahasiswa.index');
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
        $dataMahasiswa = DataMahasiswa::find($id);
        return view('edit', ['dataMahasiswa' => $dataMahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dataMahasiswa::where('id', $id)
            ->update(
                [
                    'Kelas' => $request->Kelas,
                    'Kode' => $request->Kode,
                    'Nama_Mata_Kuliah' => $request->Nama_Mata_Kuliah,
                    'SKS' => $request->SKS,
                ]
            );
        return redirect()->route('dataMahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dataMahasiswa::destroy($id);
        return redirect()->route('dataMahasiswa.index');
    }
}
