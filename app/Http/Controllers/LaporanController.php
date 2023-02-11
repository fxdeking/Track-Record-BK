<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Laporan;
use App\Models\Pengunjung;

class LaporanController extends Controller
{
    public function index() {
        $laporans = Laporan::all();
        return view ('laporan.index', compact('laporans'));
    }

    public function input(Request $request, $id) {
        $pengunjung = Pengunjung::find($id);
        return view ('laporan.create', compact('pengunjung'));
    }

    public function tambah(Request $request) {
        $this->validate($request,[
            'keluhan'=>'required|min:3',
            'kunjungan'=>'required',
            'pengunjung_id'=>['required', Rule::unique('laporans')],
            'kategori_id'=>'required'
        ], ['keluhan.required'=>'Isi keluhan pengunjung terlebih dahulu',
            'kunjungan.required'=>'Isi waktu kunjungan terlebih dahulu',
            'keluhan.min'=>'Minimal 3 karakter',
            'pengunjung_id.unique'=>'Laporan pengunjung sudah ada']);

            Laporan::create([
                'keluhan'=>$request->get('keluhan'),
                'kunjungan'=>$request->get('kunjungan'),
                'keluar'=>$request->get('keluar'),
                'pengunjung_id'=>$request->get('pengunjung_id'),
                'kategori_id'=>$request->get('kategori_id')
            ]);
    
            return redirect()->route('lap')->with('message', 'Data Laporan Pengunjung Berhasil Disimpan');
    }

    public function detail(Request $request, $id) {
        $laporan = Laporan::find($id);
        return view ('laporan.detail', compact('laporan'));
    }

    public function edit(Request $request, $id) {
        $laporan = Laporan::find($id);
        return view ('laporan.edit', compact('laporan'));
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'keluhan'=>'required|min:3',
            'kunjungan'=>'required'
        ], ['keluhan.required'=>'Isi keluhan pengunjung terlebih dahulu',
            'kunjungan.required'=>'Isi waktu kunjungan terlebih dahulu',
            'keluhan.min'=>'Minimal 3 karakter']);

            Laporan::find($id)->update([
                'keluhan'=>$request->get('keluhan'),
                'kunjungan'=>$request->get('kunjungan'),
                'keluar'=>$request->get('keluar')
            ]);
    
            return redirect()->route('lap')->with('message', 'Data Laporan Pengunjung Berhasil Diubah');
    }

    public function delete($id) {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect()->route('lap')->with('message', 'Data Laporan Pengunjung Berhasil Dihapus');
    }
}
