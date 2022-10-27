<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pegawai;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function edit($id)
    {
        $pegawai = Pegawai::Find($id);

        $kecamatan  = Kecamatan::all();
        $provinsi  = Provinsi::all();
        $kelurahan  = Kelurahan::all();
        return view('edit_pegawai', compact('pegawai', 'kelurahan', 'provinsi', 'kecamatan'));
    }

    public function update($id, Request $request)
    {
        // $id = $request->id;
        $emp = Pegawai::find($id);
        $emp->nama_pegawai = $request->nama_pegawai;
        $emp->tempat_lahir = $request->tempat_lahir;
        $emp->tgl_lahir = $request->tgl_lahir;
        $emp->jenis_kelamin = $request->jenis_kelamin;
        $emp->agama = $request->agama;
        $emp->alamat = $request->alamat;
        $emp->id_kelurahan = $request->id_kelurahan;
        $emp->id_kecamatan = $request->id_kecamatan;
        // $emp->id_provinsi = $request->id_provinsi;
        $emp->save();

        // $kecamatan = Provinsi::all();
        return back()->with('success', 'berhasil');
        // return response()->json($emp);
    }

    public function store(Request $request)
    {
        $create = [
            'nama_pegawai' => $request->nama_pegawai,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'id_kelurahan' => $request->id_kelurahan,
            // 'id_kecamatan' => $request->id_kecamatan,
            // 'id_provinsi' => $request->id_provinsi
        ];
        Pegawai::create($create);
        return back()->with('success', 'berhasi menambah data');
    }

    public function delete($id)
    {
        Pegawai::Find($id)->delete();
        return back()->with('success', 'berhasil enghapus');
    }
}
