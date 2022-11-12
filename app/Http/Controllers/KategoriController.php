<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index() {
        $kategoris = Kategori::all();
        return view ('kategori.index', compact('kategoris'));
    }

    public function input() {
        return view ('kategori.create');
    }

    public function tambah(Request $request) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'deskripsi'=>'required|min:3|max:150'
        ], ['nama.required'=>'Isi kategori terlebih dahulu',
            'deskripsi.required'=>'Isi deskripsi terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'deskripsi.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 50 karakter',
            'deskripsi.max'=>'Maksimal 150 karakter']);

            Kategori::create([
                'nama'=>$request->get('nama'),
                'deskripsi'=>$request->get('deskripsi')
            ]);
    
            return back()->with('message', 'Kategori Berhasil Disimpan');
    }

    public function edit(Request $request, $id) {
        $kategori = Kategori::find($id);
        return view ('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'deskripsi'=>'required|min:3|max:150'
        ], ['nama.required'=>'Isi kategori terlebih dahulu',
            'deskripsi.required'=>'Isi deskripsi terlebih dahulu',
            'nama.min'=>'Minimal 3 karakter',
            'deskripsi.min'=>'Minimal 3 karakter',
            'nama.max'=>'Maksimal 50 karakter',
            'deskripsi.max'=>'Maksimal 150 karakter']);

            Kategori::find($id)->update([
                'nama'=>$request->get('nama'),
                'deskripsi'=>$request->get('deskripsi')
            ]);
    
            return redirect()->route('kat')->with('message', 'Kategori Berhasil Diubah');
    }

    public function delete($id) {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('kat')->with('message', 'Kategori Berhasil Dihapus');
    }
}
