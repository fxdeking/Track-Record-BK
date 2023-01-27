<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konselor;

class KonselorController extends Controller
{
    public function index() {
        $konselors = Konselor::all();
        return view ('konselor.index', compact('konselors'));
    }

    public function input() {
        return view ('konselor.create');
    }

    public function tambah(Request $request) {
        $this->validate($request,[
            'jk'=>'required',
            'notelp'=>'required|min:3|max:20',
            'nama'=>'required|min:3|max:35'
        ], ['jk.required'=>'Isi jenis kelamin konselor terlebih dahulu',
            'notelp.required'=>'Isi nomor telepon konselor terlebih dahulu',
            'notelp.min'=>'Minimal 3 karakter',
            'notelp.max'=>'Maksimal 20 karakter',
            'nama.required'=>'Isi nama konselor terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 35 karakter']);

            Konselor::create([
                'jk'=>$request->get('jk'),
                'notelp'=>$request->get('notelp'),
                'nama'=>$request->get('nama')
            ]);
    
            return redirect()->route('kon')->with('message', 'Data Konselor Berhasil Disimpan');
    }

    public function edit(Request $request, $id) {
        $konselor = Konselor::find($id);
        return view ('konselor.edit', compact('konselor'));
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'jk'=>'required',
            'notelp'=>'required|min:3|max:20',
            'nama'=>'required|min:3|max:35'
        ], ['jk.required'=>'Isi jenis kelamin konselor terlebih dahulu',
            'notelp.required'=>'Isi nomor telepon konselor terlebih dahulu',
            'notelp.min'=>'Minimal 3 karakter',
            'notelp.max'=>'Maksimal 20 karakter',
            'nama.required'=>'Isi nama konselor terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 35 karakter']);

            Konselor::find($id)->update([
                'jk'=>$request->get('jk'),
                'notelp'=>$request->get('notelp'),
                'nama'=>$request->get('nama')
            ]);
    
            return redirect()->route('kon')->with('message', 'Data Konselor Berhasil Diubah');
    }

    public function delete($id) {
        $konselor = Konselor::find($id);
        $konselor->delete();
        return redirect()->route('kon')->with('message', 'Data Konselor Berhasil Dihapus');
    }
}
