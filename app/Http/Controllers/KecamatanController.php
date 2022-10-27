<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::Find($id);
        return view('edit_kecamatan', compact('kecamatan'));
    }

    public function update($id, Request $request)
    {
        // $id = $request->id;
        $emp = Kecamatan::find($id);
        $emp->nama_kecamatan = $request->nama_kecamatan;
        $emp->active = $request->active;
        $emp->save();

        $kecamatan = Kecamatan::all();
        return back()->with('success', 'berhasil');
        // return response()->json($emp);
    }

    public function store(Request $request)
    {
        $p = 1;

        $b = $p++;
        $create = ['kode' => $b, 'nama_kecamatan' => $request->nama_kecamatan, 'active' => $request->active];
        Kecamatan::create($create);
        return back()->with('success', 'berhasi menambah data');
    }

    public function delete($id)
    {
        Kecamatan::Find($id)->delete();
        return back()->with('success', 'berhasil enghapus');
    }
}
