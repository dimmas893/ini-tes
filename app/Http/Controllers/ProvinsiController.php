<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{

    public function edit($id)
    {
        $provinsi = Provinsi::Find($id);
        return view('edit_provinsi', compact('provinsi'));
    }

    public function update($id, Request $request)
    {
        // $id = $request->id;
        $emp = Provinsi::find($id);
        $emp->nama_provinsi = $request->nama_provinsi;
        $emp->active = $request->active;
        $emp->save();

        // $kecamatan = Provinsi::all();
        return back()->with('success', 'berhasil');
        // return response()->json($emp);
    }

    public function store(Request $request)
    {
        $p = 1;

        $b = $p++;
        $create = ['kode' => $b, 'nama_provinsi' => $request->nama_provinsi, 'active' => $request->active];
        Provinsi::create($create);
        return back()->with('success', 'berhasi menambah data');
    }

    public function delete($id)
    {
        Provinsi::Find($id)->delete();
        return back()->with('success', 'berhasil enghapus');
    }
}
