<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index() {
        $jadwals = Jadwal::all();
        return view ('jadwal.index', compact('jadwals'));
    }

    public function input() {
        return view ('jadwal.create');
    }

    public function tambah(Request $request) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'hari'=>'required',
            'jammulai'=>'required',
            'jamselesai'=>'required'
        ], ['nama.required'=>'Isi nama terlebih dahulu',
            'jammulai.required'=>'Isi jam mulai terlebih dahulu',
            'jamselesai.required'=>'Isi jam selesai terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 50 karakter']);

            Jadwal::create([
                'nama'=>$request->get('nama'),
                'hari'=>implode(", ",$request->get('hari')),
                'jammulai'=>$request->get('jammulai'),
                'jamselesai'=>$request->get('jamselesai')
            ]);
    
            return redirect()->route('jad')->with('message', 'Jadwal Berhasil Disimpan');
    }

    public function edit(Request $request, $id) {
        $jadwal = Jadwal::find($id);
        return view ('jadwal.edit', ['hari'=>explode(", ",$jadwal->hari)], compact('jadwal'));
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'hari'=>'required',
            'jammulai'=>'required',
            'jamselesai'=>'required'
        ], ['nama.required'=>'Isi nama terlebih dahulu',
            'jammulai.required'=>'Isi jam mulai terlebih dahulu',
            'jamselesai.required'=>'Isi jam selesai terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 50 karakter']);

            Jadwal::find($id)->update([
                'nama'=>$request->get('nama'),
                'hari'=>implode(", ",$request->get('hari')),
                'jammulai'=>$request->get('jammulai'),
                'jamselesai'=>$request->get('jamselesai')
            ]);
    
            return redirect()->route('jad')->with('message', 'Jadwal Berhasil Diubah');
    }

    public function delete($id) {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect()->route('jad')->with('message', 'Jadwal Berhasil Dihapus');
    }
}
