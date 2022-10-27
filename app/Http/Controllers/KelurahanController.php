<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{

    public function edit($id)
    {
        $kelurahan = Kelurahan::Find($id);
        return view('edit_kelurahan', compact('kelurahan'));
    }

    public function update($id, Request $request)
    {
        // $id = $request->id;
        $emp = Kelurahan::find($id);
        $emp->nama_kelurahan = $request->nama_kelurahan;
        $emp->id_kecamatan = $request->id_kecamatan;
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
        $create = ['kode' => $b, 'nama_kelurahan' => $request->nama_kelurahan, 'id_kecamatan' => $request->id_kecamatan, 'active' => $request->active];
        Kelurahan::create($create);
        return back()->with('success', 'berhasi menambah data');
    }

    public function delete($id)
    {
        Kelurahan::Find($id)->delete();
        return back()->with('success', 'berhasil enghapus');
    }
}
