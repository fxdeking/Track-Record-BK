<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;

class CatatanController extends Controller
{
    public function index() {
        return view ('catatan.index');
    }

    public function input() {
        return view ('catatan.create');
    }

    public function tambah(Request $request) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:35',
            'catatan'=>'required|min:3|max:100'
        ], ['nama.required'=>'Isi nama terlebih dahulu',
            'catatan.required'=>'Isi catatan terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'catatan.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 35 karakter',
            'catatan.max'=>'Maksimal 100 karakter']);

            Catatan::create([
                'nama'=>$request->get('nama'),
                'catatan'=>$request->get('catatan')
            ]);
    
            return back()->with('message', 'Catatan Berhasil Disimpan');
    }

    public function edit(Request $request, $id) {
        $catat = Catatan::find($id);
        return view ('catatan.edit', compact('catat'));
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:35',
            'catatan'=>'required|min:3|max:100'
        ], ['nama.required'=>'Isi nama terlebih dahulu',
            'catatan.required'=>'Isi catatan terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'catatan.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 35 karakter',
            'catatan.max'=>'Maksimal 100 karakter']);

            Catatan::find($id)->update([
                'nama'=>$request->get('nama'),
                'catatan'=>$request->get('catatan')
            ]);
    
            return redirect()->route('cat')->with('message', 'Catatan Berhasil Diubah');
    }

    public function delete($id) {
        $catat = Catatan::find($id);
        $catat->delete();
        return redirect()->route('cat')->with('message', 'Catatan Berhasil Dihapus');
    }

    public function aboutus() {
        return view ('aboutus.index');
    }
}
