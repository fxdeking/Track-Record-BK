<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class PengunjungController extends Controller
{
    public function index() {
        $pengunjungs = Pengunjung::all();
        return view ('pengunjung.index', compact('pengunjungs'));
    }

    public function input() {
        return view ('pengunjung.create');
    }

    public function tambah(Request $request) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'kelas'=>'required|max:35',
            'usia'=>'required|max:3',
            'jk'=>'required',
            'alamat'=>'required|min:3|max:200',
            'notelp'=>'required|min:3|max:20',
            'kategori_id'=>'required'
        ], ['nama.required'=>'Isi nama pengunjung terlebih dahulu',
            'kelas.required'=>'Isi kelas pengunjung terlebih dahulu',
            'usia.required'=>'Isi usia pengunjung terlebih dahulu',
            'jk.required'=>'Isi jenis kelamin pengunjung terlebih dahulu',
            'alamat.required'=>'Isi alamat pengunjung terlebih dahulu',
            'notelp.required'=>'Isi nomor telepon pengunjung terlebih dahulu',
            'kategori_id.required'=>'Pilih kategori keluhan terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'alamat.min'=>'Minimal 3 karakter',
            'notelp.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 50 karakter',
            'kelas.max'=>'Maksimal 35 karakter',
            'usia.max'=>'Maksimal 3 karakter',
            'alamat.max'=>'Maksimal 200 karakter',
            'notelp.max'=>'Maksimal 20 karakter']);

            Pengunjung::create([
                'nama'=>$request->get('nama'),
                'kelas'=>$request->get('kelas'),
                'usia'=>$request->get('usia'),
                'jk'=>$request->get('jk'),
                'alamat'=>$request->get('alamat'),
                'notelp'=>$request->get('notelp'),
                'kategori_id'=>$request->get('kategori_id')
            ]);
    
            return redirect()->route('peng')->with('message', 'Data Pengunjung Berhasil Disimpan');
    }

    public function edit(Request $request, $id) {
        $pengunjung = Pengunjung::find($id);
        return view ('pengunjung.edit', compact('pengunjung'));
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'kelas'=>'required|max:35',
            'usia'=>'required|max:3',
            'jk'=>'required',
            'alamat'=>'required|min:3|max:200',
            'notelp'=>'required|min:3|max:20',
            'kategori_id'=>'required'
        ], ['nama.required'=>'Isi nama pengunjung terlebih dahulu',
            'kelas.required'=>'Isi kelas pengunjung terlebih dahulu',
            'usia.required'=>'Isi usia pengunjung terlebih dahulu',
            'jk.required'=>'Isi jenis kelamin pengunjung terlebih dahulu',
            'alamat.required'=>'Isi alamat pengunjung terlebih dahulu',
            'notelp.required'=>'Isi nomor telepon pengunjung terlebih dahulu',
            'kategori_id.required'=>'Pilih kategori keluhan terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'alamat.min'=>'Minimal 3 karakter',
            'notelp.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 50 karakter',
            'kelas.max'=>'Maksimal 35 karakter',
            'usia.max'=>'Maksimal 3 karakter',
            'alamat.max'=>'Maksimal 200 karakter',
            'notelp.max'=>'Maksimal 20 karakter']);

            Pengunjung::find($id)->update([
                'nama'=>$request->get('nama'),
                'kelas'=>$request->get('kelas'),
                'usia'=>$request->get('usia'),
                'jk'=>$request->get('jk'),
                'alamat'=>$request->get('alamat'),
                'notelp'=>$request->get('notelp'),
                'kategori_id'=>$request->get('kategori_id')
            ]);
    
            return redirect()->route('peng')->with('message', 'Data Pengunjung Berhasil Diubah');
    }

    public function delete($id) {
        $pengunjung = Pengunjung::find($id);
        $pengunjung->delete();
        return redirect()->route('peng')->with('message', 'Data Pengunjung Berhasil Dihapus');
    }
}
